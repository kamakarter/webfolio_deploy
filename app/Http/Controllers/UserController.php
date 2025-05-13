<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{

    // registration
    public function register(Request $request)
    {
        $request->validate([
            'login' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $user = User::create([
            'login' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => '',
            'surname' => '',
            'about_me' => '',
            'country' => '',
            'city' => '',
            'phone' => '',
            'telegram_link' => '',
            'whatsapp_link' => '',
            'social_email' => '',
            'github_link' => '',
            'website_link' => '',
            'stack' => '',
        ]);


        return redirect()->route('show.signin');
    }

    // login

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ], [
            'email.required' => 'Логин обязателен для заполнения.',
            'password.required' => 'Пароль обязателен для заполнения.',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('show.account');
        }

        return back()->withErrors([
            'email' => 'Неверная почта или пароль.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.signin');
    }


    // edit user data

    public function showEditUserData($id)
    {
        $user = User::find($id);
        return view('pages.edit_user_data', compact('user'));
    }

    public function editUserData(Request $request, $id)
    {
        $user = User::find($id);

        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'surname' => 'nullable|string|max:255',
            'about_me' => 'nullable|string',
            'country' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'telegram_link' => 'nullable|string|max:255',
            'whatsapp_link' => 'nullable|string|max:255',
            'social_email' => 'nullable|email|max:255',
            'github_link' => 'nullable|string|max:255',
            'website_link' => 'nullable|string|max:255',
            'stack' => 'nullable|string',
        ]);

        $user->update($validated);

        return redirect()->route('show.account');
    }

    public function showUploadUserAvatar()
    {
        return view('pages.add_user_avatar');
    }


    public function uploadUserAvatar(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5200',
        ]);

        if ($request->hasFile('avatar')) {
            if ($user->user_avatar && file_exists(public_path($user->user_avatar))) {
                unlink(public_path($user->user_avatar));
            }

            $filename = uniqid() . '.' . $request->file('avatar')->getClientOriginalExtension();

            $request->file('avatar')->move(public_path('avatars'), $filename);

            $user->update([
                'user_avatar' => 'avatars/' . $filename,
            ]);
        }

        return redirect()->route('show.account');
    }

    public function addUserBackground()
    {
        return view('pages.add_user_bg');
    }

    public function uploadUserBackground(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'user_bg' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5200',
        ]);

        if ($request->hasFile('user_bg')) {
            $filename = uniqid() . '.' . $request->file('user_bg')->getClientOriginalExtension();

            $request->file('user_bg')->move(public_path('backgrounds'), $filename);

            $user->update([
                'user_bg' => $filename,  
            ]);
        }

        return redirect()->route('show.account');
    }
}

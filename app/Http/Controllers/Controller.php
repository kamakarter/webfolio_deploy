<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    # MORE PAGES

    public function showHomePage()
    {
        $all_users_with_avatars = User::whereNotNull('user_avatar')->get();
        $users_avatars = $all_users_with_avatars->shuffle()->take(8);

        return view('pages.home', compact('users_avatars'));
    }

    public function showPolicyPage()
    {
        return view('pages.policy');
    }

    public function showHelpPage()
    {
        return view('pages.help');
    }

    public function showError404()
    {
        return view('includes.404');
    }

    public function showNotAdminPage()
    {
        return view('includes.not_admin');
    }

    public function showNotAuthPage()
    {
        return view('includes.not_auth');
    }

    ### USER PAGES

    public function showSignUp()
    {
        return view('pages.sign_up');
    }

    public function showSignIn()
    {
        return view('pages.sign_in');
    }
    
    public function showAccount()
    {
        $experiences = Experience::where('user_id', Auth::user()->id)->get();
        $projects = Project::where('user_id', Auth::user()->id)->get();

        return view('pages.account', compact('experiences', 'projects'));
    }

    public function showUserAccount($login)
    {
        $user = User::where('login', $login)->first();

        $experiences = Experience::where('user_id', $user->login)->get();
        $projects = Project::where('user_id', $user->login)->get();
        

        return view('pages.show_user_account', compact('user', 'experiences', 'projects'));
    }

    public function showAddUserData()
    {
        return view('pages.add_user_data');
    }

    

    
}

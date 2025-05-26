<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Subscription;
use App\Models\Tariff;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminPanelPage()
    {
        // $users = User::all();
        $users = User::whereIn('role', ['blocked', 'user'])->get();


        $users = User::whereIn('role', ['blocked', 'user'])->get();
        
        $newUsersThisMonth = User::whereIn('role', ['blocked', 'user'])
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
        
        $usersWithCompleteProfile = User::whereIn('role', ['blocked', 'user'])
        ->whereNotNull('name')
        ->whereNotNull('surname')
        ->whereNotNull('email')
        ->whereNotNull('country')
        ->whereNotNull('city')
        ->count();

        $usersWithCompleteFiftyProfile = User::whereIn('role', ['blocked', 'user'])
        ->whereNotNull('name')
        ->whereNotNull('surname')
        ->whereNotNull('email')
        ->whereNotNull('country')
        ->whereNotNull('city')
        ->whereNotNull('phone')
        ->whereNotNull('stack')
        ->whereNotNull('about_me')
        ->whereNotNull('about_me')
        ->whereNotNull('user_avatar')
        ->count();

        $subscribedUsers = User::whereIn('role', ['blocked', 'user'])
        ->whereHas('subscriptions', function($query) {
            $query->where('is_active', 1)
                ->where('end_date', '>=', now());
        })
        ->count();

        // 6. Пользователи с истекшими подписками
    $expiredSubscriptions = User::whereIn('role', ['blocked', 'user'])
        ->whereHas('subscriptions', function($query) {
            $query->where('end_date', '<', now());
        })
        ->count();
    
    // 7. Самый популярный тариф
    $popularTariff = Tariff::withCount(['subscriptions' => function($query) {
            $query->where('is_active', 1)
            ->where('end_date', '>=', now());
        }])
        ->orderByDesc('subscriptions_count')
        ->first();
        
        


        $projects = Project::all();
        $experiences = Experience::all();
        $tariffs = Tariff::all();
        // $subscriptions = Subscription::all();
        // $subscriptions = Subscription::all();
        $subscriptions = Subscription::with(['user', 'tariff'])->get();
        return view('pages.admin_panel' , compact('users', 'projects', 'experiences', 'tariffs', 'subscriptions', 'newUsersThisMonth', 'usersWithCompleteProfile' , 'usersWithCompleteFiftyProfile','subscribedUsers', 'expiredSubscriptions', 'popularTariff'));
    }

    public function blockedUser($id)
    {
        $user = User::find($id);
        $user->role = 'blocked';
        $user->save();
        
        return redirect()->back()->with('success', 'Пользователь успешно заблокирован');
    }

    public function unblockedUser($id)
    {
        $user = User::find($id);
        $user->role = 'user';
        $user->save();
        return redirect()->back()->with('success', 'Пользователь успешно разблокирован');
    }
}

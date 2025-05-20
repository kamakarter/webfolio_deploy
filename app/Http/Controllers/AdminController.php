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
        $users = User::all();
        $projects = Project::all();
        $experiences = Experience::all();
        $tariffs = Tariff::all();
        // $subscriptions = Subscription::all();
        // $subscriptions = Subscription::all();
        $subscriptions = Subscription::with(['user', 'tariff'])->get();
        return view('pages.admin_panel' , compact('users', 'projects', 'experiences', 'tariffs', 'subscriptions'));
    }

    public function blockedUser($id)
    {
        $user = User::find($id);
        $user->role = 'blocked';
        $user->save();
        
        return redirect()->back();
    }

    public function unblockedUser($id)
    {
        $user = User::find($id);
        $user->role = 'user';
        $user->save();
        return redirect()->back();
    }
}

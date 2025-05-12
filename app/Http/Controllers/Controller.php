<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    # MORE PAGES

    public function showHomePage()
    {
        return view('pages.home');
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
        $experiences = Experience::where('user_id', auth()->user()->id)->get();
        $projects = Project::where('user_id', auth()->user()->id)->get();


        return view('pages.account', compact('experiences', 'projects'));
    }

    public function showUserAccount()
    {
        return view('pages.show_user_account');
    }

    public function showAddUserData()
    {
        return view('pages.add_user_data');
    }

    
}

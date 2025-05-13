<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\User;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{

    // ADD EXPERIENCE

    public function showAddExperience()
    {
        return view('pages.add_user_experience');
    }

    public function addExperience(Request $request, $id)
    {
        $user = User::find($id);
        $user_id = $user->id;

        $validated = $request->validate([
            'profession' => 'required|string|max:255',
            'company_logotype' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:5200',
            'company_name' => 'required|string|max:255',
            'tasks' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        if ($request->hasFile('company_name')) {
            $company_name = uniqid() . '.' . $request->file('company_name')->getClientOriginalExtension();
            $validated['company_name'] = $company_name;

            $request->file('company_name')->move(public_path('company_logotypes'), $company_name);
        }

        Experience::create([
            'user_id' => $user_id,
            'company_name' => $validated['company_name'],
            'profession' => $validated['profession'],
            'tasks' => $validated['tasks'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'company_logotype' => $validated['company_logotype'],
        ]);

        return redirect()->route('show.account');
    }

    // EDIT EXPERIENCE

    // ------------------------------------------------------------

    // DELETE EXPERIENCE

    public function showDeleteExperience($id)
    {
        $experience = Experience::find($id);

        return view('pages.delete_user_experience' , compact('experience'));
    }

    public function deleteExperience($id)
    {
        $experience = Experience::find($id);

        $experience->delete();

        return redirect()->route('show.account');
    }
    
    

    
}

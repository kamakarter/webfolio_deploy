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

        if ($request->hasFile('company_logotype')) {
            $company_logotype = uniqid() . '.' . $request->file('company_logotype')->getClientOriginalExtension();
            $validated['company_logotype'] = $company_logotype;

            $request->file('company_logotype')->move(public_path('company_logotypes'), $company_logotype);
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

        // return redirect()->route('show.account');
        return redirect()->route('show.account') . '#user-exp';
    }

    // EDIT EXPERIENCE

    public function showEditExperience($id)
    {
        $experience = Experience::find($id);

        return view('pages.edit_user_experience', compact('experience'));
    }   

    public function editExperience(Request $request, $id)
    {
        $experience = Experience::find($id);

        $validated = $request->validate([
            'profession' => 'required|string|max:255',
            'company_logotype' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:5200',
            'company_name' => 'required|string|max:255',
            'tasks' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        if ($request->hasFile('company_logotype')) {
            $company_logotype = uniqid() . '.' . $request->file('company_logotype')->getClientOriginalExtension();
            $validated['company_logotype'] = $company_logotype;

            $request->file('company_logotype')->move(public_path('company_logotypes'), $company_logotype);
        }
        else {
            $validated['company_logotype'] = $experience->company_logotype;
        }

        $experience->update($validated);

        // return redirect()->route('show.account');
        return redirect()->route('show.account') . '#user-exp';

    }

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

        // return redirect()->route('show.account'); 
        return redirect()->route('show.account') . '#user-exp';
    }
    
    

    
}

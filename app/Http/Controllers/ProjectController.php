<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    // Добавление проекта
    public function showAddProject()
    {
        return view('pages.add_user_project');
    }

    public function addProject(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100|min:2',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'description' => 'nullable|string|max:100|min:10',
            'stack' => 'nullable|string|max:100|min:2',
            'github_link' => 'nullable|string|url|max:100',
            'deploy_link' => 'nullable|string|url|max:100',
        ]);

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $cover = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('projects_covers'), $cover);
        }

        Project::create([
            'title' => $request->title,
            'cover' => 'projects_covers/' . $cover,
            'description' => $request->description,
            'stack' => $request->stack,
            'github_link' => $request->github_link,
            'deploy_link' => $request->deploy_link,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('show.account');
    }

    // Редактирование проекта

    public function showEditProject($id)
    {
        $project = Project::find($id);
        return view('pages.edit_user_project', compact('project'));
    }

    public function editProject(Request $request, $id)
    {
        $project = Project::find($id);

        $request->validate([
            'title' => 'required|string|max:100|min:2',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'description' => 'nullable|string|max:100|min:10',
            'stack' => 'nullable|string|max:100|min:2',
            'github_link' => 'nullable|string|url|max:100',
            'deploy_link' => 'nullable|string|url|max:100',
        ]);

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $cover = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('projects_covers'), $cover);
            $cover = 'projects_covers/' . $cover;
        }
        else {
            $cover = $project->cover;
        }

        $project->update([
            'title' => $request->title,
            'cover' => $cover,
            'description' => $request->description,
            'stack' => $request->stack,
            'github_link' => $request->github_link,
            'deploy_link' => $request->deploy_link,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('show.account');
    }

    // Удаление проекта

    public function showDeleteProject($id)
    {
        $project = Project::find($id);
        return view('pages.delete_user_project', compact('project'));
    }

    public function deleteProject($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('show.account');
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Assuming you have a Project model

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('dashboard', compact('projects'));
    }

    public function create()
    {
        return view('create_project'); 
    }

    public function store(Request $request)
    {
        $project = new Project;
        $project->title_research = $request->title_research;
        $project->brief_research = $request->brief_research;
        $project->save();
        
        return redirect()->route('projects.index'); // Assuming you named your routes.
    }

    public function show($id)
    {
        $project = Project::find($id);
        return view('show_project', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('edit_project', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->title_research = $request->title_research;
        $project->brief_research = $request->brief_research;
        $project->save();
        
        return redirect()->route('projects.index'); // Assuming you named your routes.
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('projects.index');
    }
}

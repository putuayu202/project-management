<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();  // Fetch all projects
        return view('projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'project_date' => 'required|date',
            'project_value' => 'required|numeric',
            'file_bast' => 'required|file',
        ]);

        $path = $request->file('file_bast')->store('public/projects');

        $project = new Project;
        $project->nama_projek = $request->project_name;
        $project->tanggal_projek = $request->project_date;
        $project->nominal_projek = $request->project_value;
        $project->file_bast_path = $path;
        $project->save();

        toastr()->success('Data has been saved successfully!'  );
        return back();
    }
}

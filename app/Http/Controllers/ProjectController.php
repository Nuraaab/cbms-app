<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $project = new Project();
       $owner_id = $request->input('owner');
       $project->title = $request->title;
       $project->description = $request->description;
       $project->location = $request->location;
       $project->start_date = $request->start_date;
       $project->end_date = $request->end_date;
       $project->specifications = $request->specification;
       $project->user_id = $owner_id;
       $project->save();
       if($project){
        return redirect()->back()->with(['message' => 'Project added successfully']);
       }else{
        return redirect()->back()->with(['message' => 'Error on adding project']);
       }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ProjectOwner;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectOwnerController extends Controller
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
      
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->usertype = "projectOwner";
       $user->phone_number = $request->phone_number;
       $user->address = $request->address;

       $user->save();
       if($user){
        return redirect()->back()->with(['message' => 'Owner Added successfully']);
       }else{
        return redirect()->back()->with(['message' => 'Error on adding owner']);
       }
      
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectOwner $projectOwner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectOwner $projectOwner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectOwner $projectOwner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectOwner $projectOwner)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectOwner;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function dashboard() {
    return view('admin.pages.dashboard');
  }
  public function owner() {
    return view('admin.pages.owners.owner');
  }
  public function add_owner() {
    return view('admin.pages.owners.create_owner');
  }
  public function edit_owner() {
    return view('admin.pages.owners.edit_owner');
  }

  //constructor
  public function contractor() {
    return view('admin.pages.contractors.contractors');
  }
  public function add_contractor() {
    return view('admin.pages.contractors.create_contractor');
  }
  public function edit_contractor() {
    return view('admin.pages.contractors.edit_contractor');
  }
  //constructor

    //project
  public function project() {
    return view('admin.pages.projects.projects');
  }
  public function add_project() {
    $owners = User::where('usertype', 'projectOwner')->get();
    return view('admin.pages.projects.create_project', compact('owners'));
  }
  public function edit_project() {
    return view('admin.pages.projects.edit_project');
  }
  //project

  //bids
  public function bid() {
    return view('admin.pages.bids.bids');
  }
  public function add_bid() {
    $projects = Project::all();
    $owners = User::where('usertype', 'projectOwner')->get();
    return view('admin.pages.bids.create_bid', compact('projects', 'owners'));
  }
  public function edit_bid() {
    return view('admin.pages.bids.edit_bid');
  }
  //bids


  //supplier
  public function supplier() {
    return view('admin.pages.suppliers.suppliers');
  }
  public function add_supplier() {
    return view('admin.pages.suppliers.create_supplier');
  }
  public function edit_supplier() {
    return view('admin.pages.suppliers.edit_supplier');
  }
 //supplier

 //user
  public function user() {
    return view('admin.pages.user.user');
  }
  public function add_user() {
    return view('admin.pages.user.create_user');
  }
  public function edit_user() {
    return view('admin.pages.user.edit_user');
  }
  //user
}

<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Contractor;
use App\Models\Project;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index() {
        $contractors = User::where('usertype', 'contractor')->get();
        $bids = Bid::all();
        $suppliers = Supplier::all();
        if (Auth::check()) {
            $bidsById = Bid::where('user_id', Auth::user()->id)->get();
        } else {
            $bidsById = [];
        }
        return view('user.pages.home', compact(['contractors', 'bids', 'suppliers', 'bidsById']));
    }

    function about() {
        return view('user.pages.about');
    }

    function contractors (){
        $contractors = User::where('usertype', 'contractor')->get();
        $projects = Project::all();
        return view('user.pages.contractors', compact(['contractors', 'projects']));
    }

    function projects (){
        $projects = Project::all();
        return view('user.pages.projects', compact('projects'));
    }
    public function project_owners() {
        $contractors = User::where('usertype', 'contractor')->get();
        $projects = Project::all();
        $bids = Bid::all();
        $suppliers = Supplier::all();
        if (Auth::check()) {
            $projectsById = Project::where('user_id', Auth::user()->id)->get();
            $bidsById = Bid::where('user_id', Auth::user()->id)->get();
        } else {
            $projectsById = [];
            $bidsById = [];
        }
             return view('user.pages.project_owner', compact(['contractors', 'projectsById', 'bidsById', 'projects', 'bids', 'suppliers'])); 
    }

    function supplier (){
        return view('user.pages.supplier');
    }

    function signup (){
        return view('user.pages.signup');
    }

    function login () {
        return view('user.pages.signup');  
    }
    public function redirect() {
        $usertype = Auth::user()->usertype;
        
        if($usertype === "admin"){
             return view('admin.pages.dashboard');
        }else{
            $contractors = User::where('usertype', 'contractor')->get();
            $bids = Bid::all();
            $suppliers = Supplier::all();
            if (Auth::check()) {
                $bidsById = Bid::where('user_id', Auth::user()->id)->get();
            } else {
                $bidsById = [];
            }
             return view('user.pages.home', compact(['contractors','bids','suppliers', 'bidsById']));
        }
    }
}

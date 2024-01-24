<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.pages.bids.add_bids');
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
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bid $bid)
    {
        //
    }

    public function bids(){
        $bids = Bid::all();
        return view('user.pages.bids.bids', compact('bids'));
    }

    public function storeBid(Request $request) {
        $bid = new Bid();
        $bid->price = $request->price;
        $bid->project_id = $request->input('project');
        $bid->user_id = $request->input('owner');
 
        $bid->save();
        return redirect()->back()->with(['message' => 'Bid added successfully']);
    }
}

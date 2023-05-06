<?php

namespace App\Http\Controllers;

use App\Models\location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location = location::all();
        return view('admin.location',compact('location'));
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
         $input = $request->all();
         
          location::create($input);
   
        return redirect()->route('locations.index')->with('success','Location Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, location $location)
    {
       $input = $request->all();
       $location->update($input);
       return redirect()->route('locations.index')->with('success','Location updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(location $location)
    {
        
        $location->delete();
  
        return redirect()->route('locations.index')->with('success','Location Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\locationUser;
use App\Models\location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $location_users = DB::table('location_users')
            ->join('locations', 'location_users.location_id', '=', 'locations.id')
            // ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('location_users.*', 'locations.name as locationname')
            ->get();
            // var_dump($location_users);die;
        // $location_users = reward::all();
        $locations = location::all();
        return view('admin.location_users',compact('location_users','locations'));
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
  
       if ($image = $request->file('image1')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }
       
       
  
       $location =  locationUser::create($input);
  
        return redirect()->route('location_users.index')->with('success','location User Created Successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(reward $reward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reward $reward)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request,  $id)
    {
       
      
  
        $input = $request->all();
  
        if ($image = $request->file('image1')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }else{
            unset($input['image']);
        }
       
        
        
          $locationUser = locationUser::findOrFail($id);
        $locationUser->update($input);
  
        return redirect()->route('location_users.index')->with('success','User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
       $locationUser = locationUser::findOrFail($id);
        $locationUser->delete();
        return redirect()->route('location_users.index')->with('success','User Deleted Successfully');
    }
}

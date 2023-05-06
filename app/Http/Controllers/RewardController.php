<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\reward;
use App\Models\location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $rewards = DB::table('rewards')
            ->join('locations', 'rewards.location_id', '=', 'locations.id')
            // ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('rewards.*', 'locations.name as locationname')
            ->get();
            // var_dump($rewards);die;
        // $rewards = reward::all();
        $locations = location::all();
        return view('admin.rewards',compact('rewards','locations'));
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
       
       
  
        reward::create($input);
   
        return redirect()->route('rewards.index')->with('success','Reward Created Successfully.');
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
       
        
        
          $reward = reward::findOrFail($id);
        $reward->update($input);
  
        return redirect()->route('rewards.index')->with('success','Reward Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
       $reward = reward::findOrFail($id);
        $reward->delete();
        return redirect()->route('rewards.index')->with('success','Reward Deleted Successfully');
    }
}

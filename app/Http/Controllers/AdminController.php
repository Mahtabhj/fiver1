<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        
        return view('admin.dashboard');

    }
    public function indexlogin()
    {
        
        return view('admin.login');

    }
     public function login(request $request)
    {
        
       if(\Auth::attempt($request->only('email','password'))){
        return redirect("/adminDash");
    }else{
        return redirect("/login")->withError('login details are not matched');
    }

    }
    public function logout()
    {
        
        \Session::flush();
        \Auth::logout();
        return redirect("/login");
    }
    public function profile()
    {
        $userId = Auth::id();
        
        $data = User::where('id',$userId)->first();
        
        return view("admin.profile",['user' => $data]);
    }
    public function save_profile(Request $request)
    {
        
        $request->validate([
            'name' => 'required|min:10',
            'email' => 'required',
           
            'password' => 'same:c_password'
        ]);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        
        var_dump($request->email);die;
        $user->password =Hash::make($request->password);
        $user->save();

        return redirect()->route('profile')
                  ->with('success', 'updated successfully');
    }
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.admin',compact('users'));
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
       
        if ($password = $request->password) {
            
            $userpassword = Hash::make($request->password);;
            
            $input['password'] = "$userpassword";
        }
  
        User::create($input);
   
        return redirect()->route('admins.index')->with('success','Admin Created Successfully.');
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
       
         if ($password = $request->password) {
            
            $userpassword = Hash::make($request->password);;
            
            $input['password'] = "$userpassword";
        }else{
            unset($input['password']);
        }
        
          $user = User::findOrFail($id);
        $user->update($input);
  
        return redirect()->route('admins.index')->with('success','Admin Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
       $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admins.index')->with('success','Admin Deleted Successfully');
    }
}

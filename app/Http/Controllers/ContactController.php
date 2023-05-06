<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts=Contact::where('type', '=', 1)->get();
         return view('admin.contacts', ['contacts'=>$contacts]);
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
      $validatedData = $request->validate([
    'name' => 'required|max:255',
    'email' => 'required|email|unique:contacts,email|max:255',
    'phone' => 'required|numeric',
    'contact_type'=>'required',
]);
        
       $contact = new Contact();
        $contact->ProfileName = $request->input('name');
        $contact->email = $request->input('email');
        $contact->number = $request->input('phone');
        $contact->contact_type = $request->input('contact_type');
        $contact->type = 1;

        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $filename = $file->getClientOriginalName();
            $file->move('images/contacts/', $filename);
            $contact->image = $filename;
        }
        $contact->save();
        return redirect()->back()->with('status', 'Contact Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

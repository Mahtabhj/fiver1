<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorewebuserRequest;
use App\Http\Requests\UpdatewebuserRequest;
use App\Models\webuser;

class WebuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorewebuserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorewebuserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\webuser  $webuser
     * @return \Illuminate\Http\Response
     */
    public function show(webuser $webuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\webuser  $webuser
     * @return \Illuminate\Http\Response
     */
    public function edit(webuser $webuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatewebuserRequest  $request
     * @param  \App\Models\webuser  $webuser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatewebuserRequest $request, webuser $webuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\webuser  $webuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(webuser $webuser)
    {
        //
    }
}

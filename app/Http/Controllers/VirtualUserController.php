<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVirtualUserRequest;
use App\Http\Requests\UpdateVirtualUserRequest;
use App\Models\VirtualUser;

class VirtualUserController extends Controller
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
     * @param  \App\Http\Requests\StoreVirtualUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVirtualUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VirtualUser  $virtualUser
     * @return \Illuminate\Http\Response
     */
    public function show(VirtualUser $virtualUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VirtualUser  $virtualUser
     * @return \Illuminate\Http\Response
     */
    public function edit(VirtualUser $virtualUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVirtualUserRequest  $request
     * @param  \App\Models\VirtualUser  $virtualUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVirtualUserRequest $request, VirtualUser $virtualUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VirtualUser  $virtualUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(VirtualUser $virtualUser)
    {
        //
    }
}

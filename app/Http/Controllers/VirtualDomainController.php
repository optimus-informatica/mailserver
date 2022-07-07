<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVirtualDomainRequest;
use App\Http\Requests\UpdateVirtualDomainRequest;
use App\Models\VirtualDomain;

class VirtualDomainController extends Controller
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
     * @param  \App\Http\Requests\StoreVirtualDomainRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVirtualDomainRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VirtualDomain  $virtualDomain
     * @return \Illuminate\Http\Response
     */
    public function show(VirtualDomain $virtualDomain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VirtualDomain  $virtualDomain
     * @return \Illuminate\Http\Response
     */
    public function edit(VirtualDomain $virtualDomain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVirtualDomainRequest  $request
     * @param  \App\Models\VirtualDomain  $virtualDomain
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVirtualDomainRequest $request, VirtualDomain $virtualDomain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VirtualDomain  $virtualDomain
     * @return \Illuminate\Http\Response
     */
    public function destroy(VirtualDomain $virtualDomain)
    {
        //
    }
}

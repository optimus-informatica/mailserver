<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVirtualAliasRequest;
use App\Http\Requests\UpdateVirtualAliasRequest;
use App\Models\VirtualAlias;

class VirtualAliasController extends Controller
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
     * @param  \App\Http\Requests\StoreVirtualAliasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVirtualAliasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VirtualAlias  $virtualAlias
     * @return \Illuminate\Http\Response
     */
    public function show(VirtualAlias $virtualAlias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VirtualAlias  $virtualAlias
     * @return \Illuminate\Http\Response
     */
    public function edit(VirtualAlias $virtualAlias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVirtualAliasRequest  $request
     * @param  \App\Models\VirtualAlias  $virtualAlias
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVirtualAliasRequest $request, VirtualAlias $virtualAlias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VirtualAlias  $virtualAlias
     * @return \Illuminate\Http\Response
     */
    public function destroy(VirtualAlias $virtualAlias)
    {
        //
    }
}

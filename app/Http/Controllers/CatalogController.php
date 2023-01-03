<?php

namespace App\Http\Controllers;

use App\Models\catalog;
use App\Http\Requests\StorecatalogRequest;
use App\Http\Requests\UpdatecatalogRequest;

class CatalogController extends Controller
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
     * @param  \App\Http\Requests\StorecatalogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecatalogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show(catalog $catalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit(catalog $catalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecatalogRequest  $request
     * @param  \App\Models\catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecatalogRequest $request, catalog $catalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(catalog $catalog)
    {
        //
    }
}

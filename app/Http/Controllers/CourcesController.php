<?php

namespace App\Http\Controllers;

use App\Models\cources;
use App\Http\Requests\StorecourcesRequest;
use App\Http\Requests\UpdatecourcesRequest;

class CourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cources=cources::get();

        return view('admin.courses.showall',
        ['cources'=>$cources
        ]);
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
    public function store(StorecourcesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cources $cources)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cources $cources)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecourcesRequest $request, cources $cources)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cources $cources)
    {
        //
    }
}

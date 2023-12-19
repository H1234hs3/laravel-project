<?php

namespace App\Http\Controllers;

use App\Models\Donors;
use App\Http\Requests\StoreDonorsRequest;
use App\Http\Requests\UpdateDonorsRequest;
use App\Models\programs;

class DonorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Donors=Donors::get();
        $programs=programs::get();


        return view('admin.Donors.showAll',
        ['Donors'=>$Donors,
        "programs"=>$programs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = programs::get();
       
        return view('admin.Donors.create',
    ['programs'=>$programs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonorsRequest $request)
    {
        $Donors = new Donors();
        $Donors->first_name = $request->first_name;
        $Donors->last_name = $request->last_name;
        $Donors->phone = $request->phone;
        $Donors->email = $request->email;
        $Donors->country = $request->country;
        $Donors->city = $request->city;
        $Donors->cost = $request->cost;
      
        $Donors->description = $request->description;
        if($Donors->save()){
            if($request->project_type)
            $Donors->program()->attach($request->project_type);
            return redirect()->route('Donors.index');
          
            }
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Donors $donors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donors $donors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonorsRequest $request, Donors $donors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Donors = Donors::find($id);
        $Donors->status *= -1;
        if($Donors->save())
        return redirect()->route('Donors.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\orphans;
use App\Http\Requests\StoreorphansRequest;
use App\Http\Requests\UpdateorphansRequest;

class OrphansController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private $dir = 'OrphansController';
    public function index()
    {
        $orphans = orphans::get();
        return view('admin.orphan.showall',
        ['orphans' => $orphans ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.orphan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreorphansRequest $request)
    {
        $orphans = new orphans();
        $orphans->name_orphans = $request->name_orphans;
        $orphans->country = $request->country;
        $orphans->city = $request->city;
        $orphans->state = $request->state;
        $orphans->village = $request->village;
        $orphans->nationality = $request->nationality;
        $orphans->birth_date = $request->birth_date;
        $orphans->school_level = $request->school_level;
        $orphans->place_of_birth = $request->place_of_birth;
        $orphans->father_death_date = $request->father_death_date;
        $orphans->mother_name = $request->mother_name;
        $orphans->mother_N_ID = $request->mother_N_ID;
        $orphans->mother_state = $request->mother_state;
        $orphans->mother_work = $request->mother_work;
        $orphans->orphan_place = $request->orphan_place;
        $orphans->bro_count = $request->bro_count;

        $orphans->sister_count = $request->sister_count;
        $orphans->Type_of_orphan = $request->Type_of_orphan;
        $orphans->Guardian_name = $request->Guardian_name;
        $orphans->Guardian_N_ID = $request->Guardian_N_ID;
        $orphans->father_N_ID = $request->father_N_ID;
        $orphans->relationship_with_an_orphan = $request->relationship_with_an_orphan;
        $orphans->Health_status = $request->Health_status;
        $orphans->Guardian_phone = $request->Guardian_phone;
        $orphans->House_type = $request->House_type;
        $orphans->image = $request->image;
        $orphans->gender = $request->gender;
        $orphans->description = $request->description;
        

        $image_upload = $this->uploadImage($request->image, $this->dir);
        $orphans->image = $image_upload;




        if ($orphans->save())
        return redirect()->route('orphan.index');
    return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $orphans = orphans::find($id);
        return view('admin.orphan.details')->with([
            'orphans' => $orphans,]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $orphans = orphans::find($id);
        return view('admin.orphan.edit')->with([
            'orphans' => $orphans,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateorphansRequest $request,  $id)
    {
        $orphans =  orphans::find($id);

        $orphans->name_orphans = $request->name_orphans;
        $orphans->country = $request->country;
        $orphans->city = $request->city;
        $orphans->state = $request->state;
        $orphans->village = $request->village;
        $orphans->nationality = $request->nationality;
        $orphans->birth_date = $request->birth_date;
        $orphans->school_level = $request->school_level;
        $orphans->place_of_birth = $request->place_of_birth;
        $orphans->father_death_date = $request->father_death_date;
        $orphans->mother_name = $request->mother_name;
        $orphans->mother_N_ID = $request->mother_N_ID;
        $orphans->mother_state = $request->mother_state;
        $orphans->mother_work = $request->mother_work;
        $orphans->orphan_place = $request->orphan_place;
        $orphans->bro_count = $request->bro_count;

        $orphans->sister_count = $request->sister_count;
        $orphans->Type_of_orphan = $request->Type_of_orphan;
        $orphans->Guardian_name = $request->Guardian_name;
        $orphans->Guardian_N_ID = $request->Guardian_N_ID;
        $orphans->father_N_ID = $request->father_N_ID;
        $orphans->relationship_with_an_orphan = $request->relationship_with_an_orphan;
        $orphans->Health_status = $request->Health_status;
        $orphans->Guardian_phone = $request->Guardian_phone;
        $orphans->House_type = $request->House_type;
        $orphans->image = $request->image;
        $orphans->gender = $request->gender;
        $orphans->description = $request->description;
        

        if ($request->hasFile('image')) {

            $this->removeImage($orphans->image, $this->dir);
            $image_upload = $this->uploadImage($request->image,   $this->dir);
            $orphans->image = $image_upload;
        }
        if ($orphans->save())
            return redirect()->route('orphan.index');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $orphans = orphans::find($id);
        $orphans->status *= -1;
        if ($orphans->save())
            return redirect()->route('orphan.index');
        return redirect()->back();
    }


    public function uploadImage($image, $dir)
    {
        $imageName  = uniqid() . '_' . trim($image->getClientOriginalName());
        $path        = public_path() . "/admin/images/" . $dir;
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $image->move($path, $imageName);
        return $imageName;
    }


    public function removeImage($image, $dir)
    {
        if (\File::exists(public_path() . "/admin/images/" . $dir)) {
            \File::delete(public_path() . "/admin/images/" . $dir . "/" . $image);
        }
    }
}

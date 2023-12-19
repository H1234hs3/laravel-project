<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\profile;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Http\Requests\StoreclientRequest;
use App\Http\Requests\UpdateclientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients=client::get();

        return view('admin.clients.showall',
        ['clients'=>$clients,


       
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clients.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreclientRequest $request)
    {
        // $validated = $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);
        $profile = new profile();
        $profile->job = $request->job;
        $profile->phone = $request->phone;
        $profile->description = $request->description;

        $client= new client();
        $client->name=$request->name;
        $client->email=$request->email;
        $client->save();
        $profile->client()->associate($client);
       
       
        // $product->category()->associate($category);
       
        if ($profile->save())
                return redirect()->route('clients.index');
                return redirect()->back();

     
    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = client::find($id);
        return view('admin.clients.edit')->with([
            'client'=>$client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateclientRequest $request,  $id)
    {
        $client =  client::find($id);
        $client->name= $request->name;
        $client-> email = $request-> email;
        // $Product-> description = $request-> description;
        $client->profile->job = $request-> job;
        $client->profile->phone = $request-> phone;
        $client->profile->description = $request-> description;
        $client ->push();
        if ($client ->save())
            return redirect()->route('clients.index')->with(['message' =>'add successfully', 'type' => 'alert-success']);
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        //
    }
}

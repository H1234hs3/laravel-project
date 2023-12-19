<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\cources;

use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student=student::get();

        return view('admin.student.showall',
        ['student'=>$student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cources = cources::get();
       
        return view('admin.student.create',
    ['cources'=>$cources]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestudentRequest $request)
    {
        
        $student= new student();
        $student->name=$request->name;
        if($student->save()){
            if($request->cources)
      
        $student->courses()->attach($request->cources);
        return redirect()->route('student.index');
      
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cources = cources::get();
        $student = student::find($id);

        return view('admin.student.edit',
    ['cources'=>$cources,
    'student'=>$student

     ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentRequest $request, $id)
    {
        $student =  student::find($id);
            $student->name= $request->name;
          
           
            if($student->save()){
              
          
            $student->courses()->sync($request->cources);
            return redirect()->route('student.index');
          
            }
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }
}

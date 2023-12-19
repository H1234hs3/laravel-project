@extends('admin.Layouts.master')
@section('body')
<div class="col-12">
    <h2 class="page-title">student/create </h2>
    <div class="card shadow mb-4">

      <div class="card-body">
      <form action="{{route('student.update',$student->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-md-6">
            <div class="form-group mb-3">
              <label for="simpleinput">name</label>
              <input type="text" id="simpleinput" class="form-control" name="name" value="{{$student->name}}">
              <span class="text-danger" style="font-size: 15px;">@error('name'){{$message}}@enderror</span>

            </div>
          
           

          </div> <!-- /.col -->
          <div class="col-md-6">
          <select class="form-control mt-2 select2" name="cources[]" multiple>
                <option value="">select cources</option>

                  @foreach($cources as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
             
           
          </div>
        </div>
        <input class="btn btn-primary" type="submit">
       </form>
      </div>
    </div> <!-- / .card -->
   
  </div> <!-- .col-12 -->
@endsection

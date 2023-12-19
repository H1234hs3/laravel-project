@extends('admin.Layouts.master')
@section('body')
<div class="col-12">
    <h2 class="page-title">client/edit </h2>
    <div class="card shadow mb-4">

      <div class="card-body">
         <form action="{{route('clients.update',$client->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-md-6">
            <div class="form-group mb-3">
              <label for="simpleinput">name</label>
              <input type="text" id="simpleinput" class="form-control" value="{{$client->name}}" name="name">
            </div>
            <div class="form-group mb-3">
              <label for="simpleinput">email</label>
              <input type="text" id="simpleinput" class="form-control" value="{{$client->email}}" name="email">
            </div>
            <div class="form-group mb-3">
                <label for="example-textarea">description</label>
                <textarea class="form-control" id="example-textarea" rows="4" name="description"> {{$client->profile->description}}
                </textarea>
              </div>

          </div> <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="simpleinput">job</label>
                <input type="text" id="simpleinput" class="form-control" value="{{$client->profile->job}}" name="job">
              </div>
              <div class="form-group mb-3">
                <label for="simpleinput">phone</label>
                <input type="text" id="simpleinput" class="form-control" value="{{$client->profile->phone}}" name="phone">
              </div>
           
          </div>
        </div>
        <input class="btn btn-primary" type="submit">
       </form>
      </div>
    </div> <!-- / .card -->
   
  </div> <!-- .col-12 -->
@endsection

@extends('admin.Layouts.master')
@section('body')
<div class="col-12">
    <h2 class="page-title">Services/create </h2>
    <div class="card shadow mb-4">

      <div class="card-body">
         <form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group mb-3">
              <label for="simpleinput">name</label>
              <input type="text" id="simpleinput" class="form-control" name="name">
              <span class="text-danger" style="font-size: 15px;">@error('name'){{$message}}@enderror</span>

            </div>
            <div class="form-group mb-3">
                <label for="example-textarea">description</label>
                <textarea class="form-control" id="example-textarea" rows="4" name="description">{{ old('description') }}</textarea>
                <span class="text-danger" style="font-size: 15px;">@error('description'){{$message}}@enderror</span>

              </div>
              <div class="form-group mb-3">
              <label for="simpleinput">job</label>
              <input type="text" id="simpleinput" class="form-control"value="{{ old('job') }}" name="job">
              <span class="text-danger" style="font-size: 15px;">@error('job'){{$message}}@enderror</span>

            </div>

          </div> <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="simpleinput">email</label>
                <input type="text" id="simpleinput" class="form-control"value="{{ old('email') }}" name="email">
                <span class="text-danger" style="font-size: 15px;">@error('email'){{$message}}@enderror</span>

              </div>
             
              <div class="form-group mb-3">
              <label for="simpleinput">phone</label>
              <input type="text" id="simpleinput" class="form-control"value="{{ old('phone') }}" name="phone">
              <span class="text-danger" style="font-size: 15px;">@error('phone'){{$message}}@enderror</span>

            </div>
          </div>
        </div>
        <input class="btn btn-primary" type="submit">
       </form>
      </div>
    </div> <!-- / .card -->
   
  </div> <!-- .col-12 -->
@endsection

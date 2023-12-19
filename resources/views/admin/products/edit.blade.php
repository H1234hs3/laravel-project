@extends('admin.Layouts.master')
@section('body')
<div class="col-12">
    <h2 class="page-title">Services/edit </h2>
    <div class="card shadow mb-4">

      <div class="card-body">
         <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-md-6">
            <div class="form-group mb-3">
              <label for="simpleinput">name</label>
              <input type="text" id="simpleinput" class="form-control" value="{{$product->name}}" name="name">
            </div>
            <div class="form-group mb-3">
                <label for="example-textarea">description</label>
                <textarea class="form-control" id="example-textarea" rows="4" name="description"> {{$product->description}}
                </textarea>
              </div>

          </div> <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="simpleinput">cost</label>
                <input type="text" id="simpleinput" class="form-control" value="{{$product->cost}}" name="cost">
              </div>
              <div class="form-group mb-3">
                <label for="simpleinput">image</label>
                <input type="file" id="simpleinput" class="form-control" name="image">
              </div>
          </div>
        </div>
        <input class="btn btn-primary" type="submit">
       </form>
      </div>
    </div> <!-- / .card -->
   
  </div> <!-- .col-12 -->
@endsection

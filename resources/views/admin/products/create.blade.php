@extends('admin.Layouts.master')
@section('body')
<div class="col-12">
    <h2 class="page-title">Services/create </h2>
    <div class="card shadow mb-4">

      <div class="card-body">
         <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group mb-3">
              <label for="simpleinput">name</label>
              <input type="text" id="simpleinput" class="form-control"value="{{ old('name') }}" name="name">
              <span class="text-danger" style="font-size: 15px;">
              @error('name')
              {{$message}}
              @enderror</span>

            </div>
            <div class="form-group mb-3">
                <label for="example-textarea">Text area</label>
                <textarea class="form-control" id="example-textarea" rows="4" name="description">{{ old('description') }}</textarea>
              </div>
              <span class="text-danger" style="font-size: 15px;">
              @error('description')
              {{$message}}
              @enderror</span>
          </div> <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="simpleinput">cost</label>
                <input type="text" id="simpleinput" class="form-control"value="{{ old('cost') }}" name="cost">
              </div>
              <span class="text-danger" style="font-size: 15px;">
              @error('cost')
              {{$message}}
              @enderror</span>
              <div class="form-group mb-3">
                <label for="simpleinput">image</label>
                <input type="file" id="simpleinput" class="form-control"  name="image">
                <span class="text-danger" style="font-size: 15px;">
              @error('image')
              {{$message}}
              @enderror</span>
                <select class="form-control mt-2" name="category">
                <option value="">select category</option>

                  @foreach($category as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                <span class="text-danger" style="font-size: 15px;">
              @error('category')
              {{$message}}
              @enderror</span>

              </div>
          </div>
        </div>
        <input class="btn btn-primary" type="submit">
       </form>
      </div>
    </div> <!-- / .card -->
   
  </div> <!-- .col-12 -->
@endsection

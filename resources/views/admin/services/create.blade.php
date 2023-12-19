@extends('admin.Layouts.master')
@section('body')
<div class="col-12">
    <h2 class="page-title">Services/create </h2>
    <div class="card shadow mb-4">

      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group mb-3">
              <label for="simpleinput">name</label>
              <input type="text" id="simpleinput" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="example-textarea">Text area</label>
                <textarea class="form-control" id="example-textarea" rows="4"></textarea>
              </div>

          </div> <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="simpleinput">cost</label>
                <input type="text" id="simpleinput" class="form-control">
              </div>
          </div>
        </div>
      </div>
    </div> <!-- / .card -->
   
  </div> <!-- .col-12 -->
@endsection

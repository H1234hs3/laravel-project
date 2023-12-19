@extends('admin.Layouts.master')
@section('body')


    <div class="col-12">
        <h2 class="page-title">إنشاء مشروع </h2>
        <p class="text-muted"></p>
        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    
                        <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="project_type">نوع المشروع</label>
                            <input type="text" id="project_type" class="form-control"  value="{{old('project_type')}}" name="project_type">
                        </div>
                     </div>
              
                <button type="submit" class="btn mb-2 btn-primary btn-lg btn-block">save</button>
                </form>
            </div>
        </div> <!-- / .card -->

    </div> <!-- end section -->
    </div> <!-- .col-12 -->
@endsection

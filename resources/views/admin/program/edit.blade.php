@extends('admin.Layouts.master')
@section('body')


    <div class="col-12">
        <h2 class="page-title"> </h2>
        <p class="text-muted"></p>
        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="{{ route('program.update' , $program->id)) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="project_name">اسم المشروع</label>
                            <input type="text" id="project_name" class="form-control" value="{{old('project_name')}}" name="project_name">
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="country">البلد</label>
                                <select class="form-control mt-2 select2" id="country"  name="country">
                                    <option selected></option>
                                    <option>اليمن</option>
                                    <option>السعودية</option>
                                    <option>قطر</option>
                                    <option>الكويت</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="people_number">عدد المستفيدين</label>
                            <input type="text" id="people_number" class="form-control" value="{{old('people_number')}}" name="people_number">
                        </div>

                        
                        <div class="form-group mb-3">
                            <label for="customFile">رفع صورة</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label"  for="customFile">Choose file</label>
                            </div>
                     
                        </div>

                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="project_type">نوع المشروع</label>
                            <select class="form-control" id="project_type" value="{{old('project_type')}}" name="project_type">
                                <option selected>...</option>
                                <option>إنشائي</option>
                                <option>انساني</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="city">المدينة</label>
                            <input type="text" id="city" class="form-control" value="{{old('city')}}" name="city">
                            
                        </div>
                        <div class="form-group mb-3">
                            <label for="cost">التكلفة</label>
                            <input type="email" id="cost" value="{{old('cost')}}" class="form-control" name="cost">
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">وصف المشروع</label>
                            <textarea class="form-control" id="description" rows="4" name="description">{{old('description')}}</textarea>
                        </div>


                    </div>
                </div>
                <button type="submit" class="btn mb-2 btn-primary btn-lg btn-block">save</button>
                </form>
            </div>
        </div> <!-- / .card -->

    </div> <!-- end section -->
    </div> <!-- .col-12 -->
@endsection

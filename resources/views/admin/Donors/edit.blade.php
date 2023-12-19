@extends('admin.Layouts.master')
@section('body')


    <div class="col-12">
        <h2 class="page-title"></h2>
        <p class="text-muted"></p>
        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="{{ route('Donors.update' , $Donors->id)) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="first_name">الاسم الاول </label>
                            <input type="text" id="first_name" class="form-control" value="{{old('first_name')}}" name="first_name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">رقم الجوال </label>
                            <input type="tel" id="phone" class="form-control" value="{{old('phone')}}" name="phone">
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
                            <label for="cost">التكلفة</label>
                            <input type="email" id="cost" value="{{old('cost')}}" class="form-control" name="cost">
                        </div>

                        
                

                    </div> <!-- /.col -->
              
                    <div class="form-group mb-3">
                        <label for="last_name">الاسم الاخير</label>
                        <input type="text" id="last_name" class="form-control" value="{{old('last_name')}}" name="last_name">
                        
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">الايميل</label>
                        <input type="email" id="email" class="form-control" value="{{old('email')}}" name="email">
                    </div>
                        <div class="form-group mb-3">
                            <label for="city">المدينة</label>
                            <input type="text" id="city" class="form-control" value="{{old('city')}}" name="city">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">رسالة </label>
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

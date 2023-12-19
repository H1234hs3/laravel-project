@extends('admin.Layouts.master')
@section('body')
    <div class="col-12">
        <h2 class="page-title">تسجيل يتيم</h2>
        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="{{ route('orphan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="name">الاسم *</label>
                                <input type="text" id="name" class="form-control" value="{{old('name_orphans')}}" name="name_orphans">
                                <span class="text-danger" style="font-size:15px;">
                                    @error('name_orphans'){{ $message }}@enderror
                                    </span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="city">المدينة *</label>
                                <input type="text" id="city" class="form-control" value="{{old('city')}}" name="city">
                                <span class="text-danger" style="font-size:15px;">
                                    @error('city'){{ $message }}@enderror
                                    </span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nationality">الجنسية *</label>
                                <select class="form-control" id="nationality" value="{{old('nationality')}}" name="nationality">
                                
                                    <option selected>...</option>
                                    <option>يمني</option>
                                    <option>سعودي</option>
                                    <option>كويتي</option>
                                    <option>قطري</option>
                                </select>
                                <span class="text-danger" style="font-size:15px;">
                                    @error('nationality'){{ $message }}@enderror
                                    </span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="place_of_birth">مكان الولادة *</label>
                                <input type="text" id="place_of_birth" class="form-control" value="{{old('place_of_birth')}}" name="place_of_birth">
                                <span class="text-danger" style="font-size:15px;">
                                    @error('place_of_birth'){{ $message }}@enderror
                                    </span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="mother_name">اسم الام *</label>
                                <input type="text" id="mother_name" class="form-control" value="{{old('mother_name')}}" name="mother_name">
                                <span class="text-danger" style="font-size:15px;">
                                    @error('mother_name'){{ $message }}@enderror
                                    </span>
                            </div>
                            <fieldset class="form-group"><br>
                                <div class="row">
                                    <label class="col-form-label col-sm-3 pt-0">الام تعمل</label>
                                    <div class="col-sm-9" name="mother_work">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" {{old('mother_work') === 'نعم' ? 'checked' : ''}} name="mother_work"
                                                id="gridRadios1" value="نعم">
                                            <label class="form-check-label" for="gridRadios1"> نعم</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" {{old('mother_work') === 'لا' ? 'checked' : ''}}  name="mother_work"
                                                id="gridRadios2" value="لا" checked>
                                            <label class="form-check-label" for="gridRadios2">لا </label>
                                        </div>
                                    </div>
                                    <span class="text-danger" style="font-size:15px;">
                                        @error('mother_work'){{ $message }}@enderror
                                        </span>
                                </div>
                            </fieldset>
                            <div class="form-group mb-3">
                                <label for="orphan_place">داخل دار الايتام</label>
                                <select id="insorphan_placeide" class="form-control" value="{{old('orphan_place')}}" name="orphan_place">
                                    <option selected>...</option>
                                    <option>نعم</option>
                                    <option>لا</option>
                                </select>
                                <span class="text-danger" style="font-size:15px;">
                                    @error('orphan_place'){{ $message }}@enderror
                                    </span>
                            </div>

                            <div class="form-group mb-3">
                                <label for="Type_of_orphan">نوع اليتم </label>
                                <select id="Type_of_orphan" class="form-control" value="{{old('Type_of_orphan')}}" name="Type_of_orphan">
                                    <option selected>...</option>
                                    <option>يتيم الأب</option>
                                    <option>يتيم الوالدين</option>
                                </select>
                                <span class="text-danger" style="font-size:15px;">
                                    @error('Type_of_orphan'){{ $message }}@enderror
                                    </span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="relationship_with_an_orphan"> نوع العلاقة باليتيم *</label>
                                <input type="text" id="relationship_with_an_orphan" value="{{old('relationship_with_an_orphan')}}" class="form-control"
                                    name="relationship_with_an_orphan">
                                    <span class="text-danger" style="font-size:15px;">
                                        @error('relationship_with_an_orphan'){{ $message }}@enderror
                                        </span>
                            </div>

                            <div class="form-group mb-3">
                                <label for="customFile">رفع صورة *</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="image">
                                    <label class="custom-file-label"  for="customFile">Choose file</label>
                                </div>
                         
                            </div>

                        </div> <!-- /.col -->


                        {{-- ------------------------------------------------------------------------------------------------------------------ --}}

                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="gender"> الجنس </label>
                                <select id="gender" class="form-control" value="{{old('gender')}}" name="gender">
                                    <option selected>...</option>
                                    <option> ذكر</option>
                                    <option> انثى</option>
                                </select>
                                <span class="text-danger" style="font-size:15px;">
                                    @error('gender'){{ $message }}@enderror
                                    </span>
                            </div>

                            <div class="form-group mb-3">
                                <label for="state"> الولاية</label>
                                <input type="text" id="state" class="form-control" value="{{old('state')}}" name="state">
                                <span class="text-danger" style="font-size:15px;">
                                    @error('state'){{ $message }}@enderror
                                    </span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="birth_date">تاريخ الولادة *</label>
                                <input type="date" id="birth_date" class="form-control" value="{{old('birth_date')}}" name="birth_date">
                                <span class="text-danger" style="font-size:15px;">
                                    @error('birth_date'){{ $message }}@enderror
                                    </span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="father_death_date"> تاريخ وفاة الاب *</label>
                                <input type="date" id="father_death_date" value="{{old('father_death_date')}}" class="form-control"
                                    name="father_death_date">
                                    <span class="text-danger" style="font-size:15px;">
                                        @error('father_death_date'){{ $message }}@enderror
                                        </span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="mother_N_ID"> الرقم الوطني للأم *</label>
                                <input type="text" id="mother_N_ID"value="{{old('mother_N_ID')}}" class="form-control" name="mother_N_ID">
                                <span class="text-danger" style="font-size:15px;">
                                    @error('mother_N_ID'){{ $message }}@enderror
                                    </span>
                            </div>

                            <div class="form-group mb-3">
                                <label for="bro_count">عدد الاخوة *</label>
                                <input type="number" id="bro_count" value="{{old('bro_count')}}" class="form-control" name="bro_count">
                                <span class="text-danger" style="font-size:15px;">
                                    @error('bro_count'){{ $message }}@enderror
                                    </span>
                            </div>



                            <div class="form-group mb-3">
                                <label for="Health_status"> الحالة الصحية لليتيم </label>
                                <select id="Health_status" class="form-control" value="{{old('Health_status')}}" name="Health_status">
                                    <option selected>...</option>
                                    <option> سليم</option>
                                    <option> مريض</option>
                                </select>
                                <span class="text-danger" style="font-size:15px;">
                                    @error('Health_status'){{ $message }}@enderror
                                    </span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="Guardian_N_ID"> رقم الوطني لولي الأمر *</label>
                                <input type="number" id="Guardian_N_ID" class="form-control" value="{{old('Guardian_N_ID')}}" name="Guardian_N_ID">
                                <span class="text-danger" style="font-size:15px;">
                                    @error('Guardian_N_ID'){{ $message }}@enderror
                                    </span>
                            </div>


                            <div class="form-group mb-3">
                                <label for="House_type"> نوع السكن </label>
                                <select id="House_type" class="form-control" value="{{old('House_type')}}" name="House_type">
                                    <option selected>...</option>
                                    <option> ملك</option>
                                    <option> ايجار</option>
                                </select>
                                <span class="text-danger" style="font-size:15px;">
                                    @error('House_type'){{ $message }}@enderror
                                    </span>
                            </div>

                        </div>

                    

                    {{-- ------------------------------------------------------------------------------------------------------- --}}


                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="country">البلد *</label>
                            <select class="form-control" id="country" name="country">
                                <option selected></option>
                                <option>اليمن</option>
                                <option>السعودية</option>
                                <option>قطر</option>
                                <option>الكويت</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="village">القرية</label>
                            <input type="text" id="village" class="form-control" value="{{old('village')}}" name="village">
                            <span class="text-danger" style="font-size:15px;">
                                @error('village'){{ $message }}@enderror
                                </span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="school_level">المستوى الدراسي *</label>
                            <input type="text" id="school_level" class="form-control" value="{{old('school_level')}}" name="school_level">
                            <span class="text-danger" style="font-size:15px;">
                                @error('school_level'){{ $message }}@enderror
                                </span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="father_N_ID"> رقم الوطني للأب *</label>
                            <input type="text" id="father_N_ID" class="form-control" value="{{old('father_N_ID')}}" name="father_N_ID">
                            <span class="text-danger" style="font-size:15px;">
                                @error('father_N_ID'){{ $message }}@enderror
                                </span>
                        </div>

                        <div class="form-group mb-3">
                            <label for="mother_state"> الحالة الاجتماعية للأم </label>
                            <select id="mother_state" class="form-control" value="{{old('mother_state')}}" name="mother_state">
                                <option selected>...</option>
                                <option> ارملة</option>
                                <option> متزوجة</option>
                            </select>
                            <span class="text-danger" style="font-size:15px;">
                                @error('mother_state'){{ $message }}@enderror
                                </span>
                        </div>

                        <div class="form-group mb-3">
                            <label for="sister_count">عدد الاخوات *</label>
                            <input type="number" id="sister_count" class="form-control" value="{{old('sister_count')}}" name="sister_count">
                            <span class="text-danger" style="font-size:15px;">
                                @error('sister_count'){{ $message }}@enderror
                                </span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Guardian_name"> اسم ولي الامر *</label>
                            <input type="text" id="Guardian_name" class="form-control" value="{{old('Guardian_name')}}" name="Guardian_name">
                            <span class="text-danger" style="font-size:15px;">
                                @error('Guardian_name'){{ $message }}@enderror
                                </span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Guardian_phone"> رقم الجوال *</label>
                            <input type="tel" id="Guardian_phone" class="form-control" value="{{old('Guardian_phone')}}" name="Guardian_phone">
                            <span class="text-danger" style="font-size:15px;">
                                @error('Guardian_phone'){{ $message }}@enderror
                                </span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">ملاحضات</label>
                            <textarea class="form-control" id="description" rows="4" name="description">{{old('description')}}</textarea>
                            <span class="text-danger" style="font-size:15px;">
                                @error('description'){{ $message }}@enderror
                                </span>
                        </div>
                    </div>  </div> <!-- /.col -->
            </div>
            <button type="submit" class="btn mb-2 btn-primary btn-lg btn-block">save</button>
            </form>
        </div>
    </div>
    </div>
@endsection

@extends('admin.Layouts.master')
@section('body')
    <div class="col-12">
        <h2 class="page-title">تسجيل يتيم</h2>
        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="{{ route('orphan.update', $orphans->id) }}" method="POST" enctype="multipart/form-data">


                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="name">الاسم *</label>
                                <input type="text" id="name" class="form-control"
                                    value="{{ $orphans->name_orphans }}" name="name_orphans">
                            </div>
                            <div class="form-group mb-3">
                                <label for="city">المدينة *</label>
                                <input type="text" id="city" class="form-control" value="{{ $orphans->city }}"
                                    name="city">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nationality">الجنسية *</label>
                                <select class="form-control" id="nationality" value="{{ $orphans->nationality }}"
                                    name="nationality">

                                    <option selected>يمني</option>
                                    <option>سعودي</option>
                                    <option>كويتي</option>
                                    <option>قطري</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="place_of_birth">مكان الولادة *</label>
                                <input type="text" id="place_of_birth" class="form-control"
                                    value="{{ $orphans->place_of_birth }}" name="place_of_birth">
                            </div>
                            <div class="form-group mb-3">
                                <label for="mother_name">اسم الام *</label>
                                <input type="text" id="mother_name" class="form-control"
                                    value="{{ $orphans->mother_name }}" name="mother_name">
                            </div>
                            <fieldset class="form-group"><br>
                                <div class="row">
                                    <label class="col-form-label col-sm-3 pt-0">الام تعمل</label>
                                    <div class="col-sm-9" name="mother_work">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                value="{{ $orphans->mother_work }}" name="mother_work" id="gridRadios1"
                                                value=" نعم">
                                            <label class="form-check-label" for="gridRadios1"> نعم</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                value="{{ $orphans->mother_work }}" name="mother_work" id="gridRadios2"
                                                value=" لا " checked>
                                            <label class="form-check-label" for="gridRadios2">لا </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group mb-3">
                                <label for="orphan_place">داخل دار الايتام</label>
                                <select id="insorphan_placeide" class="form-control" value="{{ $orphans->orphan_place }}"
                                    name="orphan_place">

                                    <option selected>نعم</option>
                                    <option>لا</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="Type_of_orphan">نوع اليتم </label>
                                <select id="Type_of_orphan" class="form-control" value="{{ $orphans->Type_of_orphan }}"
                                    name="Type_of_orphan">

                                    <option selected>يتيم الأب</option>
                                    <option>يتيم الوالدين</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="relationship_with_an_orphan"> نوع العلاقة باليتيم *</label>
                                <input type="text" id="relationship_with_an_orphan" class="form-control"
                                    value="{{ $orphans->relationship_with_an_orphan }}" name="relationship_with_an_orphan">
                            </div>

                            <div class="form-group mb-3">
                                <label for="customFile">رفع صورة *</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile"
                                        value="{{ $orphans->image }}" name="image">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>

                        </div> <!-- /.col -->


                        {{-- ------------------------------------------------------------------------------------------------------------------ --}}

                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="gender"> الجنس </label>
                                <select id="gender" class="form-control" value="{{ $orphans->gender }}"
                                    name="gender">

                                    <option selected value="{{ $orphans->gender }}"> ذكر</option>
                                    <option value="{{ $orphans->gender }}"> انثى</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="state"> الولاية</label>
                                <input type="text" id="state" class="form-control" value="{{ $orphans->state }}"
                                    name="state">
                            </div>
                            <div class="form-group mb-3">
                                <label for="birth_date">تاريخ الولادة *</label>
                                <input type="date" id="birth_date" class="form-control"
                                    value="{{ $orphans->birth_date }}" name="birth_date">
                            </div>
                            <div class="form-group mb-3">
                                <label for="father_death_date"> تاريخ وفاة الاب *</label>
                                <input type="date" id="father_death_date" class="form-control"
                                    value="{{ $orphans->father_death_date }}" name="father_death_date">
                            </div>
                            <div class="form-group mb-3">
                                <label for="mother_N_ID"> الرقم الوطني للأم *</label>
                                <input type="text" id="mother_N_ID" class="form-control"
                                    value="{{ $orphans->mother_N_ID }}" name="mother_N_ID">
                            </div>

                            <div class="form-group mb-3">
                                <label for="bro_count">عدد الاخوة *</label>
                                <input type="number" id="bro_count" class="form-control"
                                    value="{{ $orphans->bro_count }}" name="bro_count">
                            </div>



                            <div class="form-group mb-3">
                                <label for="Health_status"> الحالة الصحية لليتيم </label>
                                <select id="Health_status" class="form-control" value="{{ $orphans->Health_status }}"
                                    name="Health_status">

                                    <option selected value="{{ $orphans->Health_status }}"> سليم</option>
                                    <option value="{{ $orphans->Health_status }}"> مريض</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="Guardian_N_ID"> رقم الوطني لولي الأمر *</label>
                                <input type="number" id="Guardian_N_ID" class="form-control"
                                    value="{{ $orphans->Guardian_N_ID }}" name="Guardian_N_ID">
                            </div>


                            <div class="form-group mb-3">
                                <label for="House_type"> نوع السكن </label>
                                <select id="House_type" class="form-control" value="{{ $orphans->House_type }}"
                                    name="House_type">

                                    <option selected value="{{ $orphans->House_type }}"> ملك</option>
                                    <option value="{{ $orphans->House_type }}"> ايجار</option>
                                </select>
                            </div>
                        </div>




                        {{-- ------------------------------------------------------------------------------------------------------- --}}


                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="country">البلد *</label>
                                <select class="form-control" id="country" value="{{ $orphans->country }}"
                                    name="country">

                                    <option selected>اليمن</option>
                                    <option>السعودية</option>
                                    <option>قطر</option>
                                    <option>الكويت</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="village">القرية</label>
                                <input type="text" id="village" class="form-control"
                                    value="{{ $orphans->village }}" name="village">
                            </div>
                            <div class="form-group mb-3">
                                <label for="school_level">المستوى الدراسي *</label>
                                <input type="text" id="school_level" class="form-control"
                                    value="{{ $orphans->school_level }}" name="school_level">
                            </div>
                            <div class="form-group mb-3">
                                <label for="father_N_ID"> رقم الوطني للأب *</label>
                                <input type="text" id="father_N_ID" class="form-control"
                                    value="{{ $orphans->father_N_ID }}" name="father_N_ID">
                            </div>

                            <div class="form-group mb-3">
                                <label for="mother_state"> الحالة الاجتماعية للأم </label>
                                <select id="mother_state" class="form-control" value="{{ $orphans->mother_state }}"
                                    name="mother_state">

                                    <option selected> ارملة</option>
                                    <option> متزوجة</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="sister_count">عدد الاخوات *</label>
                                <input type="number" id="sister_count" class="form-control"
                                    value="{{ $orphans->sister_count }}" name="sister_count">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Guardian_name"> اسم ولي الامر *</label>
                                <input type="text" id="Guardian_name" class="form-control"
                                    value="{{ $orphans->Guardian_name }}" name="Guardian_name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Guardian_phone"> رقم الجوال *</label>
                                <input type="tel" id="Guardian_phone" class="form-control"
                                    value="{{ $orphans->Guardian_phone }}" name="Guardian_phone">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">ملاحضات</label>
                                <textarea class="form-control" id="description" rows="4" name="description">{{ $orphans->description }}</textarea>
                            </div>
                        </div>
                    </div> <!-- /.col -->
            </div>
            <button type="submit" class="btn mb-2 btn-primary btn-lg btn-block">edit</button>
            </form>
        </div>
    </div>
    </div>
@endsection

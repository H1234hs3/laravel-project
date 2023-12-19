@extends('admin.Layouts.master')
@section('body')
    <div class="col-12">
        <h2 class="mb-2 page-title">بيانات المتبرع </h2>
        <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <!-- table -->


                        <table class="table datatables" id="dataTable-1">
                            <thead>
                                <tr>
                                    
                                    <th>التسلسل</th>
                                    <th>  اسم المتبرع الاول</th>
                                   <th>اسم المتبرع الاخير</th>
                                    <th> المشاريع </th>
                                    <th>حالة المتبرع</th>
                                    <th> خيارات</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($Donors as $item)
                                    <tr>
                                        {{-- <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </td> --}}
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->first_name }}</td>
                                        <td>{{ $item->last_name }}</td>

                                        <td>@foreach($item->program as $program)
                                                    {{$program->project_type}}
                                                    <br>
                                                    @endforeach
                                        </td>
                                          <td>
                                            @if ($item ->status == 1)
                                                <span class="badge badge-pill badge-success">active</span>
                                            @else
                                                <span class="badge badge-pill badge-danger">not active</span>
                                            @endif
                                        </td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                               
                                                <form action="{{ route('Donors.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit">Remove</button>
                                                </form>
                                                <a class="dropdown-item" href="{{ route('Donors.show', $item->id) }}">detials</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- @endforeach
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- simple table -->
        </div> <!-- end section -->
    </div> <!-- .col-12 -->
@endsection

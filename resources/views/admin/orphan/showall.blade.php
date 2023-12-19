@extends('admin.Layouts.master')
@section('body')
    <div class="col-12">
        <h2 class="mb-2 page-title">بيانات الايتام </h2>
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
                                    
                                    <th>اسم اليتيم</th>
                                    <th>الدولة</th>
                                    <th> الجنسية</th>
                                    <th>حالة اليتيم</th>
                                    <th> خيارات</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($orphans as $item)
                                    <tr>
                                        {{-- <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </td> --}}
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name_orphans }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->nationality }}</td>
                                       
                                        <td>
                                            @if ($item->status == 1)
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
                                                <a class="dropdown-item"
                                                    href="{{ route('orphan.edit', $item->id) }}">Edit</a>
                                                <form action="{{ route('orphan.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit">Remove</button>
                                                </form>
                                                <a class="dropdown-item" href="{{ route('orphan.show', $item->id) }}">detials</a>
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

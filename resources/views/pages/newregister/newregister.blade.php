@extends('master')

@section('main_content')


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pending student list</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTab</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">

                @if(Session::has('approve'))
                <div class="alert alert-success">
                    {{ Session::get('approve') }}
                </div>
                @endif


                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>ID</th>
                            <th>Semester</th>
                            <th>Course</th>
                            <th>Department</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Status</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach($allnewregister as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->s_id}}</td>
                            <td>{{$item->semester}}</td>
                            <td>{{$item->course}}</td>
                            <td>{{$item->department}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                <div class="iconss">
                                    <a href="{{ route('view', $item->id)}}"> <i class="fas fa-eye"></i></a>
                                    <a href="{{ route('edit')}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('delete')}}"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('approve', $item->id)}}" method="get">
                                    <button type="submit" class="btnn btn-primary btn-user btn-block">
                                        Approved
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="row ">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>

                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                <a href="#" aria-controls="dataTable" data-di-idx="0" tabindex="0" class="page-link">Previous</a>
                            </li>
                            <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                <a href="#" aria-controls="dataTable" data-di-idx="1" tabindex="0" class="page-link">1</a>
                            </li>
                            <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                <a href="#" aria-controls="dataTable" data-di-idx="2" tabindex="0" class="page-link">2</a>
                            </li>
                            <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                <a href="#" aria-controls="dataTable" data-di-idx="3" tabindex="0" class="page-link">3</a>
                            </li>
                            <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                <a href="#" aria-controls="dataTable" data-di-idx="4" tabindex="0" class="page-link">4</a>
                            </li>
                            <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                <a href="#" aria-controls="dataTable" data-di-idx="5" tabindex="0" class="page-link">5</a>
                            </li>
                            <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                <a href="#" aria-controls="dataTable" data-di-idx="6" tabindex="0" class="page-link">Next</a>
                            </li>


                        </ul>

                    </div>

                </div>

            </div>
        </div>


    </div>

</div>


@endsection
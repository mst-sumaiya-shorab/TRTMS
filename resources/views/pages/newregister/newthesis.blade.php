@extends('master')

@section('main_content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pending thesis list</h1>
    <!-- <p class="mb-4">All faculty list who are taking thesis and practicum course</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 ">
            <h6 class="m-0 font-weight-bold text-primary">DataTab</h6>
            <form action="{{ route('course.create')}}" method="get">
                <button type="submit" class="btnf btn-primary btn-user btn-block">
                    Add
                </button>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                @if(Session::has('accept'))
                <div class="alert alert-success">
                    {{ Session::get('accept') }}
                </div>
                @endif

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>Student ID</th>
                            <th>Course-Code</th>
                            <th>Semester</th>
                            <th>Year</th>
                            <th>Title</th>
                            <th>Status</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach($theses as $item)
                        <tr>
                            <td>{{$item->s_id}}</td>
                            <td>{{$item->course_id}}</td>
                            <td>{{$item->semester}}</td>
                            <td>{{$item->year}}</td>
                            <td>{{$item->title}}</td>

                            <td>
                                <form action="{{ route('accept', $item->id)}}" method="get">
                                    <div class="statu-box">
                                    <select class="form-control" name="faculty_id">

                                        <option>Select Faculty</option>
                                        @foreach($faculties as $faculty)
                                        <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                     @endforeach
                                    </select>
                                    <div class="iconss"> <a href="#"><i class="far fa-save"></i> </a></div>
                                    </div>
                                </form>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>


    </div>

</div>

@endsection
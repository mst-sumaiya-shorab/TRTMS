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

                <form action="{{ route('research.store')}}" method="post">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>

                            <tr>
                                <th>Student ID</th>
                                <th>Course-Code</th>
                                <th>Semester</th>
                                <th>Year</th>
                                <th>Title</th>
                                <th>Faculty</th>

                            </tr>
                        </thead>


                        <tbody>

                            @foreach($theses as $key => $item)
                            @csrf
                            <tr>
                                <td>{{$item->s_id}}
                                    <input type="hidden" name="s_id[]" value="{{ $item->s_id }}">
                                </td>
                                <td>{{$item->course_id}}
                                    <input type="hidden" name="course_id[]" value="{{ $item->course_id }}">
                                </td>
                                <td>{{$item->semester}}
                                    <input type="hidden" name="semester[]" value="{{ $item->semester }}">
                                </td>
                                <td>{{$item->year}}
                                    <input type="hidden" name="year[]" value="{{ $item->year }}">
                                </td>
                                <td>{{$item->title}}
                                    <input type="hidden" name="title[]" value="{{ $item->title }}">
                                </td>

                                <td>

                                    <div class="statu-box">
                                        <select class="form-control" name="f_id[]">

                                            <option>Select Faculty</option>
                                            @foreach($faculties as $faculty)
                                            <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </td>

                            </tr>

                            @endforeach



                        </tbody>
                    </table>
                    <button type="submit" class="btnn btn-primary btn-user btn-block">
                        Submit
                    </button>
                </form>




            </div>

        </div>


    </div>

</div>

@endsection
@extends('master')

@section('main_content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Departemnt List</h1>
    <!-- <p class="mb-4">All faculty list who are taking thesis and practicum course</p> -->
    @if(session('danger'))
    <div class="alert alert-danger">
        {!! session('danger') !!}
    </div>
    @endif


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 ">
            <h6 class="m-0 font-weight-bold text-primary">DataTab</h6>
            <form action="{{ route('department.create')}}" method="get">
                <button type="submit" class="btnf btn-primary btn-user btn-block">
                    Add
                </button>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">

            @if(Session::has('update'))
                <div class="alert alert-success">
                    {{ Session::get('update') }}
                </div>
                @endif


                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>Departemnt</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach($alldepartment as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <div class="iconss">
                                    <a href="{{ route('department.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route ('department.delete', $item->id)}}"><i class="fas fa-trash-alt"></i></a>
                                </div>
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
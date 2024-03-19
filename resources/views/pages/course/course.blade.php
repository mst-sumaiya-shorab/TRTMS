@extends('master')

@section('main_content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Course</h1>
    <!-- <p class="mb-4">All faculty list who are taking thesis and practicum course</p> -->

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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>Course</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                   
                       <tr>
                        <td>name</td>
                        <td>status</td>
                       </tr>
                       
                    </tbody>
                </table>
            </div>
            
        </div>


    </div>

</div>

@endsection
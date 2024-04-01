@extends('master')

@section('main_content')




<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Task</h1>
    <p class="mb-4">The thesis and research task list.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Task</h6>
            <!-- <form action="{{ route('student.create')}}" method="get">
            <button type="submit" href="{{ route('student.create')}}" class="btns btn-primary btn-user btn-block">
                Add
            </button>
            </form> -->
        </div>

        <div class="card-body">
            <div class="table-responsive border">

                <p>title</p>

            </div>
            <div class="table-responsive border">
                task details:
            </div>
            <div class=" conyainer ">
                <div class="icon-t">
                    <i class="fas fa-upload"></i>
                    
                      <p class="">  Upload</p>
                    
                </div>
                <div class="icon-t">
                    <i class="fas fa-link"></i>
                    
                    <p>    Link</p>
                    
                </div>
                <div class="">
                    <button type="submit" href="{{ route('student.create')}}" class="btnn btn-primary btn-user btn-block">
                        Cancel
                    </button>
                </div>
                <div class="">
                    <button type="submit" href="{{ route('student.create')}}" class="btnn btn-primary btn-user btn-block">
                        submit
                    </button>
                </div>

            </div>

        </div>


    </div>

</div>





@endsection
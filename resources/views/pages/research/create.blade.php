@extends('master')

@section('main_content')

<div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">

        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Course Choose Form</h1>
                </div>


                <div class="user" style="width:80%; margin:auto">
                    <form action="{{ route('research.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="f_name" value="{{ old('f_name') }}" placeholder="Faculty name" name="f_name">

                            @if($errors->has('f_name'))
                            <div class="alert alert-danger">{{ $errors->first('f_name')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="s_id" value="{{ old('s_id') }}" placeholder="Student ID" name="s_id">

                            @if($errors->has('s_id'))
                            <div class="alert alert-danger">{{ $errors->first('s_id')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="course" value="{{ old('course') }}" placeholder="Course" name="course">

                            @if($errors->has('course'))
                            <div class="alert alert-danger">{{ $errors->first('course')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form-control-user" value="{{ old('title') }}" placeholder="Title" name="title" style="width:960px; height:40px;"></textarea>
                            @if($errors->has('title'))
                            <div class="alert alert-danger">{{ $errors->first('title')}}</div>
                            @endif
                        </div>
                        
                </div>




                <button type="submit" href="{{ route('course') }}" class="btn btn-primary btn-user btn-block" style="width: 200px; margin:auto;">
                    Add list
                </button>


                </form>
            </div>

        </div>
    </div>
</div>
</div>
@endsection
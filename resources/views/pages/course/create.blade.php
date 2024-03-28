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
                    <form action="{{ route('course.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="s_id" value="{{auth('member')->user()->s_id}}" name="s_id">
                            
                            @if($errors->has('s_id'))
                            <div class="alert alert-danger">{{ $errors->first('s_id')}}</div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <select class="form-control" name="course_id">
                                    <option>Select Course</option>
                                    <option>Thesis</option>
                                    <option>Practicum</option>
                                </select>


                                @if($errors->has('course_id'))
                                <div class="alert alert-danger">{{ $errors->first('course_id')}}</div>
                                @endif
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <select class="form-control" name="semester">
                                    <option>Select Semester</option>
                                    <option>Summer</option>
                                    <option>Fall</option>
                                    <option>Spring</option>

                                </select>
                                @if($errors->has('semester'))
                                <div class="alert alert-danger">{{ $errors->first('semester')}}</div>
                                @endif
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <select class="form-control" name="year">
                                    <option>Select Year</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>

                                </select>
                                @if($errors->has('year'))
                                <div class="alert alert-danger">{{ $errors->first('year')}}</div>
                                @endif
                            </div>


                        </div>

                        <div class="form-group">
                            <textarea class="form-control form-control-user" value="{{ old('title') }}" placeholder="Title" name="title" style="width:960px; height:40px;"></textarea>
                            @if($errors->has('title'))
                            <div class="alert alert-danger">{{ $errors->first('title')}}</div>
                            @endif
                        </div>

                </div>




                <button type="submit" href="{{ route('course') }}" class="btn btn-primary btn-user btn-block" style="width: 200px; margin:auto;">
                    Add Course
                </button>


                </form>
            </div>

        </div>
    </div>
</div>
</div>
@endsection
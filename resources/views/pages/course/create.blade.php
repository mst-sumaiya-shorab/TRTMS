@extends('master')

@section('main_content')

<div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">

        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center" >
                    <h1 class="h4 text-gray-900 mb-4">Form</h1>
                </div>


                <div class="user" style= "width:80%; margin:auto">
                    <form action="{{ route('course.store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <select class="form-control" name="student_id">
                                <option>Select Student_ID</option>
                                @foreach($students as $student)
                                <option value="{{ $student->id }}">{{ $student->s_id }}</option>
                                @endforeach

                            </select>
                               
                                @if($errors->has('student_id'))
                                <div class="alert alert-danger">{{ $errors->first('student_id')}}</div>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="course_id" value="{{ old('course_id') }}" placeholder="Course_id" name="course_id">
                                @if($errors->has('course_id'))
                                <div class="alert alert-danger">{{ $errors->first('course_id')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
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
                            <div class="col-sm-6 mb-3 mb-sm-0">
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
                           
                        </div>
                       
                      


                        <button type="submit" href="#" class="btn btn-primary btn-user btn-block" style="width: 200px; margin:auto;">
                            Add Course
                        </button>


                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
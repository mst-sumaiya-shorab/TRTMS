@extends('master')

@section('main_content')



<div class="col-lg-12">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Student Details</h1>
        </div>


        <div class="user" style="width:80%; margin:auto;">
            <form action="{{ route('faculty.store') }}" method="post">
                @csrf
                
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="name" value="{{ old('name') }}" placeholder="Name" name="name">
                        
                        @if($errors->has('name'))
                        <div class="alert alert-danger">{{ $errors->first('name')}}</div>
                        @endif
                    </div>


                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="s_id" value="{{ old('id') }}" placeholder="Student ID" name="s_id">
                        
                        @if($errors->has('s_id'))
                        <div class="alert alert-danger">{{ $errors->first('s_id')}}</div>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="semester" value="{{ old('semester') }}" placeholder="Semester" name="semester">
                        
                        @if($errors->has('semester'))
                        <div class="alert alert-danger">{{ $errors->first('semester')}}</div>
                        @endif
                    </div>

                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="course" value="{{ old('course') }}" placeholder="Course" name="course">
                        
                        @if($errors->has('course'))
                        <div class="alert alert-danger">{{ $errors->first('course')}}</div>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="address" value="{{ old('address') }}" placeholder="Address" name="address">
                    
                    @if($errors->has('address'))
                    <div class="alert alert-danger">{{ $errors->first('address')}}</div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="phone" value="{{ old('phone') }}" placeholder="Phone-Number" name="phone">
                    
                    @if($errors->has('phone'))
                    <div class="alert alert-danger">{{ $errors->first('phone')}}</div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" value="{{ old('email') }}" placeholder="Email Address" name="email">
                    
                    @if($errors->has('email'))
                    <div class="alert alert-danger">{{ $errors->first('email')}}</div>
                    @endif
                </div>



            </form>
        </div>


    </div>
</div>

@endsection
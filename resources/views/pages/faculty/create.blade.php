@extends('master')

@section('main_content')
<div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">

        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Faculty Form!</h1>
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

                                <input type="text" class="form-control form-control-user" id="f_id" value="{{ old('id') }}" placeholder="Faculty ID" name="f_id">
                                @if($errors->has('f_id'))
                                <div class="alert alert-danger">{{ $errors->first('f_id')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="department_id">
                                <option>Select Departemnt</option>
                                @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach

                            </select>
                           
                            @if($errors->has('department_id'))
                            <div class="alert alert-danger">{{ $errors->first('department_id')}}</div>
                            @endif
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control form-control-user" id="room_no" value="{{ old('room_no') }}" placeholder="Room_no" name="room_no">
                            @if($errors->has('room_no'))
                            <div class="alert alert-danger">{{ $errors->first('room_no')}}</div>
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

                        <div class="form-group ">

                            <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">

                            @if($errors->has('password'))
                            <div class="alert alert-danger">{{ $errors->first('password')}}</div>
                            @endif

                        </div>

                        <button type="submit" href="#" class="btn btn-primary btn-user btn-block" style="width: 200px; margin:auto;">
                            Add Account
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
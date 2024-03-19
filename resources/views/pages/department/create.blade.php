@extends('master')

@section('main_content')

<div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">

        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form</h1>
                </div>


                <div class="user" style= "width:80%; margin:auto;">
                    <form action="{{ route('department.store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="name" value="{{ old('name') }}" placeholder="Name" name="name">
                                @if($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name')}}</div>
                                @endif
                            </div>

                        </div>
                       
                      


                        <button type="submit" href="#" class="btn btn-primary btn-user btn-block" style="width: 200px; margin:auto;">
                            Add Department
                        </button>


                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
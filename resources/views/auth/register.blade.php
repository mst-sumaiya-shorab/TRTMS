<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-register-image" style="background-image: url('pic/register.jpg'); 
                    background-position: center;
                    background-size: 100% 100%;">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>


                            <div class="user">
                                <form action="{{ route('admin.register') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="name" value="{{ old('name') }}" placeholder="Name" name="name">
                                            @if($errors->has('name'))
                                            <div class="alert alert-danger">{{ $errors->first('name')}}</div>
                                            @endif
                                        </div>


                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="s_id" value="{{ old('s_id') }}" placeholder="Student ID" name="s_id">
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
                                        <input type="text" class="form-control form-control-user" id="department" value="{{ old('department') }}" placeholder="Department" name="department">
                                        @if($errors->has('department'))
                                        <div class="alert alert-danger">{{ $errors->first('department')}}</div>
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
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">

                                            @if($errors->has('password'))
                                            <div class="alert alert-danger">{{ $errors->first('password')}}</div>
                                            @endif

                                        </div>
                                    </div>
                                    <button type="submit" href="#" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>

                                </form>
                            </div>

                            <hr>

                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
@extends('master')

@section('main_content')



<div class="row container m-auto">
  <div class="col-lg-4 mt-5">
    <div class="card mb-4">
      <div class="card-body text-center">
        <img src="pic/login" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
        <h5 class="my-3">John Smith</h5>
        <p class="text-muted mb-1">Full Stack Developer</p>
        <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
        <div class="d-flex justify-content-center mb-2">
          <button type="button" class="btn btn-primary">Follow</button>
          <button type="button" class="btn btn-outline-primary ms-1">Message</button>
        </div>
      </div>
    </div>

  </div>
  <div class="col-lg-8 mt-5">
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Full Name</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">hijibiji</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Student ID</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">example@example.com</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Department</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">example@example.com</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Semester</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">example@example.com</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Course</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">example@example.com</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Phone</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">(097) 234-5678</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Email</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">example@example.com</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
@endsection
@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Student</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('dashboard/student') }}">Student</a></li>
          <li class="breadcrumb-item active">Admission</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content pb-3">
  <!-- Default box -->
  <div class="card w-75">
    <div class="card-body">
    <form action="" method="POST" action="{{route('student.store')}}">
      @csrf
        <div class="row">
          <div class="form-group col-6">
            <label>Student Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Select Course</label>
            <select name="" id="" class="form-control">
              @foreach($courses as $course)
              <option value="{{$course->id}}">{{$course->course_code}} - {{$course->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-6">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Email</label>
            <input type="email" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Password</label>
            <input type="password" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Confirm Password</label>
            <input type="password" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>District</label>
            <select name="" id="" class="form-control">
              <option value="">Option</option>
            </select>
          </div>
          <div class="form-group col-6">
            <label>Thana</label>
            <select name="" id="" class="form-control">
              <option value="">Option</option>
            </select>
          </div>
          <div class="form-group col-12">
            <label>Address</label>
            <textarea type="password" class="form-control w-100"></textarea>
          </div>
          <div class="form-group col-12">
            <label>Profile</label>
            <input class="w-100" name="profile" type="file">
            <span>Size: 400px x 300px;</span>
          </div>
          <input type="submit" value="Admission" class="form-group btn btn-primary mb-0">
      </form>
    </div>
  </div>
</section>
@endsection('content')
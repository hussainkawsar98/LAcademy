@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Course</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('dashboard/course') }}">Courses</a></li>
          <li class="breadcrumb-item active">Create Course</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="card">
    <div class="card-body">
      <form action="{{route('course.store')}}" method="POST" id="ajax_form" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <div class="form-group col-6">
            <label>Course</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Choose Category</label>
            <select name="category_id" class="custom-select">
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-4">
            <label>Mentor</label>
            <select name="mentor_id" class="custom-select">
              @foreach($users as $user)
              <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-4">
            <label>Start Date</label>
            <input name="start_date" type="date" class="form-control">
          </div>
          <div class="form-group col-4">
            <label>Course Fee</label>
            <input name="fee" type="number" class="form-control">
          </div>
          <div class="form-group col-4">
            <label>Discount</label>
            <input name="discount" type="number" class="form-control">
          </div>
          
          <div class="form-group col-4">
            <label>Total Class</label>
            <input name="total_class" type="number" class="form-control">
          </div>
          <div class="form-group col-4">
            <label>Total Days</label>
            <input name="total_days" type="number" class="form-control">
          </div>
          <div class="form-group col-12">
            <label>Course Description</label>
            <textarea name="description" id="summernote"></textarea>
          </div>
          <div class="form-group col-12">
            <label>Course Modules</label>
            <textarea name="course_module" id="module-summernote"></textarea>
          </div>
          <div class="form-group col-2">
            <label>Course Status</label>
            <select name="status" class="custom-select">
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
              <option value="Upcomimg">Upcomimg</option>
            </select>
          </div>
          <div class="form-group col-12">
            <label>Image</label>
            <input name="image" class="w-100" name="profile" type="file">
            <span>Size: 400px x 300px;</span><br>
          </div>
          <input type="submit" value="Save Course" class="form-group btn btn-primary">
      </form>
      </div>
    </div>
  </div>
    </div>
  </div>
</section>
@endsection
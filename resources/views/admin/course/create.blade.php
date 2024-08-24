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
      <form action="" method="POST">
        <div class="row mb-3">
          <div class="form-group col-6">
            <label>Course</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Choose Category</label>
            <select class="custom-select">
              <option>option 1</option>
            </select>
          </div>
          <div class="form-group col-4">
            <label>Mentor</label>
            <select class="custom-select">
              <option>option 1</option>
            </select>
          </div>
          <div class="form-group col-4">
            <label>Start Date</label>
            <input type="date" class="form-control">
          </div>
          <div class="form-group col-4">
            <label>Course Fee</label>
            <input type="number" class="form-control">
          </div>
          <div class="form-group col-4">
            <label>Discount</label>
            <input type="number" class="form-control">
          </div>
          
          <div class="form-group col-4">
            <label>Total Class</label>
            <input type="number" class="form-control">
          </div>
          <div class="form-group col-4">
            <label>Total Days</label>
            <input type="number" class="form-control">
          </div>
          <div class="form-group col-12">
            <label>Course Description</label>
            <textarea id="summernote"></textarea>
          </div>
          <div class="form-group col-12">
            <label>Course Modules</label>
            <textarea id="module-summernote"></textarea>
          </div>
          <div class="form-group col-4">
            <label>Course Status</label>
            <select class="custom-select">
              <option>Active</option>
              <option>Inactive</option>
              <option>Upcomimg</option>
            </select>
          </div>
          <div class="form-group col-12">
            <input class="w-100" name="profile" type="file">
            <span>Size: 400px x 300px;</span><br>
          </div>
          <input type="submit" value="Save Course" class="form-group btn btn-primary">
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
        <!-- /.modal -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
@endsection('content')
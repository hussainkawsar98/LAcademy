@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Mentor</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('dashboard/mentor') }}">Mentor</a></li>
          <li class="breadcrumb-item active">Create Mentor</li>
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
            <label>Mentor</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Mentor Title</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Phone</label>
            <input type="number" class="form-control">
          </div>
          <div class="form-group col-6">
            <label>Email</label>
            <input type="email" class="form-control">
          </div>
          <div class="form-group col-12">
            <label>Address</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group col-12">
            <p>Size: 400px x 300px;</p>
            <input class="w-100" name="profile" type="file"><br>
          </div>
          <input type="submit" value="Save Mentor" class="form-group btn btn-primary">
      </form>
    </div>
  </div>
</section>
@endsection('content')
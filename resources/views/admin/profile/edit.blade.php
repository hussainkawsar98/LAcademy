@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="courses.html">Courses</a></li>
              <li class="breadcrumb-item active">Edit Course</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7">
            <div class="card">
              <div class="card-body">
                <form action="" method="POST">
                  <div class="row mb-3">
                    <div class="form-group col-12">
                      <label>Course</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-12">
                      <label>Category Select</label>
                      <select class="custom-select">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group col-12">
                      <label>Mentor</label>
                      <select class="custom-select">
                        <option>Muktar</option>
                        <option>Arif</option> 
                      </select>
                    </div>
                    <div class="form-group col-12">
                      <label>Status</label>
                      <select class="custom-select">
                        <option>Active</option>
                        <option>Inactive 2</option> 
                      </select>
                    </div>
                    <div class="form-group col-12">
                      <p>Size: 400px x 300px;</p>
                      <input class="w-100" name="profile" type="file"><br>
                    </div>
                    <input type="submit" value="Update Course" class="form-group btn btn-primary">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endtion('content')
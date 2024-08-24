@extends('admin.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mentors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <a href="{{ url('dashboard/mentor/create') }}" class="btn btn-outline-primary">Create Mentor</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Mentor</th>
                    <th>Title</th>
                    <th class="text-center">Courses</th>
                    <th class="text-center">Created Date</th>
                    <th class="text-right">Action</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <td>LA2024</td>
                  <td><a href="view.html">Muktar Hussain</a></td>
                  <td>Web Developer</td>
                  <td class="text-center">07</td>
                  <td class="project-actions text-center">Created 01.01.2019</td>
                  <td class="text-right">
                  <a href="edit.html"><i class="fas fa-pencil-alt px-2"></i></a>
                  <a href="#"><i class="fas fa-trash text-danger"></i></a>
                  </td>
                </tr>
              </tbody>
          </table>
          <ul class="pagination float-right mt-3">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
@endsection('content')
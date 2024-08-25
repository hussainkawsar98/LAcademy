@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Courses</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <a href="{{ url('dashboard/course/create') }}" class="btn btn-outline-primary">Create Course</a>
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
                <th>Course</th>
                <th>Category</th>
                <th>Mentor</th>
                <th class="text-center">Status</th>
                <th class="text-center">Created Date</th>
                <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td>LA2024</td>
                <td><a href="{{url('/dashboard/caourse/1')}}">Graphics Design</a></td>
                <td>
                    Graphics
                </td>
                <td><a href="view.html">Muktar Hussain</a></td>
                <td class="text-center"><span class="badge badge-danger">Inactive</span></td>
                <td class="project-actions text-center">Created 01.01.2019</td>
                <td>
                  <a href="{{url('/dashboard/1/edit')}}"><i class="fas fa-pencil-alt px-2"></i></a>
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
@endsection


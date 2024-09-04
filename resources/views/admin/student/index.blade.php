@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{ url('dashboard/student/create') }}" class="btn btn-primary">Admission</a>
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
                    <th>S.L.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th class="text-center">Course Items</th>
                    <th class="text-center">Created Date</th>
                    <th class="text-right">Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($students as $student)
                  <tr>
                    <td>{{$student->id}}</td>
                    <td><a href="">{{$student->name}}</a></td>
                    <td>{{$student->phone}}</td>
                    <td>018058974</td>
                    <td class="text-center">00</td>
                    <td class="project-actions text-center">{{ dateFormat($student->created_at) }}Hello</td>
                    <td class="text-right">
                      <a href="edit.html"><i class="fas fa-pencil-alt px-2"></i></a>
                      <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                  @endforeach
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
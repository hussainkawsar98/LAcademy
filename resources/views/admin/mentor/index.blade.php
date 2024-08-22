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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mentors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Mentor List</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
              Create Mentor
            </button>
            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Create New Mentor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
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
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Mentor</th>
                    <th>Title</th>
                    <th>Courses</th>
                    <th class="text-center">Created Date</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <td>LA2024</td>
                  <td><a href="view.html">Muktar Hussain</a></td>
                  <td>Web Developer</td>
                  <td>07</td>
                  <td class="project-actions text-right">Created 01.01.2019</td>
                  <td>
                    <a href="#"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>LA2024</td>
                  <td><a href="view.html">Muktar Hussain</a></td>
                  <td>Web Developer</td>
                  <td>07</td>
                  <td class="project-actions text-right">Created 01.01.2019</td>
                  <td>
                    <a href="#"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>LA2024</td>
                  <td><a href="view.html">Muktar Hussain</a></td>
                  <td>Web Developer</td>
                  <td>07</td>
                  <td class="project-actions text-right">Created 01.01.2019</td>
                  <td>
                    <a href="#"><i class="fas fa-trash"></i></a>
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
@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline course-details">
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid rounded" src="{{ getImage('/media/course/', $course->image)}}" alt="User profile picture">
                </div>
                <h3 class="mt-2"><a href="#">{{$course->name}}</a></h3>
                <p class="mb-3">
                  @php
                      $file_name = $lesson_data->lesson_title . '-' . $lesson_data->id . '.txt';
                      $files = public_path("media/course/$file_name");
                      if (file_exists($files)) {
                          ($file = fopen($files, 'r')) or exit('Unable to open file!');
                          while (!feof($file)) {
                              echo fgets($file);
                          }
                          fclose($file);
                      }
                  @endphp
                </p>
                <p class="font-weight-bold mb-0">Video: 45 Videos</p>  
                <p class="font-weight-bold mb-0">Mentor: Muktar Hussain</p>  
                <p class="font-weight-bold mb-0">Price: 451</p>              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <div class="col-md-9">
            <div class="card">
              <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                          <th>Students Name</th>
                          <th>Phone</th>
                          <th>Course Fee</th>
                          <th class="text-center">Erollment Date</th>
                          <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>Muktar Hussain</td>
                          <td>0123456789</td>
                          <td>5214</td>
                          <td>25 July 2024</td>
                          <td><span class="badge badge-danger">Inactive</span></td>
                        </tr>
                        <tr>
                          <td>Muktar Hussain</td>
                          <td>0123456789</td>
                          <td>5214</td>
                          <td>25 July 2024</td>
                          <td><span class="badge badge-danger">Inactive</span></td>
                        </tr>
                        <tr>
                          <td>Muktar Hussain</td>
                          <td>0123456789</td>
                          <td>5214</td>
                          <td>25 July 2024</td>
                          <td><span class="badge badge-danger">Inactive</span></td>
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
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
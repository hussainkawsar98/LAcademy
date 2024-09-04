@extends('admin.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mentor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('mentor.index')}}">Mentors</a></li>
              <li class="breadcrumb-item active">{{$mentor->name}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{ getImage('media/users', $mentor->image) }}" width="100px" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$mentor->name}}</h3>

                <p class="text-muted text-center">{{$mentor->designation}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Total Course</b> <a class="float-right">{{$mentor->course->count()}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Total Student</b> <a class="float-right">543</a>
                  </li>
                </ul>

                <a href="{{route('mentor.index')}}" class="btn btn-primary btn-block"><b>Back To Mentors</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#courses" data-toggle="tab">Courses</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="courses">
                    <div class="row">
                      <div class="col-12">
                        @foreach($mentor->course as $course )
                        <div class="info-box">
                          <span class="info-box-icon w-25"><img src="{{ getImage('media/course', $course->image)}}" class="rounded" alt=""></span>
                          <div class="info-box-content w-75">
                            <h4>{{$course->name}}</h4>
                            <b>Videos: {{$course->total_class}}</b>
                            <b>Videos: {{$course->total_days}}</b>
                            <b>Total Students: 60</b>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="{{ route('mentor.update', $mentor->id) }}" method="POST" id="ajax_form">
                      @csrf
                      {{ method_field('PATCH') }}
                      <div class="form-group row">
                        <label class="col-sm-2">Name</label>
                        <div class="col-sm-10">
                          <input value="{{$mentor->name}}" type="text" class="form-control" name="name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2">Designation</label>
                        <div class="col-sm-10">
                          <input type="text" value="{{$mentor->designation}}" class="form-control" name="designation">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2">Phone</label>
                        <div class="col-sm-10">
                          <input type="text" name="phone" class="form-control" value="{{$mentor->phone}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" value="{{$mentor->email}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2">District</label>
                        <div class="col-sm-10">
                          <select name="district_id" id="district_id" class="form-control">
                            <option value="">Select</option>
                              @foreach ($districts as $district)
                                  <option value="{{ $district->id }}" {{$mentor->district_id == $district->id? 'selected':''}}>{{ $district->name }}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2">Thana</label>
                        <div class="col-sm-10">
                          <select name="thana_id" id="thana_id" class="form-control">
                            @foreach ($thanas as $thana)
                              <option value="{{ $thana->id }}" {{$mentor->thana_id == $thana->id? 'selected':''}}>{{ $thana->name }}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <textarea name="address" class="form-control" id="" cols="30" rows="2">{{$mentor->address}}</textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-4">
                          <select class="form-control" name="status" id="">
                            <option value="Active" {{$mentor->status ==  'Active'? 'selected': ''}}>Active</option>
                            <option value="Inactive" {{$mentor->status ==  'Inactive'? 'selected': ''}}>Inactive</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2">Image</label>
                        <div class="col-sm-10">
                          <input type="file" name="image" id="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection

@push('js')
  <script>
      $("#district_id").change(function(e) {
          $("#thana_id").empty();
          var district_id = $("#district_id").val();
          $.ajax({
              type: 'post',
              url: "{{ route('thana.getthana') }}",
              datatype: 'html',
              data: {
                  district_id: district_id,
              },
              success: function(data) {
                  $("#thana_id").html(data);
              },
              error: function(response) {
                  console.log(data);
              },
          });
      });
  </script>
@endpush

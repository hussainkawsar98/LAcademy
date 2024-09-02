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
        <div class="card w-75">
            <div class="card-body">
                <form action="{{ route('mentor.store') }}" method="POST" id="ajax_form">
                    <div class="row mb-3">
                        <div class="form-group col-6">
                            <label>Mentor Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label>Designation</label>
                            <input name="designation" type="text" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label>Phone</label>
                            <input name="phone" type="tel" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label>Confirm Password</label>
                            <input name="password_confirmation" type="password" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label>District</label>
                            <select name="district_id" id="district_id" class="form-control">
                              <option value="">Select</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label>Thana</label>
                            <select name="thana_id" id="thana_id" class="form-control">
                                <option value="">Select</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label>Address</label>
                            <textarea name="address" class="form-control w-100"></textarea>
                        </div>
                        <div class="form-group col-12">
                            <label>Profile</label>
                            <input class="w-100" name="image" type="file">
                            <span>Size: 400px x 300px;</span>
                        </div>
                        <input type="submit" value="Save Mentor" class="form-group btn btn-primary">
                </form>
            </div>
        </div>
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

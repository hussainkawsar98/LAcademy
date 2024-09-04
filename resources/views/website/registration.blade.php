@extends('website.layouts.app')

@section('content')
<!-- Start Registration Form -->
<section class="registration">
  <div class="container vr-gap">
    <div class="row justify-content-center">
      <div class="col-md-8 box">
        <form action="{{ route('registration.store') }}" method="POST" class="py-3" id="ajax_form">
          <h2 class="text-center"><img src="{{ asset('website/images/academy-logo.png') }}" width="200px" alt=""></h2>
          <div class="row mb-3">
            <div class="col-12">
              <label for="fname">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-6">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="col-6">
              <label for="phone">Phone</label>
              <input type="text" name="phone" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-6">
              <label>Password</label>
              <input type="password" name="password" class="form-control">
            </div>
            <div class="col-6">
              <label>Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-6">
              <label>District</label>
              <select name="district_id" id="district_id" class="form-control">
                <option value="">Select</option>
                @foreach ($districts as $district)
                <option value="{{ $district->id }}">{{ $district->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-6">
              <label>Thana</label>
              <select name="thana_id" id="thana_id" class="form-control">
                <option value="">Select</option>
              </select>
            </div>
          </div>
          <div class="col-12 mb-3">
            <label for="address">Address(Apartment, Road, City)</label>
            <textarea class="form-control mb-3" name="comment" id="" cols="100" row="10"></textarea>
          </div>
          <div class="col-12">
            <label for="profile">Profile</label>
            <input class="form-control file btn-info" name="profile" type="file">
          </div>
          <input type="submit" value="Registration Now" class="btn primary mt-1 mb-2">
          <p>Already have an account? <b><span style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#login" class="hColor">
          Login</span></b>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Start Registration Form -->
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

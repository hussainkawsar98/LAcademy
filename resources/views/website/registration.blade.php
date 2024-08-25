@extends('website.layouts.app')

@section('content')
<!-- Start Registration Form -->
<section class="registration">
    <div class="container vr-gap">
      <div class="row justify-content-center">
        <div class="col-md-8 box">
          <form action="" method="POST" class="py-3">
            <h2 class="text-center mb-2"><img src="images/academy-logo.png" alt=""></h2>
            <div class="row mb-3">
              <div class="col-6">
                <label for="fname">First Name</label>
                <input type="text" name="fname" class="form-control">
              </div>
              <div class="col-6">
                <label for="fname">First Name</label>
                <input type="text" name="lname" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="col-6">
                <label for="phone">Phone</label>
                <input type="number" name="phone" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-6">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="col-6">
                <label for="cofirm-password">Confirm Password</label>
                <input type="password" name="con-password" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-6">
                <label for="district">District</label>
                <select name="district" id="" class="form-control">
                  <option value="" selected disabled>Select District</option>
                  <option value="" >Sylhet</option>
                  <option value="" >Sunamganj</option>
                </select>
              </div>
              <div class="col-6">
                <label for="district">District</label>
                <select name="district" id="" class="form-control">
                  <option value="" selected disabled>Select Thana</option>
                  <option value="" >Chhatak</option>
                  <option value="" >Sadar</option>
                </select>
              </div>
            </div>
            <label for="address">Address(Apartment, Road, City)</label>
            <textarea class="form-control mb-3" name="comment" id="" cols="100" row="10"></textarea>
            <label for="profile">Profile</label>
            <input class="form-control file" name="profile" type="file">
            <input type="submit" value="Registration Now" class="btn primary mt-1 mb-2">
            <p>Already have an account? <b><span style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#login" class="hColor">
            Login</span></b>
            </p>
          </form>
        </div>
        </div>
      </div>
    </div>
</section>
<!-- Start Registration Form -->
@endsection

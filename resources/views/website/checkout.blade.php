@extends('website.layouts.app')

@section('content')
  <!-- Start Checkout Map -->
  <section class="checkout">
    <div class="container vr-gap">
      <div class="row">
        <div class="col-md-6">
          <h3 class="mb-2">IELTS for Higher Study</h3>
          <img src="{{ asset('website/Images/IELTS Academic Offline Thumnail.jpeg') }}" class="img-fluid rounded mb-2" alt="">
          <p>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </p>
          <p class="mb-0"><strong>Total Videos:</strong> Videos 40</p>
          <p class="mb-0"><strong>Mentor:</strong> Muktar Hussain</p>
        </div>
        <div class="col-md-6 payment-details">
          <h3 class="mb-2">Total Payment Amount: 658</h3>
          <h4 class="mb-3"><strong> Note:</strong> First Send Your Payment to <strong> 01906287849</strong> then fill-up below form.</h4>
          <form action="" method="POST">
            <input type="hidden" name="fname">
            <input type="hidden" name="lname">

            <label for="fname">Bkash Number</label>
            <input type="text" name="bkashNumber" class="form-control mb-2">
            <label for="fname">Bkash Transition ID</label>
            <input type="text" name="bkashID" class="form-control">
            <input type="submit" value="Payment Confirm" class="btn primary mt-4">
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Checkout Map -->
@endsection

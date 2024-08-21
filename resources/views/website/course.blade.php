@extends('layouts.website')

@section('content')
<!-- Start Breadcrumb -->
<section class="breadcrumb mb-0">
        <div class="container">
          <ol class="d-flex mb-0 vr-gap justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Course</li>
          </ol>
        </div>
      </section>
      <!-- End Breadcrumb -->

      <!-- Start Courses Part-->
      <section class="container vr-gap">
        <h2 class="title pb-2">Course's of Academy</h2>
        <div class="row">
          <div class="col-lg-3">
            <div class="course-single mb-3">
              <a href=""><img src="{{asset('website/images/IELTS Academic Offline Thumnail.jpeg')}}" class="img-fluid" alt="..."></a>
              <div class="d-flex mt-1">
                <p class="my-0">Videos 40</p>
                <span>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
              </div>
              <div class="d-flex mt-1">
                <h4>Web Development</h4>
                <h4>৳500 <sub><del>700</del></sub></h4>
              </div>
              <a href="" class="btn buy primary w-100">Buy Now</a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="course-single mb-3">
              <a href=""><img src="{{asset('website/images/IELTS Academic Offline Thumnail.jpeg')}}" class="img-fluid" alt="..."></a>
              <div class="d-flex mt-1">
                <p class="my-0">Videos 40</p>
                <span>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
              </div>
              <div class="d-flex mt-1">
                <h4>Web Development</h4>
                <h4>৳500 <sub><del>700</del></sub></h4>
              </div>
              <a href="" class="btn buy primary w-100">Buy Now</a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="course-single mb-3">
              <a href=""><img src="{{asset('website/images/IELTS Academic Offline Thumnail.jpeg')}}" class="img-fluid" alt="..."></a>
              <div class="d-flex mt-1">
                <p class="my-0">Videos 40</p>
                <span>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
              </div>
              <div class="d-flex mt-1">
                <h4>Web Development</h4>
                <h4>৳500 <sub><del>700</del></sub></h4>
              </div>
              <a href="" class="btn buy primary w-100">Buy Now</a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="course-single mb-3">
              <a href=""><img src="{{asset('website/images/IELTS Academic Offline Thumnail.jpeg')}}" class="img-fluid" alt="..."></a>
              <div class="d-flex mt-1">
                <p class="my-0">Videos 40</p>
                <span>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
              </div>
              <div class="d-flex mt-1">
                <h4>Web Development</h4>
                <h4>৳500 <sub><del>700</del></sub></h4>
              </div>
              <a href="" class="btn buy primary w-100">Buy Now</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Courses Part-->
@endsection

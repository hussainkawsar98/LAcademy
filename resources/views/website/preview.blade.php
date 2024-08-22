@extends('website.layouts.app')

@section('content')
<!-- Start Course Banner Part -->
<Section class="course-banner py-5">
     <div class="container">
      <div class="row">
        <div class="col-md-8 course-short-des">
          <h2>Lorem ipsum dolor sit amet consectetur.</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro blanditiis optio, voluptas voluptate dignissimos veniam ducimus rem cum eius dolor eaque molestiae distinctio quam nam amet ad dolorum exercitationem! Molestiae.

          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, recusandae eveniet. Praesentium ullam repellendus vitae neque at quod culpa possimus repudiandae maxime, minima atque numquam quia, itaque in. Magni, aperiam!
          </p>
        </div>
        <div class="col-md-4"></div>
      </div>
     </div>
    </Section>
    <!-- End Course Banner Part -->

    <!-- Start Course Content Overview Part-->
    <section class="">
      <div class="container py-4">
        <div class="row">
            <div class="col-md-8 course-content-grid mb-4">
              <!-- <h3>Course Instructor</h3>
              <div class="mentor mb-4">
                <img src="Images/team1.png" class="img-fluid" alt="">
                <div>
                  <h4>Muktar Hussain</h4>
                  <p>Web Application Developer</p>
                </div>
              </div> -->
              
              <div class="course-content-grid">
                <h3>What You learn From Here</h3>
                <ul>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, unde?</li>
                  <li>Smet consectetur  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, unde?</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, unde?</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, unde?</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, unde?</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, unde?</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, unde?</li>
                </ul>
              </div>
              <div class="course-content-grid mt-4">
                <h3>Coure Certificate</h3>
                <ul>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, unde?</p>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, unde?</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, unde?</li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
                <div class="course-preview py-1 px-1">
                  <img src="{{ asset('website/Images/Banner-2.jpg') }}" class="img-fluid" alt="">
                  <div class="px-3">
                    <h3 class="py-3 fee">৳400 <del>500</del></h3>
                    <a href="" class="btn buy primary w-100">Buy Now</a>
                    <h3 class="mt-3">What you get</h3>
                    <ul class="mt-2">
                      <li><i class="bi bi-people"></i> Students</li>
                      <li><i class="bi bi-clock"></i> 25 Days</li>
                      <li><i class="bi bi-play-circle"></i> 45 Videos</li>
                      <li><i class="bi bi-facebook"></i> Facebook Support</li>
                      <li><i class="bi bi-calendar-date"></i> Duration Lifetime</li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- End course Content Overview Part-->

    <!-- Start Courses Part-->
    <section class="container pb-5">
      <h2 class="title-sm">Course's of Academy</h2>
      <div class="course-carousel owl-carousel">    
        <div class="course-single item">
              <a href=""><img src="{{ asset('website/images/IELTS Academic Offline Thumnail.jpeg') }}" class="img-fluid" alt="..."></a>
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
              <div class="d-flex">
                <p></p>
              </div>
              <!-- <div class="d-flex">
                <a href="" class="btn buy primary">Buy Now</a>
                <a href="" class="btn buy primary">Copy Link</a>
              </div> -->
              <a href="" class="btn buy primary w-100">Buy Now</a>
        </div>
        <div class="course-single item">
          <a href=""><img src="{{ asset('website/images/Spoken English Online.jpeg') }}" class="img-fluid" alt="..."></a>
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
          <div class="d-flex">
            <p></p>
          </div>
          <!-- <div class="d-flex">
            <a href="" class="btn buy primary">Buy Now</a>
            <a href="" class="btn buy primary">Copy Link</a>
          </div> -->
          <a href="" class="btn buy primary w-100">Buy Now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Courses Part-->
@endsection

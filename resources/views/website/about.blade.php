@extends('website.layouts.app')

@section('content')
      <!-- Start Breadcrumb -->
      <section class="breadcrumb mb-0">
        <div class="container">
          <ol class="d-flex mb-0 vr-gap justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
          </ol>
        </div>
      </section>
      <!-- End Breadcrumb -->

      <!-- Start About Part-->
      <section id="about" class="vr-gap">
        <div class="container">
          <div class="row align-items-center">
            <h2 class="col-8 title pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, odio molestias?</h2>
              <div class="col-md-6">
                  <div class="about-short-text">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, nostrum quaerat tenetur minima sit totam numquam ea obcaecati quibusdam, saepe deleniti ab excepturi magnam dolor, fugit modi! Non, similique velit?</p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam mollitia autem blanditiis architecto temporibus consequuntur sit ipsum nulla? Ab quo animi hic nesciunt aperiam, incidunt harum. Quas recusandae illo voluptatem.</p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam mollitia autem blanditiis architecto temporibus consequuntur sit ipsum nulla? Ab quo animi hic nesciunt aperiam, incidunt harum. Quas recusandae illo voluptatem.</p>
                  </div>
              </div>
              <div class="col-md-6">
                  <img src="{{asset('website/images/ai-generated-8774130_640.jpg')}}" class="img-fluid" alt="">
              </div>
          </div>
        </div>
          </section>
      <!-- End About Part-->

      <!-- Start Testimonial Part-->
      <section id="testimonial" class="bg-light vr-gap align-items-center">
        <div class="container">
          <h3 class="title pb-2">Successfull Story</h3>
        <div class="testimonial-carousel owl-carousel"> 
          <div class="testimonial-single">
            <ul class="d-flex align-items-center">
              <li><img src="Images/pet-house.png" alt=""></li>
              <li>
                <h5>Habib Hussain</h5>
                <p>Student's of Graphic Design</p>
              </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit numquam consectetur fugit quis veniam id ut, nam a tenetur, fuga quas quidem facilis pariatur quia ipsam iste iusto corporis doloribus.</p>   
          </div>
          <div class="testimonial-single">
            <ul class="d-flex align-items-center">
              <li><img src="Images/pet-house.png" alt=""></li>
              <li>
                <h5>Habib Hussain</h5>
                <p>Student's of Graphic Design</p>
              </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit numquam consectetur fugit quis veniam id ut, nam a tenetur, fuga quas quidem facilis pariatur quia ipsam iste iusto corporis doloribus.</p>   
          </div>
          <div class="testimonial-single">
            <ul class="d-flex align-items-center">
              <li><img src="{{asset('website/Images/pet-house.png')}}" alt=""></li>
              <li>
                <h5>Habib Hussain</h5>
                <p>Student's of Graphic Design</p>
              </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit numquam consectetur fugit quis veniam id ut, nam a tenetur, fuga quas quidem facilis pariatur quia ipsam iste iusto corporis doloribus.</p>   
          </div>
          <div class="testimonial-single">
            <ul class="d-flex align-items-center">
              <li><img src="Images/pet-house.png" alt=""></li>
              <li>
                <h5>Habib Hussain</h5>
                <p>Student's of Graphic Design</p>
              </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit numquam consectetur fugit quis veniam id ut, nam a tenetur, fuga quas quidem facilis pariatur quia ipsam iste iusto corporis doloribus.</p>   
          </div>
      </div>
        </div>   
      </section>
      <!-- End Testimonial Part-->
@endsection

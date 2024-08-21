@extends('layouts.website')

@section('content')
<!-- Start Banner Part-->
<section id="banner">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('')}}website/images/Banner-1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Fplaceholder content for the first</h5>
            <p>Some representative placeholder content for the first slide. Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, accusamus?
            </p>
            <a href="" class="btn primary me-3">Explore More</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('')}}website/images/Banner-2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label Some representative placeholder</h5>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo sed optio non, magni nihil ducimus possimus perferendis totam officiis odit!</p>
            <a href="" class="btn primary me-3">Explore More</a>
            <a href="" class="btn secondary me-3">Explore More</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('')}}website/images/Banner-1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Some representative placeholder Third slide label</h5>
            <p>Some representative placeholder content for the third slide. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur.</p>
            <a href="" class="btn primary me-3">Explore More</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
    <!-- End Banner Part-->

    <!-- Start About Part-->
    <section id="about" class="vr-gap">
      <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-short-text">
                    <h2 class="title pb-2">About Academy</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, nostrum quaerat tenetur minima sit totam numquam ea obcaecati quibusdam, saepe deleniti ab excepturi magnam dolor, fugit modi! Non, similique velit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam mollitia autem blanditiis architecto temporibus consequuntur sit ipsum nulla? Ab quo animi hic nesciunt aperiam, incidunt harum. Quas recusandae illo voluptatem.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam mollitia autem blanditiis architecto temporibus consequuntur sit ipsum nulla? Ab quo animi hic nesciunt aperiam, incidunt harum. Quas recusandae illo voluptatem.</p>
                    <a href="" class="btn primary mt-3 me-3">Explore More</a>
                    <a href="" class="btn secondary mt-3">Explore More</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('')}}website/images/ai-generated-8774130_640.jpg" class="img-fluid" alt="">
            </div>
        </div>
      </div>
    </section>
    <!-- End About Part-->

    <!-- Start Courses Part-->
    <section id="" class="container vr-gap-b">
      <h2 class="title pb-2">Course's of Academy</h2>
      <div class="course-carousel owl-carousel">    
        <div class="course-single item">
              <a href=""><img src="{{asset('')}}website/images/IELTS Academic Offline Thumnail.jpeg" class="img-fluid" alt="..."></a>
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
          <a href=""><img src="{{asset('')}}website/images/Spoken English Online.jpeg" class="img-fluid" alt="..."></a>
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

    <!-- Start category Part-->
    <section id="" class="bg-light vr-gap-t">
      <div class="container">
        <h2 class="title pb-2">Course Categories</h2>
        <div class="category-carousel owl-carousel">    
          <div class="category-single item text-center">
            <a href="#">
              <img src="{{asset('')}}website/images/ai-generated-8774130_640.jpg" class="" alt="...">
              <h4 class="py-2">Graphic Design</h4>
            </a>
          </div>
          <div class="category-single item text-center">
            <a href="#">
              <img src="{{asset('')}}website/images/Spoken English Online.jpeg" class="" alt="...">
              <h4 class="py-2">Graphic Design</h4>
            </a>
          </div>
          <div class="category-single item text-center">
            <a href="#">
              <img src="{{asset('')}}website/images/IELTS Academic Offline Thumnail.jpeg" class="" alt="...">
              <h4 class="py-2">Graphic Design</h4>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Category Part-->

    <!-- Start Inner Slider Part-->
    <section id="inner-slider" class="bg-light py-5">
      <div class="container">
        <div class="inner-slider-carousel owl-carousel">    
          <div class="item mx-3">
            <img src="{{asset('')}}website/Images/Inner-slider-1.jpg" alt="" class="img-fluid">
          </div>
          <div class="item mx-3">
            <img src="{{asset('')}}website/Images/Inner-slider-2.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </section>
    <!-- End Inner Slider Part-->

    <!-- Start Testimonial Part-->
    <section id="testimonial" class="bg-light vr-gap-b align-items-center">
      <div class="container">
        <h3 class="title pb-2">Successfull Story</h3>
      <div class="testimonial-carousel owl-carousel"> 
        <div class="testimonial-single">
          <ul class="d-flex align-items-center">
            <li><img src="{{asset('')}}website/Images/pet-house.png" alt=""></li>
            <li>
              <h5>Habib Hussain</h5>
              <p>Student's of Graphic Design</p>
            </li>
          </ul>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit numquam consectetur fugit quis veniam id ut, nam a tenetur, fuga quas quidem facilis pariatur quia ipsam iste iusto corporis doloribus.</p>   
        </div>
        <div class="testimonial-single">
          <ul class="d-flex align-items-center">
            <li><img src="{{asset('')}}website/Images/pet-house.png" alt=""></li>
            <li>
              <h5>Habib Hussain</h5>
              <p>Student's of Graphic Design</p>
            </li>
          </ul>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit numquam consectetur fugit quis veniam id ut, nam a tenetur, fuga quas quidem facilis pariatur quia ipsam iste iusto corporis doloribus.</p>   
        </div>
        <div class="testimonial-single">
          <ul class="d-flex align-items-center">
            <li><img src="{{asset('')}}website/Images/pet-house.png" alt=""></li>
            <li>
              <h5>Habib Hussain</h5>
              <p>Student's of Graphic Design</p>
            </li>
          </ul>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit numquam consectetur fugit quis veniam id ut, nam a tenetur, fuga quas quidem facilis pariatur quia ipsam iste iusto corporis doloribus.</p>   
        </div>
        <div class="testimonial-single">
          <ul class="d-flex align-items-center">
            <li><img src="{{asset('')}}website/Images/pet-house.png" alt=""></li>
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


    <!-- Start Blog Part-->
    <section id="blog" class="vr-gap">
      <div class="container">
        <h3 class="title pb-2">News</h3>
        <div class="blog-carousel owl-carousel"> 
          <article class="blog-single">
            <a href="#">
              <img src="{{asset('')}}website/Images/Banner-1.jpg" class="img-fluid" alt="">
              <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit...</h4>
              <div class="d-flex">
                <p>By Academy</p>
                <p>25 May 2024</p>
              </div>
            </a>
          </article>
          <article class="blog-single">
            <a href="#">
              <img src="{{asset('')}}website/Images/Banner-1.jpg" class="img-fluid" alt="">
              <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit...</h4>
              <div class="d-flex">
                <p>By Academy</p>
                <p>25 May 2024</p>
              </div>
            </a>
            </article>
            <article class="blog-single">
              <a href="#">
                <img src="{{asset('')}}website/Images/Banner-1.jpg" class="img-fluid" alt="">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit...</h4>
                <div class="d-flex">
                  <p>By Academy</p>
                  <p>25 May 2024</p>
                </div>
              </a>
            </article>
            <article class="blog-single">
              <a href="#">
                <img src="{{asset('')}}website/Images/Banner-1.jpg" class="img-fluid" alt="">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit...</h4>
                <div class="d-flex">
                  <p>By Academy</p>
                  <p>25 May 2024</p>
                </div>
              </a>
            </article>
            <article class="blog-single">
              <a href="#">
                <img src="{{asset('')}}website/Images/Banner-1.jpg" class="img-fluid" alt="">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit...</h4>
                <div class="d-flex">
                  <p>By Academy</p>
                  <p>25 May 2024</p>
                </div>
              </a>
            </article>
            <article class="blog-single">
              <a href="#">
                <img src="{{asset('')}}website/Images/Banner-1.jpg" class="img-fluid" alt="">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit...</h4>
                <div class="d-flex">
                  <p>By Academy</p>
                  <p>25 May 2024</p>
                </div>
              </a>
            </article>
          </div>
        </div>   
    </section>
    <!-- End Blog Part-->
@endsection

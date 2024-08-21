@extends('layouts.website')

@section('content')
<section class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7237.582019041035!2d91.86790112130957!3d24.90510936728506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552700bfdb4f%3A0x369ba0b482046794!2sAmbarkhana%2C%20Sylhet!5e0!3m2!1sen!2sbd!4v1649352377057!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="container get-in-touch vr-gap">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <h2 class="title text-center">Get In Touch</h2>
                <p class="text-center mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste aliquam debitis inventore aut laudantium? Optio dignissimos tenetur animi repellendus nesciunt?</p>
                <form action="" method="POST">
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
                  <label for="phone">Message</label>
                  <textarea class="form-control" name="comment" id="" cols="100" row="10"></textarea>
                  <input type="submit" value="Send Message" class="btn primary mt-4">
                </form>
              </div>
              </div>
              <div class="row justify-content-center text-center mt-5">
                <div class="col-md-3">
                  <div class="address-single">
                    <i>#</i>
                    <h3>Address</h3>
                    <p>Kaniz Plaza, 2nd Floor, Zindabazar, SyYlhet</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="address-single">
                    <i>#</i>
                    <h3>Phone</h3>
                    <p>+880 1906 287849</p>
                    <p>+880 1614 567377</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="address-single">
                    <i>#</i>
                    <h3>Email</h3>
                    <p>info@larvelacademy.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- End Google Map -->
@endsection

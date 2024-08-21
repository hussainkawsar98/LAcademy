@extends('layouts.website')

@section('content')
<!-- Start Student Dashboard -->
<section class="student-dashboard py-5">
  <div class="container">
    <div class="d-flex align-items-start mx-auto">
      <div class="nav flex-column nav-pills box me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="profile-tab" data-bs-toggle="pill" data-bs-target="#profile" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</button>
        <button class="nav-link" id="course-tab" data-bs-toggle="pill" data-bs-target="#course" type="button" role="tab" aria-controls="course" aria-selected="false">Course</button>
        <button class="nav-link" id="edit-tab" data-bs-toggle="pill" data-bs-target="#edit" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Edit Profile</button>
      </div>
      <div class="tab-content box" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
        <img src="Images/team.png" width="120px" alt="">
        <h4>Muktar Hussain</h4>
        <ul>
          <li><span>Phone: </span>01234567990</li>
          <li><span>Email: </span></b>example@gmail.com</li>
          <li><span>Address: </span> Amborkhana, Sylhet</li>
        </ul>
        </div>
        <div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
          <ul>
            <li class="d-flex">
              <img src="Images/team.png" class="rounded" alt="">
              <div class="content">
                <a href=""><h3>Lorem ipsum dolor sit.</h3></a>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non porro impedit exercitationem odio repudiandae labore quas eum necessitatibus voluptatibus dicta, corrupti consequuntur dignissimos sequi ducimus mollitia est architecto et. Assumenda!</p>
                <p>Total Videos: 40 videos</p>
              </div>
            </li>
            <li class="d-flex">
              <img src="Images/team.png" class="rounded" alt="">
              <div class="content">
                <a href=""><h3>Lorem ipsum dolor sit.</h3></a>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non porro impedit exercitationem odio repudiandae labore quas eum necessitatibus voluptatibus dicta, corrupti consequuntur dignissimos sequi ducimus mollitia est architecto et. Assumenda!</p>
                <p>Total Videos: 40 videos</p>
              </div>
            </li>
          </ul>
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
        <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
          <form class="form-horizontal">
            <div class="form-group row">
              <label for="inputName" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Name">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputName" class="col-sm-2 col-form-label">Mentor Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Title">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="inputEmail" placeholder="Phone">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Address">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-2 col-sm-10">
                <input type="file">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn primary rounded">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Student Dashboard -->
@endsection

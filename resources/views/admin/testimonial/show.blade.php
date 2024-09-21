@extends('admin.layouts.app')
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Categories</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
      <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-body card-outline card-primary">
            <h4 class="mb-2">Web Design</h4>
            <img src="{{ getImage('media/category', $category->image) }}" class="img-fluid rounded" alt="">
            <p class="my-1">Total Course: </p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card card-outline card-primary">
            <h4 class="card-body">Subcategories</h4>
            <table class="table table-striped projects">
              <thead>
                <tr>
                  <th>Subcategory</th>
                  <th class="text-center">Courses</th>
                  <th class="text-center">Image</th>
                  <th class="text-center">Created Date</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="">Web Design</a></td>
                  <td><img src="../dist/img/avatar3.png" width="100px" alt=""></td>
                  <td class="text-center">10</td>
                  <td class="text-center">Created 01.01.2019</td>
                  <td class="text-right">
                    <a href="edit.html"><i class="fas fa-pencil-alt px-2"></i></a>
                    <a href="#"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
            <ul class="pagination float-right mt-3">
              <li class="page-item"><a class="page-link" href="#">«</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
          </div>
        </div>
        <!-- Courses Part -->
        <div class="card card-body card-outline card-primary">
          <h3 class="mb-3">Courses</h3>
          <div class="row">
            <div class="col-md-4 mb-4">
              <img src="../dist/img/avatar2.png" alt="" class="img-fluid rounded">
            </div>
            <div class="col-md-8 mb-4">
              <h4>Lorem ipsum dolor sit.</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae distinctio repellat rem labore sunt ratione est odit aut quae illum dolore fuga corporis voluptatem nihil, doloribus alias vel exercitationem.</p>
              <h6>Video: 45 Videos</h6>
              <h6>Mentor: Muktar Hussain</h6>
              <h6>Price: 451</h6>
            </div>
            <div class="col-md-4 mb-4">
              <img src="../dist/img/avatar2.png" alt="" class="img-fluid rounded">
            </div>
            <div class="col-md-8 mb-4">
              <h4>Lorem ipsum dolor sit.</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae distinctio repellat rem labore sunt ratione est odit aut quae illum dolore fuga corporis voluptatem nihil, doloribus alias vel exercitationem.</p>
              <h6>Video: 45 Videos</h6>
              <h6>Mentor: Muktar Hussain</h6>
              <h6>Price: 451</h6>
            </div>
            <ul class="pagination float-right">
              <li class="page-item"><a class="page-link" href="#">«</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
  </section>
@endsection('content')
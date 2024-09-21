<div class="wrapper">
  <!-- Top Bar  -->
  @include('admin.layouts.topbar');

  <!-- Main Sidebar Menu Content -->
  @include('admin.layouts.navbar');

  <!-- Global Content Here -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <div class="modal fade" id="common_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
</div>
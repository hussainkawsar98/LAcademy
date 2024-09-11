<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Datatables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/toastr.min.css') }}">
    <!-- Delete CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/delete.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <!-- Top Bar  -->
    @include('admin.layouts.topbar');
    <!-- Footer Section -->
    @include('admin.layouts.footer');
    <!-- Delete -->
    @include('admin.layouts.delete');

    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    </script>
    <!-- Toostar JS  -->
    <script>
      $(document).on("submit", "form#ajax_form", function(e) {
        e.preventDefault();
        $('#loading-indicator').show();
        $("span.textdanger").text("");
        var url = $(this).attr("action");
        var method = $(this).attr("method");
        var formData = new FormData($(this)[0]);
        $.ajax({
          type: method,
          url: url,
          data: formData,
          async: false,
          processData: false,
          contentType: false,
          success: function(res) {
            $('#loading-indicator').hide();
            if (res.status == true) {
              toastr.success(res.msg);
              if (res.url) {
                  document.location.href = res.url;
              } else {
                  window.location.reload();
              }
            } else if (res.status == false) {
              toastr.error(res.msg);
            }
          },
          error: function(response) {
            $('#loading-indicator').hide();
            $(".validation_error").empty();
            $.each(response.responseJSON.errors, function(field_name, error) {
              $(document).find("[name=" + field_name + "]")
                .after('<span class="validation_error" style="color:red">' + error +"</span>");
                /*   toastr.error(error); */
                //  $(document).find("[name=" + field_name + "]").css("border","1px red solid");
            });
          },
        });
      });

      $(document).on("click", ".btn_modal", function(e) {
        e.preventDefault();
        var url = $(this).attr("href");
        $.ajax({
          type: "GET",
          url: url,
          data: {},
          success: function(res) {
              $("div#common_modal").html(res).modal("show");
          },
        });
      });
    </script>
    
    <!-- Ajax -->
    <script src="{{ asset('admin/js/ajax.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <!-- Summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- Toastr JS -->
    <script src="{{ asset('admin/js/toastr.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/js/pages/dashboard.js') }}"></script>
    @stack('js')
  </body>
</html>
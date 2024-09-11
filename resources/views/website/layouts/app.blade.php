<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Laravel Academy</title>
    <link rel="shortcut icon" href="Images/fav.jpg" type="image/x-icon">
    <!-- Font Family Link -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Owl Carousel Link -->
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css') }}">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Lexend:wght@100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <!-- JQuery Script -->
    <script src="{{ asset('website/js/jquery-3.7.1.slim.min.js') }}"></script>
    <!-- CSS file -->
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <!-- Resposive CSS File -->
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}">
    <!-- JS File -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('website/js/custom.js') }}"></script>
</head>

<body>
    <!-- Start Header Part-->
    <header id="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img
                        src="{{ asset('') }}website/images/academy-logo.jpg" class="img-fluid" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/course') }}">Courses</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="categories.html" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="web-design.html">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Graphic Design</a></li>
                                <li><a class="dropdown-item" href="#">Mobile App</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown-">
                            <a class="nav-link dropdown-toggle- parent" href="categories.html" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu- child">
                                <li><a class="dropdown-item" href="#">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Graphic Design</a></li>
                                <li><a class="dropdown-item" href="#">Mobile App</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="nav-link btn primary" href="{{ url('/registration') }}">Registration</a>
                        <!-- Login Modal Button -->
                        <button type="button" class="btn primary ms-2" data-bs-toggle="modal" data-bs-target="#login">
                            Login
                        </button>
                        <!-- Login Modal -->
                        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="exampleModalLabel">
                                            <img src="images/academy-logo.png" width="150px" alt="">
                                        </h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST" class="pb-1">
                                            <div class="mb-3">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                            <input type="submit" value="Login" class="btn primary mt-1 mb-2">
                                            <p>Don't have an account?<a href="registration.html"><b> Register</b></a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="nav-link btn primary ms-2" href="{{ url('/student') }}">Hussain</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header Part-->

    <!-- Body Content Here -->
    @yield('content')

    <!-- Start Footer Part -->
    <footer id="footer" class="bg-dark">
        <div class="container">
            <section class="footer-body">
                <div class="row py-5">
                    <div class="col-md-6">
                        <div class="footer-single">
                            <img src="{{ asset('') }}website/Images/academy-logo.png" class="img-fluid"
                                alt="">
                            <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet natus
                                aperiam illum eos labore quo dolor reiciendis facilis cum deleniti officiis nulla eum
                                sint, sapiente illo mollitia quas assumenda iste.</p>
                            <div class="social-link py-2">
                                <a href="#"><img src="Images/facebook.png" alt="">
                                </a>
                                <a href="#"><img src="Images/instagram.png" alt="">
                                </a>
                                <a href="#"><img src="Images/twitter.png" alt="">
                                </a>
                                <a href="#"><img src="Images/linkedin.png" alt="">
                                </a>
                                <a href="#"><img src="Images/facebook.png" alt="">
                                </a>
                            </div>
                            <img src="Images/Pay.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-single mt-5">
                            <h4 class="pb-2">Needed Links</h4>
                            <ul>
                                <li>
                                    <a href=""><i class="bi bi-arrow-right-short"></i> About</a>
                                </li>
                                <li>
                                    <a href=""><i class="bi bi-arrow-right-short"></i> Courses</a>
                                </li>
                                <li>
                                    <a href=""><i class="bi bi-arrow-right-short"></i> Categorires</a>
                                </li>
                                <li>
                                    <a href=""><i class="bi bi-arrow-right-short"></i> Contact</a>
                                </li>
                                <li>
                                    <a href=""><i class="bi bi-arrow-right-short"></i> Registration</a>
                                </li>
                                <li>
                                    <a href=""><i class="bi bi-arrow-right-short"></i> Privacy Policy</a>
                                </li>
                                <li>
                                    <a href=""><i class="bi bi-arrow-right-short"></i> Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-single mt-5">
                            <h4 class="pb-2">Course Categories</h4>
                            <ul>
                                <li>
                                    <a href=""><i class="bi bi-arrow-right-short"></i>Graphic Design</a>
                                </li>
                                <li>
                                    <a href=""><i class="bi bi-arrow-right-short"></i>Web Design</a>
                                </li>
                                <li>
                                    <a href=""><i class="bi bi-arrow-right-short"></i>Mobile Apps Design</a>
                                </li>
                                <li>
                                    <a href=""><i class="bi bi-arrow-right-short"></i>Digital Marketing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer-bottom py-3 text-center">
                <p>©All Right Reserved By <a href="">Muktar Hussain</a></p>
            </section>
        </div>
    </footer>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
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
    <!-- End Footer Part -->

    <!-- All Script File -->
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="{{ asset('') }}website/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr JS -->
    <script src="{{ asset('admin/js/toastr.min.js')}}"></script>
    <!-- Owl Carousel Script -->
    <script src="{{ asset('') }}website/js/owl.carousel.min.js"></script>
    @stack('js')

    <body>

</html>

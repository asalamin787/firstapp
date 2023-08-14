<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SEOGO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/style.css') }}">
    
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets1/img/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="Case_details.html">Case details</a></li>
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="Case_Study.html">Case Study</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="#"> <i class="fa fa-phone"></i> +10 673 567 367</a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">
                                <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="Case_details.html">Case details</a></li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="elements.html">elements</a></li>
                                    </ul>
                                </li>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    @yield('content1')
    <!-- /bradcam_area  -->
   
    <!-- footer start -->

    <footer class="footer">
        <div class=" container">
            <div class="pro_border">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="lets_projects">
                            <h3>Let’s Start your project, <a href="#">Mail Us</a> </h3>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="phone_number">
                            <h3>+10 673 563 629</h3>
                            <a href="#">support@seogo.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{ asset('assets1/img/footer_logo.png') }}" alt="">
                                </a>
                            </div>
                            <p>
                                Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture
                                placing drawing.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#">Marketing &amp; SEO</a></li>
                                <li><a href="#"> Startup</a></li>
                                <li><a href="#">Finance solution</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#">Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-1 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="{{ asset('assets1/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets1/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets1/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets1/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets1/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets1/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets1/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets1/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets1/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets1/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets1/js/scrollIt.js') }}"></script>
    <script src="{{ asset('assets1/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets1/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets1/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets1/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets1/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins.js') }}"></script>
    <script src="{{ asset('assets1/js/gijgo.min.js') }}"></script>

    <!--contact js-->
    <script src="{{ asset('assets1/js/contact.js') }}"></script>
    <script src="{{ asset('assets1/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets1/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets1/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets1/js/mail-script.js') }}"></script>

    <script src="{{ asset('assets1/js/main.js') }}"></script>


   
</body>

</html>

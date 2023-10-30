<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/logo/favourite_icon_1.png')}}">
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- icon font - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/fontawesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/stroke-gap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/icofont.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/fontawesome.min.css')}}"> --}}

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.css')}}">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/frontend/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/frontend/css/bootstrap.min.css')}}">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css')}}">
</head>
<body>
    <!-- body_wrap - start -->
    <div class="body_wrap">

        <!-- back-to-top - start -->
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- back-to-top - end -->

        <!-- preloader - start -->
        {{-- <div id="preloader"></div>  --}}
        <!-- preloader - end -->

        <!-- header_section - start -->
        <header class="header_section header-style-3">
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-6">

                        </div>
                        <div class="col col-md-6">
                            <p class="header_hotline">Call us toll free: <strong>+1888 234 5678</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col col-lg-3 col-md-3 col-sm-12">
                            <div class="brand_logo">
                                <a class="brand_link" href="{{ route('frontend.index') }}">
                                    <img src="{{ asset('assets/frontend/images/logo/logo_2x.png') }}" style="width: 110px" alt="logo_not_found">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <nav class="main_menu navbar navbar-expand-lg">
                                <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                                    <button type="button" class="offcanvas_close">
                                        <i class="fal fa-times"></i>
                                    </button>
                                    <ul class="main_menu_list ul_li">
                                        <li class="{{ request()->routeIs('frontend.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('frontend.index') }}">Home</a></li>

                                       @foreach ($categories as $categorie)
                                       <li class="{{ request()->is('category/'.$categorie->slug.'*') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('frontend.single.category.post', $categorie->slug) }}">{{ Str::ucfirst($categorie->name) }}
                                        </a>
                                      </li>
                                       @endforeach

                                       {{-- @foreach ($categories as $category)
                                        {* PARENT CATEGORY DISPLAY LOGIC *}

                                        <li class="{{ request()->is('category/'.$category->slug.'*') ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('frontend.single.category.post', $category->slug) }}">{{ Str::ucfirst($category->name) }}
                                            </a>
                                          </li>

                                        @foreach ($category->subCategories as $subCategory)

                                            {* SUBCATEGORY DISPLAY LOGIC *}

                                        @endforeach
                                    @endforeach  --}}

                                    </ul>
                                </div>
                            </nav>

                            <div class="offcanvas_overlay"></div>
                        </div>

                    </div>
                </div> 
            </div>
        </header>
        <!-- header_section - end --> 
        <!-- main body - start -->
        <main>

            @yield('content')

        </main>
         <!-- main body - end -->

<!-- newsletter_section - start -->
    {{-- <section class="newsletter_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-lg-6">
                    <h2 class="newsletter_title text-white">Sign Up for Newsletter </h2>
                    <p>Get E-mail updates about our latest products and special offers.</p>
                </div>
                <div class="col col-lg-6">
                    <form action="#!">
                        <div class="newsletter_form">
                            <input type="email" name="email" placeholder="Enter your email address">
                            <button type="submit" class="btn btn_secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
<!-- newsletter_section - end -->

<!-- footer_section - start -->
<footer class="footer_section">

    <div class="footer_widget_area">
        <div class="container">
            <div class="row">
                <div class="col col-lg-5 col-md-6 col-sm-6">
                    <div class="footer_widget footer_about">
                        <div class="brand_logo">
                            <a class="brand_link" href="{{ route('frontend.index') }}">
                                <img src="{{ asset('assets/frontend/images/logo/logo_2x.png') }}" style="width: 110px" alt="logo_not_found">
                            </a>
                        </div>
                        <p class="foot_text_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                        <p class="foot_text_2">Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet.</p>
                        
                    </div>
                </div>

                <div class="col-lg-2"></div>

                <div class="col col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_widget footer_useful_links footer_about">
                        <h3 class="footer_widget_title text-uppercase">Contact</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <ul class="social_round ul_li">
                        <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="footer_widget footer_useful_links">
                        <h3 class="footer_widget_title text-uppercase">Custom area</h3>
                        <ul class="ul_li_block">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-lg-12 col-md-8">
                    <p class="copyright_text text-center">
                        ©2023 <a href="#!">Reen</a> | All Rights Reserved.
                    </p>
                </div>
                
                {{-- <div class="col col-md-6">
                    <div class="payment_method">
                        <h4>Payment:</h4>
                        <img src="{{ asset('assets/frontend/images/payments_icon.png') }}" alt="image_not_found">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</footer>
<!-- footer_section - end -->
</div>
<!-- body_wrap - end -->

 <!-- Footer Start -->
 {{-- <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <div class="logo">
                  <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo">
                </div>
                <p class="foot_text_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                <p class="foot_text_2">Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet.</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fas fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="row gy-5 g-4">
                    <div class="col-md-6">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                        <a class="btn btn-link" href="#">About Us</a>
                        <a class="btn btn-link" href="#">Contact Us</a>
                        <a class="btn btn-link" href="#">Privacy Policy</a>
                        <a class="btn btn-link" href="#">Terms & Condition</a>
                        <a class="btn btn-link" href="#">Support</a>
                    </div>
                    <div class="col-md-6">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                        <a class="btn btn-link" href="#">Food & Restaurant</a>
                        <a class="btn btn-link" href="#">Spa & Fitness</a>
                        <a class="btn btn-link" href="#">Sports & Gaming</a>
                        <a class="btn btn-link" href="#">Event & Party</a>
                        <a class="btn btn-link" href="#">GYM & Yoga</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    Designed By <a class="border-bottom" href="#">HTML Codex</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="#">Home</a>
                        <a href="#">Cookies</a>
                        <a href="#">Help</a>
                        <a href="#">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Footer End -->

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

 <script src="{{ asset('assets/frontend/js/counterup.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/easing.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/fontawesome.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/moment.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/moment-timezone.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/tempusdominus-bootstrap-4.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
 
<!-- framework - jquery include -->
<script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>

<!-- carousel - jquery plugins collection -->
<script src="{{asset('assets/frontend/js/jquery-plugins-collection.js')}}"></script>

<!-- custom - main-js -->
<script src="{{asset('assets/frontend/js/main.js')}}"></script>
    
</body> 
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/logo/favourite_icon_1.png')}}">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/frontend/css/bootstrap.min.css')}}">

    <!-- icon font - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/fontawesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/stroke-gap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/icofont.css')}}">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.css')}}">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css')}}">
</head>


<body>

    <!-- body_wrap - start -->
    <div class="body_wrap">

        <!-- backtotop - start -->
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- preloader - start -->
        {{-- <div id="preloader"></div>  --}}
        <!-- preloader - end -->

        <!-- header_section - start
        ================================================== -->
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
                                    <img src="{{ asset('assets/frontend/images/logo/logo_1x.png') }}" alt="logo_not_found">
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
                                       <li class="{{ request()->is('category/'.$categorie->slug.'*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('frontend.single.category.post', $categorie->slug) }}">{{ Str::ucfirst($categorie->name) }}</a></li>
                                       @endforeach
                                    </ul>
                                </div>
                            </nav>

                            <div class="offcanvas_overlay"></div>
                        </div>

                    </div>
                </div> 
            </div>
        </header>
        <!-- header_section - end
        ================================================== --> 
        <!-- main body - start
        ================================================== -->
        <main>
            @yield('content')
        </main>
        <!-- main body - end
        ================================================== -->

        <!-- footer_section - start
        ================================================== -->
        <footer class="footer_section">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_about">
                                <div class="brand_logo">
                                    <a class="brand_link" href="{{ route('frontend.index') }}">
                                        <img src="{{ asset('assets/frontend/images/logo/logo_1x.png') }}" alt="logo_not_found">
                                    </a>
                                </div>
                                <ul class="social_round ul_li">
                                    <li><a href="#!"><i class="icofont-youtube-play"></i></a></li>
                                    <li><a href="#!"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#!"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#!"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#!"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Quick Links</h3>
                                <ul class="ul_li_block">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="footer_widget footer_useful_links">
                                <h3 class="footer_widget_title text-uppercase">Custom area</h3>
                                <ul class="ul_li_block">
                                    <li><a href="#!">My Account</a></li>
                                    <li><a href="#!">Orders</a></li>
                                    <li><a href="#!">Tracking List</a></li>
                                    <li><a href="#!">Tearm</a></li>
                                    <li><a href="#!">Privacy Policy</a></li>
                                    <li><a href="#!">My Cart</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col col-lg-4 col-md-6 col-sm-6">
                            <div class="footer_widget footer_contact">
                                <h3 class="footer_widget_title text-uppercase">Contact Onfo</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                                <div class="hotline_wrap">
                                    <div class="footer_hotline">
                                        <div class="item_icon">
                                            <i class="icofont-headphone-alt"></i>
                                        </div>
                                        <div class="item_content">
                                            <h4 class="item_title">Have any question?</h4>
                                            <span class="hotline_number">+ 8802 5566 3001</span>
                                        </div>
                                    </div>
                                    <div class="livechat_btn clearfix">
                                        <a class="btn border_primary" href="#!">Live Chat</a>
                                    </div>
                                </div>
                                <ul class="store_btns_group ul_li">
                                    <li><a href="#!"><img src="{{ asset('assets/frontend/images/app_store.png') }}" alt="app_store"></a></li>
                                    
                                    <li><a href="#!"><img src="{{ asset('assets/frontend/images/play_store.png') }}" alt="play_store"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-md-6">
                            <p class="copyright_text">
                                ©2023 <a href="#!">stowaa</a>. All Rights Reserved.
                            </p>
                        </div>
                        
                        <div class="col col-md-6">
                            <div class="payment_method">
                                <h4>Payment:</h4>
                                <img src="{{ asset('assets/frontend/images/payments_icon.png') }}" alt="image_not_found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer_section - end
        ================================================== -->

    </div>
    <!-- body_wrap - end -->

    <!-- framework - jquery include -->
   <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
   <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
   <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>

    <!-- carousel - jquery plugins collection -->
   <script src="{{asset('assets/frontend/js/jquery-plugins-collection.js')}}"></script>

    <!-- custom - main-js -->
   <script src="{{asset('assets/frontend/js/main.js')}}"></script>
    
</body> 

<!-- Mirrored from products.wp-ts.com/stowaa/html/blog-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Sep 2022 06:54:11 GMT -->
</html>
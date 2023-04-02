<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	 <!-- CSRF Token -->
	 <meta name="csrf-token" content="{{ csrf_token() }}">
	 <title> @yield('title') - {{ config('app.name') }}</title>

	<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

	@yield('backend-css')

	<link href="{{ asset('assets/backend/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('assets/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>

</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
				<!--begin::Brand-->

		<div class="aside-logo flex-column-auto" id="kt_aside_logo">
			<!--begin::Logo-->
			<a href="{{ url('/') }}" target="_blank">
				<img alt="Logo" src="{{ asset('assets/backend/images/logo-default.png') }}" class="h-25px logo" />
			</a>
			<!--end::Logo-->
			<!--begin::Aside toggler-->
			<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
				<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-left.svg-->
				<span class="svg-icon svg-icon-1 rotate-180">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
								<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
						</g>
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Aside toggler-->
		</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid">
	<!--begin::Aside Menu-->
	<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
		<!--begin::Menu-->
		<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
			<div class="menu-item">
				<a class="menu-link active" href="{{ route('dashboard.home') }}">
				<span class="menu-icon">
					<span class="svg-icon svg-icon-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
							<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</span>

		<span class="menu-title">Dashboard</span>
		</a>
	</div>

	<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
		<span class="menu-link">
			<span class="menu-icon">
			<!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
			<span class="svg-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
					<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
				</svg>
			</span>
				<!--end::Svg Icon-->
			</span>

			<span class="menu-title">Post</span>
			<span class="menu-arrow"></span>
		</span>
			<div class="menu-sub menu-sub-accordion menu-active-bg">
				
				<div class="menu-item">
					<a class="menu-link" href="{{ route('dashboard.post.index') }}">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">All Post</span>
					</a>
				</div>

				<div class="menu-item">
					<a class="menu-link" href="{{ route('dashboard.post.create') }}">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Add Post</span>
					</a>
				</div>

				<div class="menu-item">
					<a class="menu-link" href="{{ route('dashboard.category.index') }}">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Categories</span>
					</a>
				</div>
			</div>
		</div>

	<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
		<span class="menu-link">
			<span class="menu-icon">
			<!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
			<span class="svg-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
					<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
				</svg>
			</span>
				<!--end::Svg Icon-->
			</span>

		<span class="menu-title">Pages</span>
		<span class="menu-arrow"></span>
	</span>
		<div class="menu-sub menu-sub-accordion menu-active-bg">
			<div class="menu-item">
				<a class="menu-link" href="#">
					<span class="menu-bullet">
						<span class="bullet bullet-dot"></span>
					</span>
					<span class="menu-title">Contact Us</span>
				</a>
			</div>

		</div>

</div>
</div>
	<!--end::Menu-->
</div>
</div>
<!--end::Aside menu-->
</div>
<!--end::Aside-->
<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
<!--begin::Header-->
<div id="kt_header" style="" class="header align-items-stretch">
	<!--begin::Container-->
	<div class="container-fluid d-flex align-items-stretch justify-content-between">

<!--begin::Mobile logo-->

<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
	<a href="index.html" class="d-lg-none">
		<img alt="Logo" src="{{ asset('assets/backend/images/logo-3.svg') }}" class="h-30px" />
	</a>
</div>

<!--end::Mobile logo-->

<!--begin::Wrapper-->
<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
	<!--begin::Navbar-->
	<div class="d-flex align-items-stretch" id="kt_header_nav">
		<!--begin::Menu wrapper-->
		<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">

			<!--begin::Menu-->
			<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
				<div class="menu-item me-lg-1">
					<a class="menu-link active py-3" href="#">
						<span class="menu-title">Dashboard</span>
					</a>
				</div>

			</div>
			<!--end::Menu-->
		</div>
		<!--end::Menu wrapper-->
	</div>
			<!--end::Navbar-->
				<!--begin::Topbar-->
<div class="d-flex align-items-stretch flex-shrink-0">
<!--begin::Toolbar wrapper-->
<div class="d-flex align-items-stretch flex-shrink-0">


<!--begin::User-->
<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
	<!--begin::Menu wrapper-->
	<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
		<img src="{{ asset('assets/backend/images/150-2.jpg') }}" alt="user" />
	</div>
	<!--begin::Menu-->
	<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
		<!--begin::Menu item-->
		<div class="menu-item px-3">
			<div class="menu-content d-flex align-items-center px-3">
				<!--begin::Avatar-->
				<div class="symbol symbol-50px me-5">
					<img alt="Logo" src="{{ asset('assets/backend/images/150-2.jpg') }}" />
				</div>
				<!--end::Avatar-->
				<!--begin::Username-->
				<div class="d-flex flex-column">
					<div class="fw-bolder d-flex align-items-center fs-5">{{ auth()->user()->name }}
					<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
					<a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a>
				</div>
				<!--end::Username-->
			</div>
		</div>
		<!--end::Menu item-->
		<!--begin::Menu separator-->
		<div class="separator my-2"></div>
		<!--end::Menu separator-->
<!--begin::Menu item-->
<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start" data-kt-menu-flip="bottom">
	<a href="#" class="menu-link px-5">
		<span class="menu-title">My Subscription</span>
		<span class="menu-arrow"></span>
	</a>
</div>
<!--end::Menu item-->
					
	<!--begin::Menu separator-->
	<div class="separator my-2"></div>
	<!--end::Menu separator-->

	<!--begin::Menu item-->
	<div class="menu-item px-5 my-1">
		<a href="account/settings.html" class="menu-link px-5">Account Settings</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
		<a href="{{ route('logout') }}" class="menu-link px-5"  onclick="event.preventDefault();
		document.getElementById('logout-form').submit();">Sign Out</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
			@csrf
		</form>
	</div>
	<!--end::Menu item-->
</div>
<!--end::Menu-->
</div>
<!--end::User -->
</div>
	<!--end::Toolbar wrapper-->
</div>
<!--end::Topbar-->
</div>
	<!--end::Wrapper-->
</div>
	<!--end::Container-->
</div>
<!--end::Header-->
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

	
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container">
			<!--begin::Row-->
			
			@yield('content')

		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->
</div>
	<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Activities drawer-->
<div id="kt_activities" class="bg-white" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
<div class="card shadow-none">

		<!--begin::Scrolltop-->
	<script src="{{ asset('assets/backend/js/plugins.bundle.js') }}"></script>
	<script src="{{ asset('assets/backend/js/scripts.bundle.js') }}"></script>
	
	@yield('backend-js')
	
	</body>
	<!--end::Body-->
	</html>
				
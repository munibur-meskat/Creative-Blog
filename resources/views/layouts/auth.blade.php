<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<title>{{ config('app.name') }} - @yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		 <!-- CSRF Token -->
		 <meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}" />
		<!--begin::Fonts-->
		{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> --}}
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<!--end::Fonts-->

		<link href="{{ asset('assets/backend/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
	</head>
	<body id="kt_body" class="bg-white">
		
        @yield('content')

		<script src="{{ asset('assets/backend/js/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/backend/js/scripts.bundle.js') }}"></script>
		<script src="{{ asset('assets/backend/js/general.js') }}"></script>
		<script src="{{ asset('assets/backend/js/password-reset.js') }}"></script>
	</body>
</html>
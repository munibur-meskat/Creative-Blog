@extends('layouts.auth')
@section('title', 'Sign Up')

@section('content')

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
            <!--begin::Wrapper-->
        <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                <!--begin::Content-->
        <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
            <!--begin::Logo-->
        <a href="index.html" class="py-9">
            <img alt="Logo" src="{{ asset('assets/backend/images/logo-3.svg') }}" class="h-70px"/>
        </a>
        <!--end::Logo-->
        <!--begin::Title-->
        <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to {{ config('app.name') }}</h1>
        <!--end::Title-->
        <!--begin::Description-->
        <p class="fw-bold fs-2" style="color: #986923;">Discover Amazing {{ config('app.name') }}
        <br />with great build tools</p>
            <!--end::Description-->
        </div>
        <!--end::Content-->
        <!--begin::Illustration-->
        <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url({{ asset('assets/backend/images/coding.png') }})"></div>
                <!--end::Illustration-->
    </div>
    <!--end::Wrapper-->
</div>
    <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <!--begin::Content-->
<div class="d-flex flex-center flex-column flex-column-fluid">
    <!--begin::Wrapper-->
    <div class="w-lg-600px p-10 p-lg-15 mx-auto">
        <!--begin::Form-->
        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="POST" action="{{ route('register') }}">
            @csrf
            
            <!--begin::Heading-->
    <div class="mb-10 text-center">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">Create an Account</h1>
        <div class="text-gray-400 fw-bold fs-4">Already have an account?
        <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a>
        </div>
        <!--end::Link-->
    </div>
    <a href="{{ route('google.redirect') }}" class="btn btn-light-primary fw-bolder w-100 mb-10">
    <img alt="Logo" src="{{ asset('assets/backend/images/google-icon.svg') }}" class="h-20px me-3" />Sign in with Google</a>
    <!--end::Action-->
    <!--begin::Separator-->
    <div class="d-flex align-items-center mb-10">
        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
        <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
    </div> 
    <!--end::Separator-->
    <!--begin::Input group-->
    <div class="row fv-row mb-7">
        <!--begin::Col-->
        <div class="col-xl-12">
            <label class="form-label fw-bolder text-dark fs-6">Name</label>
            <input id="name" class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" type="text" placeholder="" name="name" value="{{ old('name') }}" autocomplete="off" />

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
      
        <!--end::Col-->
    </div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="fv-row mb-7">
    <label class="form-label fw-bolder text-dark fs-6">Email</label>
    <input class="form-control form-control-lg form-control-solid  @error('email') is-invalid @enderror" type="email" placeholder="" name="email" value="{{ old('email') }}" autocomplete="off" />

    @error('email')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="mb-10 fv-row" data-kt-password-meter="true">
    <!--begin::Wrapper-->
    <div class="mb-1">
        <!--begin::Label-->
        <label class="form-label fw-bolder text-dark fs-6">Password</label>

        <div class="position-relative mb-3">
            <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password" placeholder="" name="password" autocomplete="off" required/>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                <i class="bi bi-eye-slash fs-2"></i>
                <i class="bi bi-eye fs-2 d-none"></i>
            </span>
        </div>
        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
        </div>
        <!--end::Meter-->
    </div>
    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
    <!--end::Hint-->
</div>
<div class="fv-row mb-5">
    <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_confirmation" autocomplete="off" required/>
</div>
    <div class="fv-row mb-10">
        <label class="form-check form-check-custom form-check-solid form-check-inline">
            <input class="form-check-input" type="checkbox" name="toc" value="1" />
            <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
            <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
        </label>
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-lg btn-primary">
        <span class="indicator-label">Submit</span>
        <span class="indicator-progress">Please wait...
        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
    </button>
    </div>
    <!--end::Actions-->
    </form>
    <!--end::Form-->
    </div>
    <!--end::Wrapper-->
  </div>
<!--end::Content-->
</div>
<!--end::Body-->
</div>
<!--end::Authentication - Sign-up-->
</div>

@endsection
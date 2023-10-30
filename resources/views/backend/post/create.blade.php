@extends('layouts.backend')
@section('title', 'Add Post')

@section('content')

<section>
    <div class="row justify-content-center">
        <div class="col-lg-9 ">

        <div class="bg-white rounded shadow-sm p-10 p-lg-15 ">
            
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

    <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('dashboard.post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-13 text-center">
            <!--begin::Title-->
            <h1 class="mb-3">Add Post</h1>
            <!--end::Title-->
        </div>
        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Title Name</span>

            </label>
            <input type="text" class="form-control form-control-solid" placeholder="Title Name" name="title" value="{{ old('title') }}">
        <div class="fv-plugins-message-container invalid-feedback"></div>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

        <div class="row g-9 mb-8">
            <div class="col-md-12 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-bold mb-2">Category</label>
                <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" name="category[]" multiple>
                    <option disabled>Select Category</option>
                     @foreach ($categories as $category)
                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                     @endforeach
                </select>
                @error('category')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> 
            
        </div>

        <div class="row g-9 mb-8">
            <div class="col-md-12 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-bold mb-2">Status</label>
                <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" name="status">
                    <option disabled selected >Select Status</option>
                    <option value="publish" >Publish</option>
                    <option value="draft" >Draft</option>
                </select>
            </div> 
        </div>

        <div class="d-flex flex-column mb-8">
            <label class="fs-6 fw-bold mb-2">Content</label> 
            <textarea class="form-control form-control-solid summernote" rows="10" name="content" placeholder="Write Content">{{ old('content') }}</textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span>Image</span>
            </label>
            <input type="file" class="form-control form-control-solid mb-3" name="thumbnail">
           
            <div class="text-info mb-5">Image size 870*550</div>
            @error('thumbnail')
                <div class="text-danger">{{ $message }}</div>
            @enderror
    </div>

        <div class="text-center">
            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                <span class="indicator-label">Create Post</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
       
    <div></div>
</form>
    <!--end:Form-->

    </div>
</div>

</div>
</section>
@endsection

@section('backend-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">

@endsection

@section('backend-js')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>

    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['view', ['codeview']]
            ]
        });
        });

  </script>
@endsection

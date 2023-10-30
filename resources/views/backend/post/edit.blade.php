@extends('layouts.backend')
@section('title', 'Edit Post')

@section('content')

<section>
    <div class="row justify-content-center">
    <div class="col-lg-10 ">
    <div class="bg-white rounded shadow-sm p-10 p-lg-15 ">

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        
    <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('dashboard.post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-13 text-center">
            <h1 class="mb-3">Edit Post</h1>
        </div>

        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Title Name</span>

            </label>
            <input type="text" class="form-control form-control-solid" placeholder="Title Name" name="title" value="{{ $post->title }}">
            @error('title')
            <div class="text-danger mb-5">{{ $message }}</div>
            @enderror
        </div>

        <div class="row g-9 mb-8">
            <div class="col-md-12 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-bold mb-2">Post Category</label>
                <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2"  name="category[]" multiple>
                    <option disabled >Select Category</option>
                     @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ in_array($category->id, $post->categories->pluck('id')->toArray()) ? 'selected' : '' }} >{{ $category->name }}</option>
                    @endforeach
                    </option>
                </select>
            </div> 
            
        </div>

        <div class="row g-9 mb-8">
            <div class="col-md-12 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-bold mb-2">Status</label>
                <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" name="status">
                    <option disabled selected >Select Status</option>

                    <option value="publish" {{ $post->status == 'publish' ? 'selected': '' }}>Publish</option>
                    <option value="draft" {{ $post->status == 'draft' ? 'selected': '' }}>Draft</option>
                     
                </select>
            </div> 
        </div>

        <div class="d-flex flex-column mb-8">
            <label class="fs-6 fw-bold mb-2">Content</label> 
            <textarea class="form-control form-control-solid summernote" rows="10" name="content" >{{ $post->content }}</textarea>

            @error('content')
            <div class="text-danger mb-5">{{ $message }}</div>
            @enderror

        </div>

        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span>Image</span>
            </label>
            <input type="file" class="form-control form-control-solid mb-3" name="thumbnail">
            <div class="text-danger">Image size 870*550</div>
            @error('thumbnail')
            <div class="text-danger mb-5">{{ $message }}</div>
            @enderror
            <img class="mt-3" width="150" src="{{ asset('storage/uploads/posts/'.$post->thumbnail) }}" alt="{{ $post->title }}">
        </div>

        <div class="text-center">
            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                <span class="indicator-label">Update Post</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>

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
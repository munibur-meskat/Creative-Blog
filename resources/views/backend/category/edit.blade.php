@extends('layouts.backend')
@section('title', ' Edit Categories')

@section('content')

<section>
    <div class="row justify-content-center">
        <div class="col-lg-6 ">

        <div class="bg-white rounded shadow-sm p-10 p-lg-15 ">
            
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

    <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('dashboard.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-13 text-center">
            <!--begin::Title-->
            <h1 class="mb-3">Edit Category</h1>
            <!--end::Title-->
        </div>
        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Category Name</span>

            </label>
            <input type="text" class="form-control form-control-solid" placeholder="Category Name" name="name" value="{{ $category->name }}">
        <div class="fv-plugins-message-container invalid-feedback"></div>
    </div>

        <div class="row g-9 mb-8">
            <div class="col-md-12 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-bold mb-2">Parent Category</label>
                <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" name="parent_id">
                    <option disabled selected >Select Parent Category</option>
                    @foreach ($categories as $singlecategory)
                    <option value="{{ $singlecategory->id }}" {{ ($category->parentCategory->name ?? "") == $singlecategory->name ? "selected" : "" }}>{{ $singlecategory->name }}</option>
                    @endforeach
                </select>
            </div> 
        </div>
        <div class="d-flex flex-column mb-8">
            <label class="fs-6 fw-bold mb-2">Description</label>
            <textarea class="form-control form-control-solid" rows="3" name="description" placeholder="Write Description">{{ $category->description }}</textarea>
        </div>

        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span>Category Image</span>
            </label>
            <input type="file" class="form-control form-control-solid mb-3" name="image">
            <div class="text-danger">Image size 300*300</div>
            <img class="mt-3" width="150" src="{{ asset('storage/uploads/categories/'.$category->image) }}" alt="{{ $category->name }}">
        </div>

        <div class="text-center">
            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                <span class="indicator-label">Update</span>
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
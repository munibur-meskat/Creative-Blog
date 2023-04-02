@extends('layouts.backend')
@section('title', 'Categories')

@section('content')

<section>
    <div class="row">
        <div class="col-lg-4">

        <div class="bg-white rounded shadow-sm p-10 p-lg-15 ">
            
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

    <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('dashboard.category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-13 text-center">
            <!--begin::Title-->
            <h1 class="mb-3">Add Category</h1>
            <!--end::Title-->
        </div>
        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">Category Name</span>

            </label>
            <input type="text" class="form-control form-control-solid" placeholder="Category Name" name="name">
        <div class="fv-plugins-message-container invalid-feedback"></div>
        @error('name')
            <div class="text-danger mb-5">{{ $message }}</div>
        @enderror
    </div>

        <div class="row g-9 mb-8">
            <div class="col-md-12 fv-row fv-plugins-icon-container">
                <label class="fs-6 fw-bold mb-2">Parent Category</label>
                <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" name="parent_id">
                    <option disabled selected >Select Parent Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    
                </select>

            </div> 
            
        </div>
        <div class="d-flex flex-column mb-8">
            <label class="fs-6 fw-bold mb-2">Description</label>
            <textarea class="form-control form-control-solid" rows="3" name="description" placeholder="Write Description"></textarea>
            @error('description')
            <div class="text-danger mb-5">{{ $message }}</div>
        @enderror
        </div>

        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span>Category Image</span>
            </label>
            <input type="file" class="form-control form-control-solid mb-3" name="image">
            <div class="text-info mb-5">Image size 300*300</div>
            @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

        <div class="text-center">
            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
       
    <div></div>
</form>
    <!--end:Form-->

    </div>
</div>

<div class="col-lg-8">

<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
<div class="card-header border-0 pt-5">
    <h3 class="card-title align-items-start flex-column">
        <span class="card-label fw-bolder fs-3 mb-1">All Categories</span>
    </h3>
</div>
    <!--end::Header-->
    <!--begin::Body-->
<div class="card-body py-3">
    <!--begin::Table container-->
    <div class="table-responsive">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button">Active</button>
                    </li>

                    @hasrole(['super-admin|admin'])
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button">Trash</button>
                    </li>
                    @endhasrole
                    
                  </ul>
            <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="home-tab-pane">
                               <!--begin::Table-->
        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
            <!--begin::Table head-->
    <thead>
        <tr class="fw-bolder text-muted">
            <th class="w-25px">
                <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check">
                </div>
            </th>
            <th>Image</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Post Count</th>
            <th class="text-center">Actions</th>
        </tr>
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody>
        @forelse ($categories as $category)
        <tr>
            <td>
            <div class="form-check form-check-sm form-check-custom form-check-solid">
                <input class="form-check-input widget-9-check" type="checkbox" value="{{ $category->id }}">
            </div>
            </td>
            <td>
            <div class="symbol symbol-45px me-5">
                <img src="{{ asset('storage/uploads/categories/'.$category->image) }}" alt="{{ $category->name }}">
            </div>
            </td>
            <td>
                <strong>{{ $category->name }}</strong>
            </td>
            <td>
                <strong>{{ $category->slug }}</strong>
            </td>
            <td>
                <strong>{{ $category->posts_count }}</strong>
            </td>
            <td>
                <a href="{{ route('dashboard.category.show', $category->id) }}" class="badge badge-light-success">View</a>
                <a href="{{ route('dashboard.category.edit', $category->id) }}" class="badge badge-light-info">Edit</a>

                <form action="{{ route('dashboard.category.destroy', $category->id) }}" method="POST" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="badge badge-light-danger border-0">Delete</button>
            </form>

            </td>
        </tr>  
        @empty
        <tr>
            <td colspan="5">No Categories</td>
        </tr>
        @endforelse
    </tbody>
</table>   
</div>
 
    @hasrole(['super-admin|admin'])
    
    <div class="tab-pane fade" id="profile-tab-pane">
        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
            <!--begin::Table head-->
            <thead>
                <tr class="fw-bolder text-muted">
                    <th class="w-25px">
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check">
                        </div>
                    </th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <!--begin::Table body-->
                <tbody>
        @forelse ($trashCategories as $category)
        <tr>
            <td>
            <div class="form-check form-check-sm form-check-custom form-check-solid">
                <input class="form-check-input widget-9-check" type="checkbox" value="{{ $category->id }}">
            </div>
            </td>
            <td>
            <div class="symbol symbol-45px me-5">
                <img src="{{ asset('storage/uploads/categories/'.$category->image) }}" alt="{{ $category->name }}">
            </div>
            </td>
            <td>
                <strong>{{ $category->name }}</strong>
            </td>
            <td>
                <strong>{{ $category->slug }}</strong>
            </td>
            <td>
                <a href="{{ route('dashboard.category.restore', $category->id) }}" class="badge badge-light-success">Restore</a>
                <a href="{{ route('dashboard.category.hard.delete', $category->id) }}" class="badge badge-light-danger">Hard Delete</a>
            </td>
        </tr>  
        @empty
        <tr>
            <td colspan="5">No Categories</td>
        </tr>
        @endforelse
    </tbody>

</table>       
</div>
   @endhasrole

</div>

  <!--end::Table-->
    </div>
</div>
    <!--begin::Body-->
</div>
</div>
</div>
</section>

@endsection
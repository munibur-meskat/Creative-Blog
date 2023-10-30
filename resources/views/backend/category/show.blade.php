@extends('layouts.backend')
@section('title', 'Show Categories')

@section('content')

<section>
    <div class="row justify-content-center">
        <div class="col-lg-8 ">

        <div class="bg-white rounded shadow-sm p-10 p-lg-15 ">
            
            <div class="mb-13 text-center">
                <!--begin::Title-->
                <h1 class="mb-3" style="font-size: 25px; font-weight:800; color: #eb0276">View Category</h1>
                <!--end::Title-->
            </div>

           <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle gs-0 gy-4">
                    <tr class="table-success">
                        <td style="padding-left:10px; font-size: 16px; font-weight:500">Category Name</td>
                        <td style="font-size: 16px; font-weight:500">:</td>
                        <td style="font-size: 16px; font-weight:600; color:coral">{{ $category->name }}</td>
                    </tr>
                    <tr class="table-warning">
                        <td style="padding-left:10px; font-size: 16px; font-weight:500">Parent Category</td>
                        <td style="font-size: 16px; font-weight:500">:</td>
                        <td style="font-size: 16px; font-weight:600; color:rgba(6, 148, 6, 0.945)">
                                {{ $category->parentCategory->name ?? 'Null' }}
                        </td>
                    </tr>
                    <tr class="table-primary">
                        <td style="padding-left:10px; font-size: 16px; font-weight:500">Description</td>
                        <td style="font-size: 16px; font-weight:500">:</td>
                        <td style="font-size: 16px; font-weight:600; color:coral">{{ $category->description }}</td>
                    </tr>
                    <tr>
                        <td style="padding-left:10px; font-size: 16px; font-weight:500">Image</td>
                        <td style="font-size: 16px; font-weight:500">:</td>
                        <td>
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <img class="rounded" width="150" src="{{ asset('storage/uploads/categories/'.$category->image) }}" alt="{{ $category->name }}" >
                            </div>
                        </td>
                    </tr>
                </table> 
               </div>
           </div>
    <!--end:Form-->

    </div>
</div>

</div>
</section>

@endsection
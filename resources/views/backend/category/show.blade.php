@extends('layouts.backend')
@section('title', 'Categories')

@section('content')

<section>
    <div class="row justify-content-center">
        <div class="col-lg-8 ">

        <div class="bg-white rounded shadow-sm p-10 p-lg-15 ">
            
            <div class="mb-13 text-center">
                <!--begin::Title-->
                <h1 class="mb-3">{{ $category->name }}</h1>
                <!--end::Title-->
            </div>

            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
               <table class="table">
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <td>Slug</td>
                    <td>:</td>
                    <td>{{ $category->slug }}</td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>:</td>
                    <td>{{ $category->image }}</td>
                </tr>
               </table>
    </table> 
    <!--end:Form-->

    </div>
</div>

</div>
</section>

@endsection
@extends('layouts.backend')
@section('title', 'All Post')

@section('content')

        @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
        @endif

        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
        <thead>
            <tr class="fw-bolder text-muted">
                <th>Id</th>
                <th>Image</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Category</th>
                <th>Create Time</th>
                <th>Status</th>
                <th>
                <h5 class="ml-3 inline-block">Actions</h5>
                </th>
                
            </tr>
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody>
            @forelse ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>
                <div class="symbol symbol-45px me-5">
                    <img src="{{ asset('storage/uploads/posts/'.$post->thumbnail) }}" alt="{{ $post->title }}">
                </div>
                </td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>
                @foreach ($post->categories as $category)
                    <span class="badge bg-info text-white">{{ $category->name }}</span>
                @endforeach
                </td>
                <td>{{ $post->created_at->diffForHumans() }}</td>
                <td>{{ $post->status }}</td>
                <td>
                    <a href="#" class="badge badge-light-success">View</a>
                    <a href="#" class="badge badge-light-info">Edit</a>
                    <a href="#" class="badge badge-light-danger">Delete</a>
                
                </td>
            </tr>  
            @empty

            @endforelse
        </tbody>
    </table>

@endsection
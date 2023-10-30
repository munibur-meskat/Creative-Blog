@extends('layouts.backend')
@section('title', 'All Post')

@section('content')

       <div class="row">
        <div class="col-lg-12">
            <div class="card mb-5 mb-xl-8">

                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif

                <div class="card-header py-5 text-center d-inline">
                    <h3 style="font-size: 30px; font-weight:700; color: #eb0276">All Post</h3>
                </div>
                <div class="card-body py-3">
        
                    <div class="table-responsive">
                        <table class="table align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bolder text-muted">
                            <th class="min-w-50px">Id</th>
                            <th class="min-w-150px">Image</th>
                            <th class="min-w-250px">Title</th>
                            {{-- <th class="w-100px">Slug</th> --}}
                            <th class="min-w-250px">Category</th>
                            <th class="min-w-150px">Create Time</th>
                            <th class="min-w-120px">Status</th>
                            <th class="min-w-200px text-center" style="padding-left: 50px">Actions</th>
                            
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
                            {{-- <td>{{ $post->slug }}</td> --}}
                            <td>
                            @foreach ($post->categories as $category)
                                <span class="badge bg-info text-white ">{{ $category->name }}</span>
                            @endforeach
                            </td>
                            <td>{{ $post->created_at->diffForHumans() }}</td>
                            <td>{{ $post->status }}</td>
                            <td class="text-end">
                                <a href="#" class="badge badge-light-success">View</a>
                                <a href="{{ route('dashboard.post.edit', $post->id) }}" class="badge badge-light-info">Edit</a>
                                <a href="#" class="badge badge-light-danger">Delete</a>
                            
                            </td>
                        </tr>  
                        @empty
                        <tr>
                            <td colspan="5">
                                <h3>No Post is here.</h3>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                    </div>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
       </div>

@endsection
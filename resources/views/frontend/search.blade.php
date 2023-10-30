@extends('layouts.frontend')

@section('title','Home')

@section('content')
<main>

    <!-- breadcrumb_section - start -->
    <div class="breadcrumb_section">
        <div class="container">
            <ul class="breadcrumb_nav ul_li">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>{{ request('search') }}</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end -->
    <!-- blog_section - start -->
    <section class="blog-pg-section section_space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-3">Search By:{{ request('search') }}</h2>
                </div>

                @forelse ($searchResult as $post)   
                <div class="col col-lg-4 content">
                    <div class="blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="{{ asset('storage/uploads/posts/'. $post->thumbnail) }}" alt="{{ $post->title }}">

                                @foreach ($post->categories as $category)
                                <button>{{ $category->name }}</button>
                                @endforeach
                            </div>
                            <div class="entry-details">
                                <div class="author">By: <a href="#">{{ $post->user->name }}</a></div>
                                <h3><a href="{{ route('frontend.single.post',[ 'catslug'=> $post->categories->pluck('slug')->first(), 'slug'=>$post->slug ] ) }}">{{ $post->title }}</a></h3>
                                <div class="entry-meta">
                                    <ul>
                                        <li><a href="#">{{ $post->created_at->format('D M Y') }}</a></li>
                                    </ul>
                                </div>
                                <p>{{ Str::limit($post->content, 150, '...') }}</p>
                                <a href="{{ route('frontend.single.post',[ 'catslug'=> $post->categories->pluck('slug')->first(), 'slug'=>$post->slug ] ) }}" class="read-more">Read More <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                <div class="col col-lg-12 content">
                    <div class="blog-content">
                        <div class="post format-standard-image">
                           <div class="alert alert-warning">
                            <h5 class="text-center text-danger fw-bold">{{ __("No data Found !") }}</h5>
                          </div>
                        </div>
                    </div>
                </div>
                    @endforelse
                       
                        {{-- {{ $categoryPost->posts->links() }} --}}
                   
            </div>
        </div> <!-- end container -->

    </section>

    <!-- blog_section - end -->
</main>
@endsection
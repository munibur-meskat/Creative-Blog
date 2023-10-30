@extends('layouts.frontend')

@section('title','Home')

@section('content')
<main>

    <!-- breadcrumb_section - start -->
    <div class="breadcrumb_section">
        <div class="container">
            <ul class="breadcrumb_nav ul_li">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>All Blog</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end -->
    <!-- blog_section - start -->

    <!-- start blog-pg-section -->
    <section class="blog-pg-section section_space">
        <div class="container">
            <div class="row">
                <!-- Left Sides Start -->
                <div class="col col-lg-8 col-md-12 content">
                    <div class="blog-content">
                        @foreach ($posts as $post)

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
                                
                                <p>{!! Str::limit($post->content, 200, '...') !!}</p>
                                
                                <a href="{{ route('frontend.single.post',[ 'catslug'=> $post->categories->pluck('slug')->first(), 'slug'=>$post->slug ] ) }}" class="read-more">Read More <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                        @endforeach
                       
                        {{ $posts->links() }}

                        <div class="pagination-wrapper pagination-wrapper-left">
                            <ul class="pg-pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="fal fa-long-arrow-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                   <a href="#" aria-label="Next">
                                       <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- Left Sides End -->
                <!-- Right Sides Start -->

                @include('frontend.sidebar')
                
                <!-- Right Sides End -->
            </div>
        </div>
         <!-- end container -->
    </section>
    <!-- end blog-pg-section --> 

    <!-- blog_section - end -->

    <!-- newsletter_section - start -->
    <section class="newsletter_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-lg-6">
                    <h2 class="newsletter_title text-white">Sign Up for Newsletter </h2>
                    <p>Get E-mail updates about our latest products and special offers.</p>
                </div>
                <div class="col col-lg-6">
                    <form action="#!">
                        <div class="newsletter_form">
                            <input type="email" name="email" placeholder="Enter your email address">
                            <button type="submit" class="btn btn_secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter_section - end -->

</main>
@endsection
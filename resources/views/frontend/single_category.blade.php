@extends('layouts.frontend')

@section('title','Home')

@section('content')
<main>

    <!-- breadcrumb_section - start -->
    <div class="breadcrumb_section">
        <div class="container">
            <ul class="breadcrumb_nav ul_li">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>{{ $categoryPost->name }}</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end -->
    <!-- blog_section - start -->
    <section class="blog-pg-section section_space">
        <div class="container">
            <div class="row">
                
                        @foreach ($categoryPost->posts as $post)
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
                                
                                <p>{!! Str::limit($post->content, 150, '...') !!}</p>
                                
                                <a href="{{ route('frontend.single.post',[ 'catslug'=> $post->categories->pluck('slug')->first(), 'slug'=>$post->slug ] ) }}" class="read-more">Read More <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                        @endforeach
                       
                        {{-- {{ $categoryPost->posts->links() }} --}}

                                   
            </div>
        </div> 
        <!-- end container -->
    </section>

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
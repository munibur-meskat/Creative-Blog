@extends('layouts.frontend')
@section('title','Home')

@section('content')
<main>

    <!-- breadcrumb_section - start -->
    <div class="breadcrumb_section">
        <div class="container">
            <ul class="breadcrumb_nav ul_li">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li><a href="{{ route('frontend.single.category.post', $post->categories->pluck('name')->first()) }}">{{ $post->categories->pluck('name')->first() }}</a></li>
                <li>{{ $post->title }}</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end -->

    <!-- start blog-single-section -->
    <section class="blog-single-section section_space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 content">
                    <div class="blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="{{ asset('storage/uploads/posts/'.$post->thumbnail) }}" alt="{{ $post->title }}">

                                @foreach ($post->categories as $category)
                                <button>{{ $category->name }}</button>
                                @endforeach
                            </div>
                            <div class="entry-details">
                                <div class="author">By: <a href="#">{{ $post->user->name }}</a></div>
                                <h2>{{ $post->title }}</h2>
                                <div class="entry-meta">
                                    <ul>
                                        <li><a href="#">{{ $post->created_at->format('D M Y') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                           {!! $post->content !!}
                        </div>

                        <div class="share">
                            <i class="fas fa-share-alt-square"></i>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Pinterest</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </div>

                        <div class="author-box">
                            <div class="author-avatar">
                                <a href="#" target="_blank"><img src="assets/images/blog-details/author.jpg" alt=""></a>
                            </div>
                            <div class="author-content">
                                <a href="#" class="author-name">Author: Vhone</a>
                                <p>Pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. What's happened to me he thought it wasn't a dream. His room, a proper human room although</p>
                                <div class="socials">
                                    <ul class="social-link">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end author-box -->

                        <div class="more-posts">
                            <div class="previous-post">
                                <a href="#">
                                    <span class="post-control-link">Previous Post</span>
                                    <h4>His room, a proper human</h4>
                                </a>
                            </div>
                            <div class="next-post">
                                <a href="0.html">
                                    <span class="post-control-link">Next Post</span>
                                    <h4>Waved about helplessly as he looked</h4>
                                </a>
                            </div>
                        </div>

                        <div class="comments-area">
                            <div class="comments-section">
                                <h3 class="comments-title">3 Comments</h3>
                                <ol class="comments">
                                    <li class="comment even thread-even depth-1" id="comment-1">
                                        <div id="div-comment-1">
                                            <div class="comment-theme">
                                                <div class="comment-image"><img src="assets/images/blog-details/comments-author/img-1.jpg" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Diler <span class="comments-date">Sep 25, 2021 at 3.00PM</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>Samsa was a travelling salesman above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame it showed a lady fitted</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment">
                                                <div>
                                                    <div class="comment-theme">
                                                        <div class="comment-image"><img src="assets/images/blog-details/comments-author/img-2.jpg" alt=""></div>
                                                    </div>
                                                    <div class="comment-main-area">
                                                        <div class="comment-wrapper">
                                                            <div class="comments-meta">
                                                                <h4>Jango <span class="comments-date">Sep 25, 2021 at 3.00PM</span></h4>
                                                            </div>
                                                            <div class="comment-area">
                                                                <p>Samsa was a travelling salesman above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame it showed a lady fitted</p>
                                                                <div class="comments-reply">
                                                                    <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="comment">
                                                        <div>
                                                            <div class="comment-theme">
                                                                <div class="comment-image"><img src="assets/images/blog-details/comments-author/img-3.jpg" alt=""></div>
                                                            </div>
                                                            <div class="comment-main-area">
                                                                <div class="comment-wrapper">
                                                                    <div class="comments-meta">
                                                                        <h4>Biller <span class="comments-date">Sep 25, 2021 at 3.00PM</span></h4>
                                                                    </div>
                                                                    <div class="comment-area">
                                                                        <p>Samsa was a travelling salesman above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame it showed a lady fitted</p>
                                                                        <div class="comments-reply">
                                                                            <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="comment">
                                        <div>
                                            <div class="comment-theme">
                                                <div class="comment-image"><img src="assets/images/blog-details/comments-author/img-1.jpg" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Alan doila <span class="comments-date">Sep 25, 2021 at 3.00PM</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>Samsa was a travelling salesman above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame it showed a lady fitted</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div> <!-- end comments-section -->

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave your thought</h3>
                                <form method="post" id="commentform" class="comment-form">
                                    <div class="form-textarea">
                                        <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                                    </div>
                                    <div class="form-inputs">
                                        <input placeholder="Website" type="url">
                                        <input placeholder="Name" type="text">
                                        <input placeholder="Email" type="email">
                                    </div>
                                    <div class="form-submit">
                                        <input id="submit" value="Post Comment" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                         <!-- end comments-area -->
                    </div>                        
                </div>
                @include('frontend.sidebar')
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-single-section -->

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
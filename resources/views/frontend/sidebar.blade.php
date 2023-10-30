<div class="col col-lg-4">
    <div class="blog-sidebar-s2">
        <div class="widget search-widget">
            <h3>Search</h3>
            <form action="{{ route('frontend.search.post.submit') }}" method="get">
                <div>
                    <input type="text" name="search" class="form-control" placeholder="Search Post..">
                    <button type="submit"><i class="ti-search"></i></button>
                </div>
            </form>
        </div>

        <div class="widget recent-post-widget">
            <h3>Recent post</h3>
            <div class="posts">
                @foreach ($recentPosts as $recentPost)
                <div class="post">
                    <div class="img-holder">
                        <img src="{{ asset('storage/uploads/posts/'. $recentPost->thumbnail) }}" alt="{{ $recentPost->title }}">
                    </div>
                    <div class="details">
                        <span class="date">{{ $post->created_at->format('d M Y') }}</span>
                        <h4><a href="#">{{ $recentPost->title }}</a></h4>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <div class="widget add-widget sidebar">
            <h3>Categories</h3>
            <div>
                <ul>
                    @foreach ($categories as $categorie)
                        <li class=""><a href="#">{{ $categorie->name }} <span>{{ $categorie->posts_count }}</span></a></li>
                    @endforeach
                </ul>
            </div>
        </div> 

        <div class="widget tag-widget tag">
            <h3>Tags</h3>
            <ul>
                <li><a href="#">National</a></li>
                <li><a href="{{ route('frontend.single.category.post', $categorie->slug) }}">Cricket</a></li>
                <li><a href="#">Football</a></li>
                <li><a href="#">International</a></li>
                <li><a href="#">Youth</a></li>
                <li><a href="#">Technology</a></li>
            </ul>
        </div>
    </div>
</div>
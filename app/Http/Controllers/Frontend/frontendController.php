<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class frontendController extends Controller {
    public function index(){
        $posts = Post::with(['user', 'categories'])->where('status', 'publish')->select('id', 'title', 'user_id', 'thumbnail', 'slug', 'content', 'created_at')->orderBy('created_at', 'DESC')->paginate(3);

        $recentPosts = Post::with(['user', 'categories'])->where('status', 'publish')->select('id', 'title', 'user_id', 'thumbnail', 'slug', 'content', 'created_at')->orderBy('created_at', 'DESC')->limit(3)->get();

        $categories = Category::withCount('posts')->where('deleted_at', null)->get();

        return view('frontend.index', compact('posts', 'categories', 'recentPosts'));
    }

    public function singleCategoryPost($slug){

        $categoryPost = Category::with('posts')->where('slug', $slug)->where('status', true)->firstOrFail();

        return view('frontend.single_category', compact('categoryPost'));
    }
    
    public function singlePost($catslug, $slug){
        $post = Post::with('categories')->where('slug', $slug)->firstOrFail();
        $recentPosts = Post::with(['user', 'categories'])->where('status', 'publish')->select('id', 'title', 'user_id', 'thumbnail', 'slug', 'content', 'created_at')->orderBy('created_at', 'DESC')->limit(5)->get();

        $categories = Category::withCount('posts')->where('deleted_at', null)->get();
        return view('frontend.single', compact('post','recentPosts','categories'));
    }

    public function searchPost(Request $request){

        $searchResult = Post::where('title', 'LIKE', "%$request->search%")->orWhere('content', 'LIKE', "%$request->search%")->get();

        return view('frontend.search', compact('searchResult'));
    }
}

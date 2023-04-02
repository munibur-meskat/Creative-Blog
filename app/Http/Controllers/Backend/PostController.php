<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Post::with(['categories' => function($q){
            $q ->where('status', true)->select('name');
        }])->orderBy('id','desc')->get();
        return view('backend.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::select('id', 'name')->get();
        return view('backend.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $image = $request->file('thumbnail');
        $request->validate([
                "title"     => "required",
                "category"  => "required",
                "content"   => "max:2000|required",
                "thumbnail" => "image|mimes:jpg,png,jpeg,webp|max:1000|required",
            ]);
            $image_name = null;
        if($image){

            $image_name = Str::slug(strtolower($request->title)) . '.' .
            $image->getClientOriginalExtension();

            Image::make($image)->crop(870,550)->save(public_path('storage/uploads/posts/') . $image_name, 90);

            // $resize_image->move(public_path('storage/uploads/categories/'), $image_name);
        }

        $insert               = new Post();
        $insert->title        = $request->title;
        $insert->slug         = Str::slug($request->title);
        $insert->content      = $request->content;
        $insert->user_id      = Auth::user()->id;
        $insert->status       = $request->status;
        $insert->thumbnail    = $image_name;
        $insert->save();

        $insert ->categories()->attach($request->category);

        return redirect(route('dashboard.post.index'))->with('message', 'Post Insert Successfull!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post) {

        $image = $request->file('thumbnail');
        $request->validate([
                "title"     => "required",
                "category"  => "required",
                "content"   => "max:2000|required",
                "thumbnail" => "image|mimes:jpg,png,jpeg,webp|max:1000|required",
            ]);
            
        if($image){

            $image_name = Str::slug(strtolower($request->title)) . '.' .
            $image->getClientOriginalExtension();

            Image::make($image)->crop(870,550)->save(public_path('storage/uploads/posts/') . $image_name, 90);

        }else{
            $image_name = $post->thumbnail;
        }

        $post->title        = $request->title;
        $post->slug         = Str::slug($request->title);
        $post->content      = $request->content;
        $post->user_id      = Auth::user()->id;
        $post->status       = $request->status;
        $post->thumbnail    = $image_name;
        $post->save();

        $post ->categories()->sync($request->category);

        return redirect(route('post.index'))->with('message', 'Post Update Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}

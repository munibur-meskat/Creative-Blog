<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categories = Category::where('deleted_at', null)->get();
        // withCount('posts')->
        $trashCategories = Category::onlyTrashed()->get();
        // $trashCategories = Category::withTrashed()->get();
        // withCount('posts')->

        return view('backend.category.index', compact('categories', 'trashCategories'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $category_image = $request->file('image');

        $request->validate([
            "name"        => "required",
            "parent_id"   => "integer",
            "description" => "max:255|required",
            "image"       => "image|mimes:jpg,png,jpeg,webp|max:1000|required",
        ]);

        if($category_image->isValid()){

            $image_name = Str::slug(strtolower($request->name)). '-' . time() . '.' .
            $category_image->getClientOriginalExtension();
            
            Image::make($category_image)->crop(700,700)->save(public_path('storage/uploads/categories/') . $image_name, 90);

            // $resize_image->move(public_path('storage/uploads/categories/'), $image_name);
            
        }
        
        $insert              = new Category();
        $insert->name        = $request->name;
        $insert->slug        = Str::slug($request->name);
        $insert->parent_id   = $request->parent_id;
        $insert->description = $request->description;
        $insert->image       = $image_name;
        $insert->save();

        return back()->with('message', "Category Insert Successfull!");    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category) {
        $categories = Category::where('id', 'parent_id')->get();
        return view('backend.category.show', compact('category','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category) {
        $categories = Category::where('deleted_at', null)->get();
        return view('backend.category.edit', compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category) {

        $category_image = $request->file('image');
        
        $request->validate([
            "name"        => "required",
            "parent_id"   => "integer",
            "description" => "max:255",
            "image"       => "image|mimes:jpg,png,jpeg,webp|max:1000",
        ]);

        if($category_image && $category_image->isValid()){

            $imagePath = public_path('storage/uploads/categories/'. $category->image);
            
            if(file_exists($imagePath)){
                unlink($imagePath);
            }

            $image_name = Str::slug(strtolower($request->name)). '-' . time() . '.' .
            $category_image->getClientOriginalExtension();

            Image::make($category_image)->crop(700,700)->save(public_path('storage/uploads/categories/') . $image_name, 90);

        } else{
            $image_name = $category->image;
        }

        $category->name        = $request->name;
        $category->parent_id   = $request->parent_id;
        $category->description = $request->description;
        $category->image       = $image_name;
        $category->save();

        return redirect(route('dashboard.category.index'))->with('message', 'Category Update Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('message', "Category Delete Successfull!");
    }

    //category restore

    public function restoreCategory($id){

        $data = Category::onlyTrashed()->find($id);
        $data->restore();
        return back()->with('message', "Category Restore Successfull!");
    }

    //category hardDelete

    public function hardDelete($id){

        $data = Category::onlyTrashed()->find($id);
        $imagePath = public_path('storage/uploads/categories/'. $data->image);

        if(file_exists($imagePath)){
            unlink($imagePath);
        }
        
        $data->forceDelete();
        return back()->with('message', "Category Delete Successfull!");
    }

}
<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Intervention\Image\Facades\Image;

class SubCategoryControler extends Controller
{
    public function index(){
        $categories = Category::where('deleted_at', null)->get();
        // withCount('posts')->
        $trashCategories = Category::onlyTrashed()->get();
        // $trashCategories = Category::withTrashed()->get();
        // withCount('posts')->
        
        return view('backend.sub_category.sub_category', compact('categories','trashCategories'));
    }

    public function store(Request $request){
        // return $request; 

        $category_image = $request->file('image');

        $request->validate([
            "category_id"  => "required",
            "subcategory_name"   => "required",
            "description" => "max:255|required",
            "image"       => "image|mimes:jpg,png,jpeg,webp|max:1000|required",
        ]);

        if($category_image->isValid()){

            $image_name = Str::slug(strtolower($request->subcategory_name)). '-' . time() . '.' .
            $category_image->getClientOriginalExtension();
            
            Image::make($category_image)->crop(700,700)->save(public_path('storage/uploads/sub-categories/') . $image_name, 90);
        }
        
        $insert              = new SubCategory();
        $insert->category_id        = $request->category_id;
        $insert->slug        = Str::slug($request->category_id);
        $insert->subcategory_name   = $request->subcategory_name;
        $insert->description = $request->description;
        $insert->image       = $image_name;
        $insert->save();

        return back()->with('message', "Sub Category Insert Successfull!"); 

    }
}

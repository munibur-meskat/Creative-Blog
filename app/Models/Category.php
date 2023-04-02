<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    
    function parentCategory(){
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}

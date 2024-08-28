<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = ['post_title','post_description','post_image','category_id'];

    public function category(){
        return $this->hasOne(Category::class,"id","category_id");
    }
}

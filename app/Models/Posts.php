<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = "posts";
    protected $fillable = ["thumbnail", "title", "content", "category_id", "user_id"];

    public function author()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
    public function category()
    {
        return $this->belongsTo(Categories::class, "category_id", "id");
    }
    public function comments()
    {
        return $this->hasMany(Comments::class, "post_id", "id")->where("comment_id", null);
    }
}

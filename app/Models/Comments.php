<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = "comments";
    protected $fillable = ["comment", "user_id", "post_id", "comment_id"];

    public function childComment()
    {
        return $this->hasMany(Comments::class, "comment_id", "id");
    }
}

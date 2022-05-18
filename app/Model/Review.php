<?php

namespace App\Model;

use App\Model\Blog;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public function blog() {
        return $this->belongsTo(Blog::class);
    }
}

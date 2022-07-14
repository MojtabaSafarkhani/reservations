<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function children()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }

    public function parent()
    {
        return $this->hasMany(Comment::class, 'comment_id');
    }
}

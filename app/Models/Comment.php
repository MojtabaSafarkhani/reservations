<?php

namespace App\Models;


use Hekmatinasser\Verta\Verta;
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
        return $this->belongsTo(Hotel::class)->withTrashed();
    }

    public function getDateInPersianAttribute()
    {
        $persianDate = $this->created_at->toJalali();
        return $persianDate->format('%d - %B - %Y');
    }

    /*  public function parent()
      {
          return $this->belongsTo(Comment::class, 'comment_id');
      }

      public function children()
      {
          return $this->hasMany(Comment::class, 'comment_id');
      }*/
}

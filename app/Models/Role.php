<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public static function findByTitle($title)
    {
        return self::query()->where('title', $title)->first()->id;
    }

    public function hasPermissions($title)
    {
        return $this->permissions()->where('title', $title)->exists();
    }

    public function translateTitle()
    {
        if ($this->title === 'host') {
            return 'ميزبان';
        } elseif ($this->title === 'user') {
            return 'مهمان';
        } else {
            return 'ادمين';
        }
    }
}

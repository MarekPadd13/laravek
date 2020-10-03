<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const YES = 1;
    const NO = 0;

    public static function postsStatusYes() {
        return static::query()->where('status', self::YES)->get();
    }
}

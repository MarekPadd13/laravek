<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property string title
 *
 */

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'parent_id', 'created_by', 'modified_by', 'published'];

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title,0, 40)."-".Carbon::now()->format('dmyHis'),'-');
    }

    public function children(){
        return $this->hasMany(self::class, 'parent_id');
    }
}

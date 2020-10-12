<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

/**
 * @property string title
 *
 */

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug',  'created_by', 'modified_by', 'published', 'description_short',
        'description', 'meta_title', 'meta_description', 'meta_keywords'];

    public function setSlugAttribute($value) {
       $this->attributes['slug'] = Str::slug(mb_substr($this->title,0, 40)."-".Carbon::now()->format('dmyHis'),'-');

    }

    public function setCreatedBy($value) {
        $this->attributes['created_by'] = Auth::id();
    }

    public function setModifiedBy($value) {
        $this->attributes['modified_by'] = Auth::id();
    }

    public function categories (){
        return $this->morphToMany(Category::class, 'record', 'category_tables');
    }

    public function scopeLastArticles($query, $count) {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}

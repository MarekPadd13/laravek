<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property string name
 * @property string slug
 * @property string description
 * @property string group
 *
 */

class Role extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsToMany(User::class, 'role_users');
    }
}

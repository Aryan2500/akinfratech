<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissioncategory extends Model
{
    use HasFactory;

    function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}

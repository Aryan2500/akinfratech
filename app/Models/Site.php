<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function head()
    {
        return $this->belongsTo(User::class ,'sitehead_id');
    }
}

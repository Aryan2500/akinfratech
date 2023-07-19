<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    protected $guarded = [];


    function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }
    function site()
    {
        return $this->belongsTo(Site::class);
    }
}

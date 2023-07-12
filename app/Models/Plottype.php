<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plottype extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function plots()
    {
        return $this->hasMany(Plot::class );
    }
}

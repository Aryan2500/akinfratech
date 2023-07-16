<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sites()
    {
        return $this->belongsToMany(Site::class);
    }

    public function city()
    {
        return $this->belongsTo(city::class, 'city_id');
    }
}

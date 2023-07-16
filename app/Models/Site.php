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
        return $this->belongsTo(User::class, 'sitehead_id');
    }

    public function investors()
    {
        return $this->belongsToMany(User::class, 'site_investor', 'site_id', 'investor_id');
    }

    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }
}

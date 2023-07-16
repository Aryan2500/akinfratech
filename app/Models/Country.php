<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class Country extends Model
{
    use HasFactory;

    public function states()
    {
        $this->belongsTo(State::class);
    }
}

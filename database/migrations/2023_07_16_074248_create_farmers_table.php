<?php

use App\Models\City;
use App\Models\Country;
use App\Models\Site;
use App\Models\State;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('farmers', function (Blueprint $t) {
            $t->id();
            $t->string('name');
            $t->foreignIdFor(Country::class);
            $t->foreignIdFor(State::class);
            $t->foreignIdFor(City::class);
            $t->string('phone');
            $t->string('address');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmers');
    }
};

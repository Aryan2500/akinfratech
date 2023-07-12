<?php

use App\Models\Plottype;
use App\Models\Site;
use App\Models\User;
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
        Schema::create('plots', function (Blueprint $t) {
            $t->id();
            $t->string('name');
            $t->text('address');
            $t->text('price');
            $t->string('size');
            $t->boolean('isBooked')->default(false);
            $t->foreignIdFor(Plottype::class)->comment('type of plot');
            $t->foreignIdFor(Site::class)->comment('this plot situated on this site');
            $t->foreignIdFor(User::class)->comment('creator id');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plots');
    }
};

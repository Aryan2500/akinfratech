<?php

use App\Models\Farmer;
use App\Models\Site;
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
        Schema::create('farmer_site', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Farmer::class);
            $t->foreignIdFor(Site::class);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_farmers');
    }
};

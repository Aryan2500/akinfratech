<?php

use App\Models\Plot;
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
        Schema::create('plotregistries', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Site::class);
            $t->foreignIdFor(Plot::class);
            $t->foreignIdFor(User::class)->comment('creator id');
            $t->string('booking_id');
            $t->string('customer_id');
            $t->string('customer_name');
            $t->string('gata_number');
            $t->string('saler_name');
            $t->string('register_number');
            $t->double('discount_amount');
            $t->double('balance_amount');
            $t->double('paid_amount');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plotregistries');
    }
};

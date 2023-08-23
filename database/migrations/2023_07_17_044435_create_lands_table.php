<?php

use App\Models\Block;
use App\Models\Farmer;
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
        Schema::create('lands', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Site::class);
            $t->foreignIdFor(Farmer::class);
            $t->string('khasra_numbers');
            $t->string('rakba');
            $t->bigInteger('area');
            $t->enum('registry_status', ['YES', 'NO']);
            $t->integer('payble_amount');
            $t->integer('paid_amount');
            $t->integer('balance_amount');
            $t->enum('payment_mode', PAYMENT_MODE);
            $t->string('payment_date');
            $t->string('remark');
            $t->foreignIdFor(User::class)->comment('creator id');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lands');
    }
};

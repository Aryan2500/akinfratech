<?php

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
        Schema::create('sites', function (Blueprint $t) {
            $t->id();
            $t->string('name');
            $t->text('address');
            $t->integer('total_size');
            $t->integer('remaining_size')->nullable();
            $t->foreignIdFor(User::class)->comment('creator Id');
            $t->foreignId('sitehead_id')->comment('this is a user id who is a head of this site');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};

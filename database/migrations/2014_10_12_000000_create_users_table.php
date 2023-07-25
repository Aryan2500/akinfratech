<?php

use App\Models\Role;
use App\Models\User;
use App\Models\Usertype;
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
        Schema::create('users', function (Blueprint $t) {
            $t->id();
            $t->string('name');
            $t->string('email')->unique();
            $t->timestamp('email_verified_at')->nullable();
            $t->string('password')->nullable()->comment('null for Invstors type of user');
            $t->string('phone')->nullable();
            $t->foreignIdFor(Usertype::class);
            $t->string('refer_code')->nullable()->unique();
            $t->string('parent_refer_code')->nullable();
            $t->foreignId('parent_id')->default(1);
            $t->text('address')->nullable();
            $t->rememberToken();
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

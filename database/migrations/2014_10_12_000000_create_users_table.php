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
            $t->string('title')->nullable();
            $t->string('email')->unique();
            $t->timestamp('email_verified_at')->nullable();
            $t->string('password')->nullable()->comment('null for Invstors and customer type of user');
            $t->string('phone')->nullable();
            $t->foreignIdFor(Usertype::class);
            $t->string('refer_code')->nullable()->unique();
            $t->string('parent_refer_code')->nullable();
            $t->foreignId('parent_id')->default(1);
            $t->string('swd')->nullable()->comment('son , wife , daughter');
            $t->string('swdOf')->nullable();
            $t->string('dob')->nullable();
            $t->string('gender')->nullable();
            $t->string('address')->nullable();
            $t->string('corresponding_address')->nullable();
            $t->string('pin_code')->nullable();
            $t->string('corres_pin_code')->nullable();
            $t->string('city')->nullable();
            $t->string('corres_city')->nullable();
            $t->string('state')->nullable();
            $t->string('corres_state')->nullable();
            $t->string('telephone_number')->nullable();
            $t->string('aadhar_number')->nullable();
            $t->string('occupation')->nullable();
            $t->string('nationality')->nullable();
            $t->string('dl_img')->nullable();
            $t->string('aadhar_img')->nullable();
            $t->string('voterId_img')->nullable();
            $t->string('other')->nullable();
            $t->string('profile_img')->nullable();
            $t->string('nominee_name')->nullable();
            $t->string('relation')->nullable();
            $t->foreignIdFor(Role::class)->nullable();
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

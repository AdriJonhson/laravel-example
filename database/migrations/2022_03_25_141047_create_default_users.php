<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $admin = \App\Models\User::query()->create([
            "name"      => "Admin",
            "email"     => "admin@if.com",
            "email_verified_at" => \Carbon\Carbon::now(),
            "password"  => Hash::make("123456")
        ]);

        $admin->assignRole("ADMIN");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \App\Models\User::query()->delete();
    }
};

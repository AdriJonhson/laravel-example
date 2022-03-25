<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        \Spatie\Permission\Models\Role::query()->create(['name' => 'ADMIN']);
        \Spatie\Permission\Models\Role::query()->create(['name' => 'ALUNO']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Spatie\Permission\Models\Role::query()->delete();
    }
};

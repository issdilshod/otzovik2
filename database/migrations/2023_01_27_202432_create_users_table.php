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
        Schema::create('users', function (Blueprint $table) {
            $table->string('id')->primary();

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();

            $table->string('username')->nullable();
            $table->string('password')->nullable();

            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            $table->tinyInteger('role');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

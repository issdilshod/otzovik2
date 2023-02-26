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
        Schema::create('platforms', function (Blueprint $table) {
            $table->string('id')->primary();

            $table->string('user_id')->nullable();

            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();

            $table->string('org')->nullable();
            $table->string('license')->nullable();
            $table->string('website')->nullable();
            $table->string('foundation')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->string('slug')->nullable();
            
            $table->tinyInteger('status');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platforms');
    }
};

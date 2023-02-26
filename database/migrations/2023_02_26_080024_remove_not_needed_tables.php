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
        Schema::dropIfExists('university_directions');
        Schema::dropIfExists('university_education_types');
        Schema::dropIfExists('university_education_levels');

        Schema::dropIfExists('directions');
        Schema::dropIfExists('education_types');
        Schema::dropIfExists('education_levels');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('education_types', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('education_levels', function (Blueprint $table) {
            $table->string('id')->primary();

            $table->string('user_id')->nullable();
            $table->string('name')->nullable();

            $table->string('sort')->nullable();

            $table->string('slug')->nullable();

            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('university_directions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('university_id')->nullable();
            $table->string('direction_id')->nullable();

            $table->tinyInteger('status');

            $table->timestamps();

            $table->foreign('university_id')->references('id')->on('universities');
            $table->foreign('direction_id')->references('id')->on('directions');
        });

        Schema::create('university_education_types', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('university_id')->nullable();
            $table->string('education_type_id')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('university_id')->references('id')->on('universities');
            $table->foreign('education_type_id')->references('id')->on('education_types');
        });

        Schema::create('university_education_levels', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('university_id')->nullable();
            $table->string('education_level_id')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('university_id')->references('id')->on('universities');
            $table->foreign('education_level_id')->references('id')->on('education_levels');
        });
    }
};

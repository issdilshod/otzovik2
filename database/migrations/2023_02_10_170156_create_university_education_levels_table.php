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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('university_education_levels');
    }
};

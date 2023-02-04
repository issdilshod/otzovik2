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
        Schema::table('universities', function (Blueprint $table) {
            $table->dropColumn('number');
            $table->string('id')->primary()->change();
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('university_directions');

        Schema::table('universities', function (Blueprint $table) {
            $table->dropPrimary('id');
            $table->integer('number')->autoIncrement();
        });
    }
};

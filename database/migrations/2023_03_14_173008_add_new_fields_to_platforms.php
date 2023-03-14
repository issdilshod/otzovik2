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
        Schema::table('platforms', function (Blueprint $table) {
            $table->double('price')->nullable()->after('org');
            $table->string('traning_period')->nullable()->after('price');
            $table->tinyInteger('install_plan')->nullable()->after('traning_period');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('platforms', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('traning_period');
            $table->dropColumn('install_plan');
        });
    }
};

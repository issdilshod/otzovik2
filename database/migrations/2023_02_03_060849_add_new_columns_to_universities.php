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
            // rates
            $table->integer('worlds_rate')->nullable()->after('name');
            $table->integer('russian_rate')->nullable()->after('worlds_rate');
            $table->boolean('accreditation')->nullable()->after('russian_rate');

            // contacts
            $table->string('address')->nullable()->after('accreditation');
            $table->string('phones')->nullable()->after('address');
            $table->string('email')->nullable()->after('phones');
            $table->string('website')->nullable()->after('email');

            // social links
            $table->string('facebook_link')->nullable()->after('website');
            $table->string('twitter_link')->nullable()->after('facebook_link');
            $table->string('telegram_link')->nullable()->after('twitter_link');
            $table->string('viber_link')->nullable()->after('telegram_link');
            $table->string('vk_link')->nullable()->after('viber_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('universities', function (Blueprint $table) {
            // rates
            $table->dropColumn('worlds_rate');
            $table->dropColumn('russian_rate');
            $table->dropColumn('accreditation');

            // contacts
            $table->dropColumn('address');
            $table->dropColumn('phones');
            $table->dropColumn('email');
            $table->dropColumn('website');

            // social links
            $table->dropColumn('facebook_link');
            $table->dropColumn('twitter_link');
            $table->dropColumn('telegram_link');
            $table->dropColumn('viber_link');
            $table->dropColumn('vk_link');
        });
    }
};

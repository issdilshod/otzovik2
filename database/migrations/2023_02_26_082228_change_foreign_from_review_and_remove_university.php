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
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('reviews_university_id_foreign');
            $table->renameColumn('university_id', 'platform_id');

            $table->foreign('platform_id')->references('id')->on('platforms');
        });

        Schema::dropIfExists('universities');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->string('id');

            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('index');
            $table->string('city_id')->nullable();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('slug')->nullable();
            $table->string('traning_period')->nullable();
            $table->text('extra')->nullable();

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

            $table->tinyInteger('status');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('city_id')->references('id')->on('cities');
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('reviews_platform_id_foreign');
            $table->renameColumn('platform_id', 'university_id');

            $table->foreign('university_id')->references('id')->on('universities');
        });
    }
};

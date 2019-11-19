<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname')->nullable();
            $table->string('dni')->nullable();
            $table->string('raesonsocial')->nullable();
            $table->string('activity')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->boolean('creditactive')->default(0)->nullable();
            $table->string('saleman')->default('sistema')->nullable();
            $table->enum('roles',['admin','client','supply','partner','saleman','provider'])->default('client')->nullable();
    
            $table->unsignedBigInteger('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onUpdate('cascade');

            $table->unsignedBigInteger('region_id')->unsigned()->nullable();
            $table->foreign('region_id')->references('id')->on('regions')->onUpdate('cascade');

            $table->unsignedBigInteger('city_id')->unsigned()->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade');

            $table->unsignedBigInteger('province_id')->unsigned()->nullable();
            $table->foreign('province_id')->references('id')->on('provinces')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropColumn([
                'dni','raesonsocial',
                'activity','phone','address',
                'creditactive','saleman']);
                $table->dropForeign(['country_id',
                'region_id','city_id','province_id'
            ]);
        });
    }
}
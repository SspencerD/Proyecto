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
            $table->string('role')->default('client');
            $table->string('dni')->nullable();
            $table->string('raesonsocial')->nullable();
            $table->string('activity')->nullable();
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->boolean('creditactive')->default(0)->nullable();
            $table->string('saleman')->default('sistema')->nullable();
            
            //fk ciudades
            $table->unsignedBigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');

            //Fk paises
            $table->unsignedBigInteger('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            
            //fk regiones
            $table->unsignedBigInteger('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('regions');

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
                'role','dni','reasonsocial',
                'activity','phone','address',
                'region','city','country',
                'creditactive','saleman'
            ]);
        });
    }
}

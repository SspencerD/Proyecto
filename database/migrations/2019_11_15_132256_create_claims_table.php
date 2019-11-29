<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD

            $table->string('title');
            $table->string('description');
            $table->string('status',4)->default('Pend'); // Pend,Asig , Deri, Solu,Term // son los niveles Pendiente, Asignado , Derivado, Solucionado-> pasa a Terminado.
            $table->string('cargo');
            $table->string('lote');
            $table->integer('qty_delivery');
            $table->integer('qty_claim');

           // FK para saber las categorias
            $table->unsignedBigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            // FK para guardar los productos
            $table->unsignedBigInteger('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products');
        // FK para el hallago (cause)
            $table->unsignedBigInteger('cause_id')->unsigned()->nullable();
            $table->foreign('cause_id')->references('id')->on('causes');
            //FK del tipo de hallazgo , la rasón
            $table->unsignedBigInteger('reason_id')->unsigned()->nullable();
            $table->foreign('reason_id')->references('id')->on('reasons');
                // FK para el usuario ... quien hizo el reclamo
            $table->unsignedBigInteger('partner_id')->unsigned();
            $table->foreign('partner_id')->references('id')->on('users');
                // FK quien tomo el reclamo.
            $table->unsignedBigInteger('assurement_id')->unsigned()->nullable();
            $table->foreign('assurement_id')->references('id')->on('users');
                //FK para asignar el nivel de gravedad del reclamo.
            $table->unsignedBigInteger('level_id')->unsigned()->nullable();
            $table->foreign('level_id')->references('id')->on('levels');





=======
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c
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
        Schema::dropIfExists('claims');
    }
}

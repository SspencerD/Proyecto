<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->bigIncrements('id');

                //Fk para los detalles
            $table->unsignedBigInteger('cart_id')->unsigned();
            $table->foreign('cart_id')->references('id')->on('carts');

                    // FK detalle del producto
            $table->unsignedBigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');

            $table->integer('quantity');
            $table->integer('discount')->default(0); //descuento de un  % del precio
           /*  $table->string('quotation'); // numero de cotización del proveedor.. */
            // $table->string('attached')->nullable;  el adjunto del documento por el cliente en caso de adjuntar una orden de compra...


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
        Schema::dropIfExists('cart_details');
    }
}

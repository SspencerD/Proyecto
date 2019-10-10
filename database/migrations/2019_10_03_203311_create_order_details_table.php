<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');

                    //cabezera de la orden de compra
            $table->unsignedBigInteger('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
                // detalles de los productos de la orden de compra.
            $table->unsignedBigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');

            $table->integer('quantity');
            $table->integer('discount'); // % del precio
            $table->string('storage'); //bodega donde ira almacenado el producto
            /* $table->integer('cost_center'); //centro costo  esto deberia llamarse por un FK a una tabla centro Costo...*/
            // $ table->integer('area'); // tambien debe llamarse desde una Fk a una tabla llamada Area... 
            $table->string('quotation'); // numero de cotización del proveedor...




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
        Schema::dropIfExists('order_details');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductShipmentDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_shipment_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('shipment_detail_id');
            $table->unsignedInteger('product_id');
            $table->foreign('shipment_detail_id')->references('id')->on('shipment_details')->onDelete('CASCADE');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('category_product');
    }
}

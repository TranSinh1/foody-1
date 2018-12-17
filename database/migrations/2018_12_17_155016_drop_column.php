<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shipment_details', function($table) {
             $table->dropForeign(['product_id']);
             $table->dropColumn('product_id');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('shipment_details', function($table) {
             $table->dropForeign(['product_id']);
             $table->dropColumn('product_id');
          });
    }
}

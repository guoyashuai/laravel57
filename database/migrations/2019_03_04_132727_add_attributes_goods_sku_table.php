<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttributesGoodsSkuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goods_skus', function (Blueprint $table) {
            //
            $table->string('attrs')->nullable();
            $table->integer('attribute_value_id')->nullable()->change();
            $table->integer('attribute_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('goods_skus', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsSkusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_skus', function (Blueprint $table) {
            $table->increments('id')->comment('sku主键id');
            $table->integer('goods_id')->comment('商品id');
            $table->integer('attribute_id')->comment('属性id');
            $table->integer('attribute_value_id')->comment('属性值id');
            $table->integer('prcture_id')->comment('图片id');
            $table->decimal('price', 8, 2)->default(0)->comment('价格');
            $table->integer('stock')->default(0)->comment('库存');
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
        Schema::dropIfExists('goods_skus');
    }
}

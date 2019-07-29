<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrcturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prctures', function (Blueprint $table) {
            $table->increments('id')->comment('商品图片主键id');
            $table->string('name')->comment('图片名称');
            $table->string('url')->comment('图片地址');
            $table->integer('goods_id')->comment('商品id');
            $table->string('size')->comment('商品规格');
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
        Schema::dropIfExists('prctures');
    }
}

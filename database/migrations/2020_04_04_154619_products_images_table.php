<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_images', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('product_id')->nullable(false);
           // $table->unsignedBigInteger('images_id')->nullable(false);
           $table->bigInteger('product_id')->unsigned()->nullable();
           $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
           $table->bigInteger('images_id')->unsigned()->nullable();
           $table->foreign('images_id')->references('id')->on('images')->onDelete('cascade');
           // $table->foreign('product_id')->references('id')->on('products');
            //$table->foreign('images_id')->references('id')->on('images');
            $table->rememberToken();
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
        //
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('main_id')->unsigned();
            $table->integer('sub_category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('product_name',100);
            $table->double('price');
            $table->boolean('status')->default(false);
            $table->boolean('publish')->default(false);
            $table->string('image_path',255);
            $table->text('description');
            $table->timestamps();

             $table->foreign('main_id')->references('id')->on('main_products')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

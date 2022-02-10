<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->string('name', 50);
            $table->string('thumbnail', 255);
            $table->string('description', 255);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('discount_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->decimal('price');
            $table->integer('status');
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

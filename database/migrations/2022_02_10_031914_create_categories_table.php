<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('thumbnail', 255);
            $table->string('code', 50);
            $table->string('name', 50);
            $table->string('url', 255);
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('categories');
        Schema::table('categories', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
    }
}

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
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->longText('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->enum('type',['kg','m²'])->default('m²');
            $table->integer('quantity')->default(1);
            $table->string('price',50)->nullable();
            $table->string('photo')->nullable();
            $table->string('photos')->nullable();
           
            $table->boolean('active')->default(true);
            $table->boolean('inHome')->default(false);
     
            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
}

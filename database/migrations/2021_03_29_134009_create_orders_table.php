<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email')->nullable();
            $table->string('profession');
            $table->string('entreprise')->nullable();
            $table->longText('message')->nullable();
            /********** product details ***************/

            $table->string('product_name');
            $table->string('product_ref')->nullable();
            $table->string('product_url')->nullable();
            $table->string('product_categorie')->nullable();
            $table->integer('quantity');
            $table->string('colors')->nullable();
            $table->integer('designs')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('confirmed')->default(false);
            $table->boolean('isLead')->default(false);

            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products');

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
        Schema::dropIfExists('orders');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('post');
            $table->string('photo')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('facebook')->unique()->nullable();
            $table->string('twitter')->unique()->nullable();
            $table->string('linkedin')->unique()->nullable();
            $table->string('website')->unique()->nullable();
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('teams');
    }
}

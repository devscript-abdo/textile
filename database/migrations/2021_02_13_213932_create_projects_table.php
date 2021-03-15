<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('client_name')->nullable();
            $table->string('date')->nullable();
            $table->text('excerpt');
            $table->longText('description');
            $table->string('site_url')->unique()->nullable();
            $table->string('photos')->nullable();
            $table->string('vedio')->nullable()->unique();
            $table->string('logo')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('oursolution')->default(false);
           // $table->unsignedBigInteger('tag_id');
           
            /*************************************** */
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->string('seo_image')->nullable();
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
        Schema::dropIfExists('projects');
    }
}

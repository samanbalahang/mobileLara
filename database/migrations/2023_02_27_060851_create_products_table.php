<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->integer('user_id')->nullable();
            $table->integer('gallery_id')->nullable();
            $table->tinyInteger('commentAccepted')->default(0);
            $table->integer('sort')->default(0);
            $table->tinyInteger('watingforapproval')->default(0);
            $table->string('uri')->unique();
            $table->string('title');
            $table->string('post_desc');
            $table->text('content');      
            $table->string('mainImg')->nullable();
            $table->string('SquareImg')->nullable();
            $table->string('largeImg')->nullable(); 
            $table->string('visibility')->default(1);
            $table->string('published')->nullable();    
            $table->softDeletes();
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
};

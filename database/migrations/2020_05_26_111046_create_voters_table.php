<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voters', function (Blueprint $table) {
            
            $table->bigIncrements('vote_id');
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();

            $table->foreign('product_id')->references('product_id')->on('products');
          
            $table->foreign('user_id')->references('id')->on('users');
            // $table->integer('status')->default('0');
            $table->timestamps();

          

            // $table->primary(["product_id","user_id"]);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voters');
    }
}

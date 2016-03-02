<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('steps', function (Blueprint $table) {
             $table->increments('id');
             $table->string('parent_type');
             $table->integer('parent_id');
             $table->string('title');
             $table->longText('desc');
             $table->time('deadline');
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
         Schema::drop('steps');
     }
}

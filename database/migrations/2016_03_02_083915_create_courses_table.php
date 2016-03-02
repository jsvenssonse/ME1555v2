<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('courses', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('user_id');
             $table->string('title');
             $table->integer('cat');
             $table->integer('tag');
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
         Schema::drop('courses');
     }
}

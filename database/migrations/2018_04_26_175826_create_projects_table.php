<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
      $table->increments('id');
	    $table->text('title');
	    $table->text('company');
      $table->text('img');
      $table->text('desc');
      $table->text('link');
	    $table->boolean('html');
	    $table->boolean('css');
	    $table->boolean('javasrcipt');
	    $table->boolean('php');
	    $table->boolean('framework');
      $table->integer('levelofinvolvement');
      $table->integer('changessinceworkedon');
	    $table->integer('year');
      $table->DateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
      $table->DateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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

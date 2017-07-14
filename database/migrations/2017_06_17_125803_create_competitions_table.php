<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('jurisdiction')->nullable();
            $table->string('name')->nullable();
            $table->string('applicants')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('goal')->nullable();
            $table->string('value')->nullable();
            $table->string('status')->nullable();
            $table->string('more')->nullable();
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
        Schema::drop('competitions');
    }
}

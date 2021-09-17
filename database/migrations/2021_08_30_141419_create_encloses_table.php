<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnclosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encloses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidate_id')->unsigned();
            $table->foreign('candidate_id')->references('id')->on('personals');
            $table->text('passport')->nullable();
            $table->text('photo')->nullable();
            $table->text('education')->nullable();
            $table->text('experience')->nullable();
            $table->text('langu')->nullable();
            $table->text('police')->nullable();
            $table->text('skill')->nullable();
            $table->text('medical')->nullable();
            $table->text('idcard')->nullable();
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
        Schema::dropIfExists('encloses');
    }
}

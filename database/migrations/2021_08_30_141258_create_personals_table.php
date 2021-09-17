<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trade');
            $table->string('country');
            $table->string('name');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('nationality')->default('BANGLADESH');
            $table->string('dob');
            $table->string('pob');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('height');
            $table->string('weight');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('candidate_number');
            $table->string('family_number');
            $table->string('passport_number');
            $table->string('issue_place');
            $table->string('issue_date');
            $table->string('expire_date');
            $table->string('highest_edu');
            $table->text('skill_training');
            $table->text('language_training');
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
        Schema::dropIfExists('personals');
    }
}

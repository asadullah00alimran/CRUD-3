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
        Schema::create('stdudent_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('roll');
            $table->integer('registration_no');
            $table->string('department');
            $table->string('semester');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->integer('status');
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
        Schema::dropIfExists('stdudent_models');
    }
};

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
        Schema::create('element_teaching_units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('credit');
            $table->unsignedBigInteger('teaching_unit_id');
            $table->foreign('teaching_unit_id')->references('id')->on('teaching_units')->onDelete('cascade');
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
        Schema::dropIfExists('element_teaching_units');
    }
};

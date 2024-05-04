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
        Schema::create('teaching_units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('credit');
            $table->enum('status', ['singular', 'multiple']);
            $table->enum('type', ['prepa1', 'prepa2'])->nullable();
            $table->enum('semester', ['semester1', 'semester2', 'semester3', 'semester4'])->nullable();
            // $table->unsignedBigInteger('classroom_id')->nullable();
            // $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
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
        Schema::dropIfExists('teaching_units');
    }
};

<?php

use App\Models\Note;
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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('i1_points')->nullable();
            $table->string('i2_points')->nullable();

            $table->string('d1_points')->nullable();
            $table->string('d2_points')->nullable();

            $table->string('e_points')->nullable();

            $table->string('moy_inter')->nullable();
            $table->string('moy_dev')->nullable();
            $table->string('moy_ecu')->nullable();


            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

            $table->unsignedBigInteger('element_teaching_unit_id')->nullable();
            $table->foreign('element_teaching_unit_id')->references('id')->on('element_teaching_units')->onDelete('cascade');

            $table->unsignedBigInteger('teaching_unit_id')->nullable();
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
        Schema::dropIfExists('notes');
    }
};

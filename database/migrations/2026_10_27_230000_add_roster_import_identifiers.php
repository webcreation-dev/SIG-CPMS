<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('classrooms', function (Blueprint $table) {
            $table->string('roster_key', 20)->nullable()->unique();
        });
        Schema::table('students', function (Blueprint $table) {
            $table->string('import_identity', 64)->nullable();
            $table->unique(['classroom_id', 'import_identity']);
        });
    }

    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropUnique(['classroom_id', 'import_identity']);
            $table->dropColumn('import_identity');
        });
        Schema::table('classrooms', function (Blueprint $table) {
            $table->dropUnique(['roster_key']);
            $table->dropColumn('roster_key');
        });
    }
};

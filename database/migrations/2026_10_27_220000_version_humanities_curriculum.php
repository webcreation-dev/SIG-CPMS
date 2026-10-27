<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::table('teaching_units', function (Blueprint $table) {
            $table->unsignedSmallInteger('composite_from_year')->nullable();
            $table->unsignedSmallInteger('weighted_from_year')->nullable();
        });
        Schema::table('element_teaching_units', function (Blueprint $table) {
            $table->unsignedSmallInteger('effective_from_year')->nullable();
        });
        foreach (range(1, 4) as $number) {
            $units = DB::table('teaching_units')->where('semester', 'semester'.$number)
                ->whereIn('name', ['Humanité '.$number.'C (FHS)', 'Humanité '.$number.'C'])->get();
            foreach ($units as $unit) {
                DB::table('teaching_units')->where('id', $unit->id)->update([
                    'composite_from_year' => 2026, 'weighted_from_year' => 2026,
                ]);
                foreach (['FHS' => 4, 'Conduite' => 1] as $name => $credit) {
                    DB::table('element_teaching_units')->insert([
                        'teaching_unit_id' => $unit->id, 'name' => $name, 'credit' => $credit,
                        'effective_from_year' => 2026, 'created_at' => now(), 'updated_at' => now(),
                    ]);
                }
            }
        }
    }

    public function down()
    {
        // Un retour arrière doit conserver les notes éventuellement saisies depuis 2026.
        if (DB::table('notes')->whereIn('element_teaching_unit_id', function ($query) {
            $query->select('id')->from('element_teaching_units')->where('effective_from_year', 2026);
        })->exists()) {
            throw new RuntimeException('Retour arrière refusé : des notes utilisent les nouveaux ECUE.');
        }
        DB::table('element_teaching_units')->where('effective_from_year', 2026)->delete();
        Schema::table('element_teaching_units', fn (Blueprint $table) => $table->dropColumn('effective_from_year'));
        Schema::table('teaching_units', fn (Blueprint $table) => $table->dropColumn(['composite_from_year', 'weighted_from_year']));
    }
};

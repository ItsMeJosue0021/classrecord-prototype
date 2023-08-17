<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class_records')->insert([
            'name' => 'Class Record 1',
            // 'section_subject_id' => 1,
            // 'faculty_id' => 1,
            // 'school_year_id' => 1,
        ]);

        DB::table('class_records')->insert([
            'name' => 'Class Record 2',
            // 'section_subject_id' => 2,
            // 'faculty_id' => 2,
            // 'school_year_id' => 1,
        ]);
    }
}

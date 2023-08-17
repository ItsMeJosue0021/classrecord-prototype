<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ClassRecordSeeder;
use Database\Seeders\EvaluationCriteriaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ClassRecordSeeder::class);
        $this->call(EvaluationCriteriaSeeder::class);
        $this->call(StudentSeeder::class);
    }
}

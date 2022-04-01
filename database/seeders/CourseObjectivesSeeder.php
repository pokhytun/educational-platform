<?php

namespace Database\Seeders;

use App\Models\CourseObjectives;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseObjectivesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseObjectives::factory()->count(10)->create();
    }
}

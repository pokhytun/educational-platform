<?php

namespace Database\Seeders;

use App\Models\CourseReviews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseReviews::factory()->count(1000)->create();
    }
}

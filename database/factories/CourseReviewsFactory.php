<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseReviews>
 */
class CourseReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rating' => $this->faker->numberBetween(1,5),
            'review' => $this->faker->text(20),
            'course_id' => function(){
                return Course::orderBy(DB::raw('RAND()'))->first()->id;
            },
            'user_id' => function(){
                return User::orderBy(DB::raw('RAND()'))->first()->id;
            },
            
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\CourseCategory;
use App\Models\TranslationLanguage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(5),
            'description' => $this->faker->text(20) ,
            'photo' => 'path',
            'language_id' => function(){
                return TranslationLanguage::orderBy(DB::raw('RAND()'))->first()->id;
            },
            'category_id' => function(){
                return CourseCategory::orderBy(DB::raw('RAND()'))->first()->id;
            },
            'user_id' => function(){
                return User::orderBy(DB::raw('RAND()'))->first()->id;
            },
        ];
    }
}

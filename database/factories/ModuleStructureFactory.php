<?php

namespace Database\Factories;

use App\Models\CourseModule;
use App\Models\ModuleStructure;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModuleStructure>
 */
class ModuleStructureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(15),
            'module_id' => function(){
                return CourseModule::orderBy(DB::raw('RAND()'))->first()->id;
            },
        ];
    }
}

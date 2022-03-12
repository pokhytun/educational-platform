<?php

namespace Database\Seeders;

use App\Models\CourseCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $predefinedCategories = [['title' => 'Веб дизайн'], ['title' => 'Програмування'],[ 'title' => 'Бізнес'],['title' => 'Психологія'],['title' => 'Відео'],['title' => 'Фото'],['title' => 'Арт дизайн'],['title' => 'Копірайтинг']];

        CourseCategory::factory(count($predefinedCategories))
        ->state(new Sequence(function () use (&$predefinedCategories) {
            return array_pop($predefinedCategories) ?? [];
        }))
        ->create();
    }
    
    
}


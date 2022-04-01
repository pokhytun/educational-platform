<?php

namespace Database\Seeders;

use App\Models\CourseObjectives;
use App\Models\CourseReviews;
use App\Models\ModuleStructure;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call([
            
            UserSeeder::class,
            TranslationLanguageSeeder::class,
            CourseCategorySeeder::class,
            PriceSeeder::class,
            CourseReviewsSeeder::class,
            CourseObjectivesSeeder::class,
            CourseModuleSeeder::class,
            ModuleStructureSeeder::class,
        ]);
    }
}

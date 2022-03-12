<?php

namespace Database\Seeders;

use App\Models\TranslationLanguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TranslationLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TranslationLanguage::factory()->count(5)->create();
    }
}

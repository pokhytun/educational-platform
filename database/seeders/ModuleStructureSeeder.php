<?php

namespace Database\Seeders;

use App\Models\ModuleStructure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModuleStructure::factory()->count(40)->create();
    }
}

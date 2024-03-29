<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    use HasFactory;

    public function submodules(){
        return $this->hasMany(ModuleStructure::class, 'module_id');
    }
}

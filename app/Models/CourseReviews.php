<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseReviews extends Model
{
    use HasFactory;

    public function getDateDiffAttribute(){
        return Carbon::now()->longAbsoluteDiffForHumans($this->created_at);
    }
}

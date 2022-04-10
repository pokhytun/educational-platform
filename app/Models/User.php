<?php

namespace App\Models;

use App\Traits\HasRolesAndPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRolesAndPermissions;

  
    protected $fillable = [
        'first_name',
        'last_name',
        'login',
        'email',
        'password',
        'phone_number',
        'photo',
    ];

 
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses(){
        return $this->belongsToMany(Course::class, 'sold_courses');
    }

    public function preferenceses(){
        return $this->belongsToMany(Course::class, 'wish_lists');
    }

    public function teaching(){
        return $this->hasMany(Course::class,'user_id');
    }

    public function getTeacherCountStudentsAttribute(){
        return $this->teaching()->withCount('buyers')->get()->sum('buyers_count');
    }
    
    public function likes(){
        return $this->hasMany(Like::class);
    }

   public function reviews(){
      return $this->hasMany(CourseReviews::class); 
   }

   

}

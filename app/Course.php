<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teaches;
use App\Studies;

class Course extends Model
{
    protected $table = 'course';
    
    protected $fillable = [
        'course_title',
        'course_subtitle',
        'path_picture_course',
        'course_description',
        'has_tutoring',
        'has_certification',
        'has_deadline',
        'has_end',
        'begin_subscriptions_date',
        'end_subscriptions_date',
        'begin_course_date',
        'end_course_date',
        'course_cartegory'
    ];

    public function taughtBy(){
        return $this->hasMany(Teaches::class);
    }
    public function studiedBy(){
        return $this->hasMany(Studies::class);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
}

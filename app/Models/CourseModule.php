<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    //
    protected $fillable = ['module_name' , 'module_link' , 'course_id'];
    public $timestamps = false;
}

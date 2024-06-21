<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Contact;

class CourseCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function courses () {
        return $this->hasMany(Course::class);
    }

    public function contacts () {
        return $this->hasMany(Contact::class);
    }
}

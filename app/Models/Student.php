<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'credentials', 'parent_credentials',
        'age', 'date_of_birth', 'phone_number', 'parent_phone_number',
        'school_time', 'stud_length', 'lessons_in_week',
        'lesson_length', 'lesson',
        'instrument_rent', 'comment'
    ];
}

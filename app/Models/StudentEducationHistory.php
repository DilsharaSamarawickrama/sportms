<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEducationHistory extends Model
{
    use HasFactory;
    protected $fillable=['studentId', 'school', 'from_year', 'to_year'];
}

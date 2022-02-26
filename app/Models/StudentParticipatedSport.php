<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentParticipatedSport extends Model
{
    use HasFactory;
    protected $fillable=['studentId', 'academy', 'sport', 'level', 'achievement'];
}

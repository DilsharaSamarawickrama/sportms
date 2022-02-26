<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGuardianInformation extends Model
{
    use HasFactory;
    protected $fillable=['studentId', 'designation', 'name', 'contact', 'email', 'address'];
}

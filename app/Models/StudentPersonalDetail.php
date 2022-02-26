<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPersonalDetail extends Model
{
    use HasFactory;
    protected $fillable=['studentId', 'nic', 'designation', 'name', 'contact', 'email', 'birthday', 'birthplace', 'gender', 'blood_group', 'weight', 'height', 'address', 'image', 'category', 'faculty'];
}

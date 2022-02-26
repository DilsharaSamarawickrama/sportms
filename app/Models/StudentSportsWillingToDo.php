<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSportsWillingToDo extends Model
{
    use HasFactory;
    protected $fillable=['studentId', 'sport', 'priority'];
}

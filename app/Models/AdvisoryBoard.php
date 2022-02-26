<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisoryBoard extends Model
{
    use HasFactory;
    protected $fillable = ['nic', 'title', 'name', 'gender', 'role', 'faculty', 'current_status'];
}

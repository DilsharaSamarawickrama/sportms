<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = ['nic', 'name', 'gender', 'position', 'email', 'contact', 'image', 'started_work', 'left_work', 'current_status'];
}

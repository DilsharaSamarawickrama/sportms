<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportCouncil extends Model
{
    use HasFactory;
    protected $fillable = ['studentId', 'position', 'current_status'];
}

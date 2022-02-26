<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportEquipmentIssuing extends Model
{
    use HasFactory;
    protected $fillable=['studentId', 'equipment', 'issued_at', 'issued_quantity', 'returned_at', 'returned_quantity'];
}

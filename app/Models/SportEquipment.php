<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportEquipment extends Model
{
    use HasFactory;
    protected $fillable=['sport', 'equipment', 'normal_quantity', 'normal_available_quantity', 'pool_quantity', 'pool_available_quantity'];
}

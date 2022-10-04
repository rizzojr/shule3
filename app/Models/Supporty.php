<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporty extends Model
{
    use HasFactory;
    protected $table = 'supporties';
    protected $fillable = ['name', 'email', 'phone', 'message'];
}

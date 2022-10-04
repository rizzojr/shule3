<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursecate extends Model
{
    use HasFactory;
    protected $table = 'coursecates';
    protected $fillable = [
        'name',
    ];
}

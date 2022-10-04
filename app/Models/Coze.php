<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coze extends Model
{
    use HasFactory;
    protected $table = 'cozes';
    protected $fillable = ['image_cover', 'image_instructor', 'instructor_name', 'cost', 'description'];
}

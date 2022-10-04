<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    protected $fillable = ['image_cover_one', 'image_cover_two', 'image_cover_three', 'who_we_are', 'what_we_do', 'why_you_join', 'what_our_goal'];
}

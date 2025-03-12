<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about'; // Make sure your migration uses 'about' table

    protected $fillable = ['name', 'age', 'hometown', 'studied_at', 'course', 'hobbies'];
}

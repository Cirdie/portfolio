<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about'; // ✅ Explicitly define the table name

    protected $fillable = [
        'name',
        'age',
        'studied_at',
        'hometown',
        'course',
        'hobbies',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class simple_videos extends Model
{
    protected $table = 'simple_videos';
    protected $fillable = ['name', 'link', 'status'];
}

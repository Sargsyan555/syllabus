<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingVideo extends Model
{
    protected $table = 'training_videos';
    protected $fillable = ['name', 'link', 'status'];
}

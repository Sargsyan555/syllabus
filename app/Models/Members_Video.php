<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members_Video extends Model
{
    protected $table = 'members_videos';
    protected $fillable = ['category','name','link','status'];
}

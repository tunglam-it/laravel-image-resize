<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageManipulation extends Model
{
    use HasFactory;

    const TYPE_SIZE = 'resize';

    const UPDATED_AT = null;

    protected $fillable = ['name','path','type','data','output_path','album_id','user_id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_Trailer extends Model
{
    use HasFactory;
    Protected $fillabele = ['video', 'trailer', 'video_poster', 'trailer_poster'];
}

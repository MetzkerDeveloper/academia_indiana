<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

   protected $fillable = [
        'title',
        'image',
        'description',
        'official_link',
        'tags',
        'video_yt',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
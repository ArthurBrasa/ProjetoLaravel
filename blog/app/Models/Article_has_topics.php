<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_has_topics extends Model
{
    use HasFactory;
    protected $fillable = [
        'topics', 
        'article'
    ];

}

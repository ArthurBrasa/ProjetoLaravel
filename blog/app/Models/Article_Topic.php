<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_Topic extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'topic_id'
    ];
}

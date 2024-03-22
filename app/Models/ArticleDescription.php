<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleDescription extends Model
{
    use HasFactory;
    protected $table = 'article_descriptions';
    protected $guarded = [];
}

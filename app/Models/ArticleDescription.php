<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleDescription extends Model
{
    use HasFactory;
    protected $table = 'article_descriptions';
    protected $guarded = [];

    public function imageArticleDescriptions()
    {
        return $this->hasMany(ImageArticleDetail::class,'article_description_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $guarded = [];

    public function articleDescriptions()
    {
        return $this->hasMany(ArticleDescription::class,'article_id','id');
    }

}

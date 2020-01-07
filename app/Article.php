<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Article extends Model
{
    protected $guarded=[];
    protected $casts=[
        'images'=>'array',
    ];

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function path(){
        return $this->slug;
    }

    public function user(){
        return $this->belongsTo(Article::class);
    }

}

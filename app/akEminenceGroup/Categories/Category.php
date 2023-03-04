<?php

namespace App\akEminenceGroup\Categories;

use App\akEminenceGroup\Articles\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    
    protected $fillable = [
        'name',
        'description'
    ];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}

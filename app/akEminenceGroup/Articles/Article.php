<?php

namespace App\akEminenceGroup\Articles;

use App\akEminenceGroup\Categories\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

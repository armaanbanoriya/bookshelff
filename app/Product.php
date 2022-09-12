<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}

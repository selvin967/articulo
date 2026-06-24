<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        "name", "description", "category_id", "content"
    ];

    public function notes() : HasMany
    {
        return $this->hasMany(Note::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function expenses(): HasMany
    {
        return $this->hasMany(Expenses::class);
    }

    public function edit(Categories $category)
    {
        return view('Categories.edit', compact('category'));
    }
}


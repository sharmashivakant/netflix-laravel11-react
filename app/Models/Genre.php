<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the comments for the Genre
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movies(): BelongsToMany
    {
        return $this->BelongsToMany(Movie::class);
    }

    /**
     * Get the user that owns the Genre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function series(): BelongsToMany
    {
        return $this->BelongsToMany(Serie::class);
    }
}

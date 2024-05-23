<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Board extends Model
{
    use HasFactory;

    public function trellolists(): HasMany
    {
        return $this->hasMany(Trellolist::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    use HasFactory;

    // $fillable fields can be mass assigned
    protected $fillable = ['title', 'content','position'];

    public function trellolist(): BelongsTo
    {
        return $this->belongsTo(Trellolist::class);
    }

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'card_user');
    }
}

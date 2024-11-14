<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dieta extends Model
{
    public function clientes(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

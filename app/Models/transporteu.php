<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transporteu extends Model
{
    use HasFactory;

    public function camion() {
        return $this->hasMany(union::class, 'id')
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class union extends Model
{
    use HasFactory;
    public function transporte(){
        return $this->belongsTo(transporteu::class,'transporte_codigo');
    }
}

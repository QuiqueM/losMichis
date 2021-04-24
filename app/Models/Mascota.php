<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    #Relacion uno a muchos inversa
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}

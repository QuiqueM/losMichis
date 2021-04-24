<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'telefono', 'correo'];

    #Relación uno a muchos
    public function mascotas()
    {
        return $this->hasMany(Mascota::class);
    }
}

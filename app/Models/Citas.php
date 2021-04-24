<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'apdated_at'];

    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}

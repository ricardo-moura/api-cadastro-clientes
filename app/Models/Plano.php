<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    protected $primarykey = 'id_postagem';

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    //add cpf, nome e data_nascimento to fillable
    protected $fillable = ['cpf', 'nome', 'data_nascimento'];
}

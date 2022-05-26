<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrumento extends Model
{
 

    protected $table= 'instrumentos';

    protected $fillable=[ 'tipo',
                          'nombre',
                          'modelo',
                          'descripcion',
                          'cantidad',
                          'precio',
                          'imagen'];
}

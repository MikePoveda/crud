<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table="productos";
    protected $primaryKey="idproductos";
    protected $fillable=['nombre','descripcion','precio','cantidad'];


}

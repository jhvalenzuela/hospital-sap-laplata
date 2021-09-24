<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainslider extends Model
{
    use HasFactory;
    
    protected $table = 'sliderprincipal';

    protected $fillable = ['slideTitulo', 'slideDescription', 'slideImagen', 'created_at', 'updated_at'];
}

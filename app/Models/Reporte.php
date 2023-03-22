<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'ubicacion',
        'telefono',
        'folio'
    ];

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}

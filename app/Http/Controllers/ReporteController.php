<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Contacto;

class ReporteController extends Controller
{
    public function registroReporte ($id){
        $usuario = Usuario::find($id);
        return view('reporte', compact('usuario'));
    }

    public function reportarUsuario ($id){
        $contactos= Contacto::where('usuario_id', '=', $id)->get();
        
    }
}

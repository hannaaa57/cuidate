<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Contacto;
use Mail;
use App\Mail\DemoMail;

class ReporteController extends Controller
{
    public function registroReporte ($id){
        $usuario = Usuario::find($id);
        return view('reporte', compact('usuario'));
    }

    public function reportarUsuario (Request $request, $id){
        $contacto= Contacto::where('usuario_id', '=', $id)->first();
        $usuario = Usuario::find($id);

        $mailData = [
            'title' => 'Reporte de emergencia',
            'ubicacion' => $request->input('ubicacion'),
            'telefono' => $request->input('telefono'),
            'usuario' => $usuario,
            'contacto' => $contacto
        ];

        Mail::to($contacto->email)->send(new DemoMail($mailData));

        return view('gracias');

    }
}

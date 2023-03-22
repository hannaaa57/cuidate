<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\DemoMail;
use App\Models\Reporte;
use App\Models\Usuario;
use App\Models\Contacto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function consultar(){
        $reportes = Reporte::with('usuario')->paginate(10);

        return view('consultarReportes', compact('reportes'));
    }

    public function registroReporte ($id){
        $usuario = Usuario::find($id);
        return view('reporte', compact('usuario'));
    }

    public function reportarUsuario (Request $request, $id){
        $contacto= Contacto::where('usuario_id', '=', $id)->first();
        $usuario = Usuario::find($id);

        $folio =Str::random(6);

        $reporte = Reporte::create([
            'usuario_id' => $usuario->id,
            'ubicacion' => $request->input('ubicacion'),
            'telefono' => $request->input('telefono'),
            'folio' => $folio
        ]);

        $mailData = [
            'title' => 'Reporte de emergencia',
            'ubicacion' => $request->input('ubicacion'),
            'telefono' => $request->input('telefono'),
            'usuario' => $usuario,
            'contacto' => $contacto,
            'reporte' => $reporte
        ];

        Mail::to($contacto->email)->send(new DemoMail($mailData));

        return view('gracias', compact('usuario', 'reporte'));

    }
}

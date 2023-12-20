<?php

namespace App\Http\Controllers;

use App\Models\Curriculums;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $notificaciones = auth()->user()->unreadNotifications;
        $estado = Curriculums::all();

        //Limpioar notificacione leidas
        auth()->user()->unreadNotifications->markAsRead();
        if (auth()->user()->email == 'yhordiyhom65@gmail.com'){
            return view('Notificaciones.Index',[
                'notificaciones' => $notificaciones
            ]);
        }else{
            return view('Notificaciones.Index',[
                'estado' => $estado
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Curriculums;
use App\Notifications\NuevaNotificacion;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    public function index(){
        $solicitudes = Curriculums::all();
        return view('Admin.Solicitudes',compact('solicitudes'));
    }
    public function store($id){
        $user = User::where('id',$id)->first();
        $cv = Curriculums::where('user_id',$user['id'])->first();

        $cv->update(['estado' => 'Aceptado']);
        $cv->save();
    }
    public function delete(){

    }
}

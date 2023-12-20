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
        $cvacept = Curriculums::where('user_id',$user['id'])->first();

        $cvacept->update(['estado' => 'Aceptado']);
        $cvacept->save();

        $add = User::where('id',$user['id'])->first();

        $add->update(['usuario' => 'Veterinario']);
        $add->save();

        return redirect()->back();
    }
    public function delete(){

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Curriculums;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    public function index(){
        $solicitudes = Curriculums::all();
        return view('Admin.Solicitudes',compact('solicitudes'));
    }
}

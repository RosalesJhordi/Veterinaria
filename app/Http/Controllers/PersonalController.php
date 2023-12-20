<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Productos;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        $personal = User::where('usuario','Veterinario')->get();
        return view('Admin.Personal',compact('personal'));
    }
}

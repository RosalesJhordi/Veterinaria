<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request, Productos $producto){
        $user = $request->user();

        if ($user->likes->contains($producto->id)) {
            $user->likes()->detach($producto);
        }else{
            $user->likes()->attach($producto);
        }
        return back();
    }
}

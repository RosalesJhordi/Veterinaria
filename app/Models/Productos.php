<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'categoria',
        'descripcion',
        'precio',
        'descuento',
        'imagen'
    ];


    public function likes(){
        return $this->hasMany(Likes::class, 'producto_id', 'id');
    }
    public function likedBy()
    {
        return $this->belongsToMany(User::class, 'likes', 'producto_id', 'user_id')->withTimestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculums extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cv',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

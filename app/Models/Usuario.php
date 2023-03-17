<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Usuario extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table = "usuarios";
    protected $fillable = ['nome', 'email', 'senha', 'isAdmin'];

    public function getAuthPassword(){  
        return $this->senha;
    }
}
    
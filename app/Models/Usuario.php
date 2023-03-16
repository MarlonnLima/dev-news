<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\contracts\Auth\Authenticatable;
class Usuario extends Model
{
    
    public $timestamps = false;
    use HasFactory;

    protected $table = "usuarios";
    protected $fillable = ['nome', 'email', 'senha', 'isAdmin'];

    public function setPasswordAttribute($value)
{
   $this->attributes['password'] = bcrypt($value);
}
}

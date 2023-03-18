<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $table = "noticias";
    protected $fillable = ['titulo', 'descricao', 'categoria', 'imagem', 'slug', 'id_user'];

}

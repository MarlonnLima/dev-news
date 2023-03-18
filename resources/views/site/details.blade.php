@extends('layouts.layout')
@section('title', 'Detalhes noticia')
@section('conteudo')

{{dd($noticia)}};
<div class = "container text-center my-5">
<img class = "w-50 news-img"src = "/storage/{{$noticia->imagem}}">
<h1 class ="text-danger mt-5">{{$noticia->titulo}}</h1>
<span class ="text-secondary">{{$noticia->categoria}}</span>
<div>   
    {!!$noticia->descricao!!}
</div>
</div>

@endsection
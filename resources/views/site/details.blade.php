@extends('layouts.layout')
@section('title', 'Detalhes noticia')
@section('conteudo')

<div class = "container text-center my-5 border">
<img class = "w-100 news-img my-2"src = "/storage/{{$noticia->imagem}}">
<h1 class ="text-danger mt-5">{{$noticia->titulo}}</h1>
<span class ="text-secondary">{{$noticia->categoria}}</span>
<div>   
    {!!$noticia->descricao!!}
</div>
</div>

@endsection
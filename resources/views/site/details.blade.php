@extends('layouts.layout')
@section('title', 'Detalhes noticia')
@section('conteudo')

<div class = "container text-center my-5">
<img class = "w-50 news-img"src = "/uploads/{{$noticia->imagem}}">
<h1 class ="text-danger mt-5">{{$noticia->titulo}}</h1>
<span class ="text-secondary">{{$noticia->categoria}}</span>
<!-- foi colocado uma div porque o que vem do banco já é uma tag p -->
<div>   
    {!!$noticia->descricao!!}
</div>
</div>

@endsection
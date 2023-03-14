@extends('layouts.layout')
@section('title', 'Home')
@section('conteudo')

<h1 class ="titulo">Noticias</h1>
<div class = "row mx-4">
@foreach ($noticias as $noticia)

<div class="card col-4 mx-3 my-2" style="width: 18rem;">
  <img class="card-img-top my-2" src="/uploads/{{$noticia->imagem}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$noticia->titulo}}</h5>
    <span class ="categoria-noticia">{{$noticia->categoria}}</span>
    <p class="card-text">@php echo substr(strip_tags($noticia->descricao), 0, 100) . '...';@endphp</p>
    <a href="{{route('site.details', $noticia->id)}}" class="btn btn-warning">Veja mais!</a>
  </div>
</div>
        
@endforeach

</div>


<div class = "d-flex justify-content-center">
  <div>
  {{$noticias->links()}}
  </div>
</div>
@endsection
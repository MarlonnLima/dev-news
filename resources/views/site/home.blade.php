@extends('layouts.layout')
@section('title', 'Home')
@section('conteudo')
@if(Auth::check() && auth()->user()->isAdmin == 1)
<a class = 'botao fundo-roxo texto-branco botao-flutuante' title="Adicionar" href='{{route('site.adicionarNoticia')}}'><i class="fa-solid fa-plus tamanho-icone"></i></a>

@endif

<h1 class ="titulo my-4 mx-0">Noticias</h1>
<div class = "row mx-4 justify-content-center">
@foreach ($noticias as $noticia)

<!-- Modal Delete-->
<div class="modal fade" id="staticBackdrop{{$noticia->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Atenção!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Você tem certeza que quer deletar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary fundo-roxo" href = "{{route('site.deleteNoticia', $noticia->id)}}">Deletar</a>
      </div>
    </div>
  </div>
</div>
<!--End Modal Delete -->


<div class="card col-4 mx-3 my-2" style="width: 18rem;">
  <img class="card-img-top my-2" src="/storage/{{$noticia->imagem}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$noticia->titulo}}</h5>
    <span class ="categoria-noticia">{{$noticia->categoria}}</span>
    <p class="card-text">@php echo substr(strip_tags($noticia->descricao), 0, 100) . '...';@endphp</p>
    <a href="{{route('site.details', $noticia->id)}}" class="btn btn-warning">Veja mais!</a>
    @if(Auth::check() && auth()->user()->isAdmin == 1)
    <hr>
    <div class ="botoes-noticia">
      <a class = "texto-roxo" href = "{{route('noticia.editarNoticia', $noticia->id)}}"><i class="fa-solid fa-pencil texto-roxo"></i></a>
      <a class = "texto-roxo" href = "{{route('noticia.atualizarFoto', $noticia->id)}}"><i class="fa-solid fa-camera-rotate texto-roxo"></i></a>
      <button type="button" class="texto-roxo" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$noticia->id}}">
        <i class="fa-solid fa-trash texto-roxo"></i>
      </button>
    </div>

    @endif
  </div>
</div>
        
@endforeach

</div>


<div class = "d-flex justify-content-center my-3">
  <div>
  {{$noticias->links()}}
  </div>
</div>
@endsection
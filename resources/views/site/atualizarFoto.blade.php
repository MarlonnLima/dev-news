@extends('layouts.layoutWithoutBanner')
@section('title', 'Atualizar Foto')
@section('conteudo')
@if(Auth::check() && auth()->user()->isAdmin == 1)
<h1 class = "titulo">Atualizar Imagem</h1>
        <form class ="formulario" action="{{route('noticia.addnovafoto')}}" method = "POST" enctype = "multipart/form-data">
            @csrf
                <input type = "hidden" value = "{{$id}}" name = "id">

                <div class ="container-img">
                    <label id = "label-imagem" class = "texto-roxo w-100 text-center troca-foto mx-auto" for="imagem">
                    <i class="fa-sharp fa-solid fa-camera foto"></i>
                    <input type="file" name = "imagem" id = "imagem" required> 
                    </label>
                </div>
            <div class ="container w-100">
                <button type = "submit" name = "btn-atualizar-foto" class ="botao texto-branco fundo-roxo w-100">Atualizar</button>
                <a href = "{{route('site.index')}}" class ="botao texto-branco fundo-roxo text-center d-block w-100">Listar Noticias</a>
            </div>
        </form>
    </div>
</div>
@endif
@endsection
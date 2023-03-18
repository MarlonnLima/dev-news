@extends('layouts.layoutWithoutBanner')
@section('title', 'Editar Noticia')
@section('conteudo')

@if(Auth::check() && auth()->user()->isAdmin == 1)
<form class ="formulario" action="{{route('noticia.enviarEdicao')}}" method = "POST" enctype = "multipart/form-data">
    @csrf
    <h1 class = "titulo">Cadastrar Noticia</h1>
        <div class ="input-container">
            <div>
                <input type="hidden" name="id" value = "{{$noticia->id}}" required>
            </div>
            <div>
                <input type="text" name="titulo" id="titulo" class ="fundo-roxo-40" maxlength="65" placeholder = "  Titulo" value = "{{$noticia->titulo}}" required>
            </div>
            <div>
                <input type="text" name="categoria" id="categoria" class ="fundo-roxo-60" maxlength = "20" placeholder = "  Categoria" value = "{{$noticia->categoria}}" required>
            </div>
            <div>   
                <textarea name="descricao" id="descricao" cols="94" rows="6" required placeholder = "  Descrição">{{$noticia->descricao}}</textarea>
            </div>
        </div>
            <div class ="area-buttons-cadastro">
                <button type = "submit" name = "btn-atualizar" class ="botao texto-branco fundo-roxo w-100">Atualizar</button>
                <a href = "{{route('site.index')}}" class ="botao texto-branco fundo-roxo w-100 d-block text-center">Noticias</a>
            </div>
    </form>
</div>
</div>


@endif

@endsection
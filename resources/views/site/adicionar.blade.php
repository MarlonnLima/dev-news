@extends('layouts.layoutWithoutBanner')
@section('title', 'Cadastrar Noticia')
@section('conteudo')
@if(Auth::check() && auth()->user()->isAdmin == 1)
<form class ="formulario" action="{{route('noticia.cadastrar')}}" method = "POST" enctype = "multipart/form-data">
    @csrf
    <h1 class = "titulo">Cadastrar Noticia</h1>
        <div class ="input-container">
            <div>
                <input class = "fundo-roxo-40" type="text" name="titulo" id="titulo" maxlength="65" placeholder = "  Titulo"required>
            </div>
            <div>
                <input class = "fundo-roxo-60" type="text" name="categoria" id="categoria" maxlength = "20" placeholder = "  Categoria" required>
            </div>
            <div>   
                <textarea class = "fundo-roxo-80" name="descricao" id="descricao" cols="94" rows="6" placeholder = "  Descrição"></textarea>
            </div>
        </div>
        
        <div class ="container-img">
            <label id = "label-imagem" class = "texto-roxo my-2" for="imagem">Inserir imagem  <i class="fa-solid fa-camera"></i>
                <input type="file" name = "imagem" id = "imagem"> 
            </label>
        </div>
        <input type= "hidden" name = "id_user" value ="{{auth()->user()->id}}">
        
        <div class ="area-buttons-cadastro">
            <button type = "submit" name = "btn-cadastrar" class ="botao texto-branco fundo-roxo buttons-cadastro">Cadastrar</button>
            <a class = "botao texto-branco buttons-cadastro fundo-roxo" href = "index.php">Noticias</a>
        </div>
    </form>
</div>
</div>
@else
@php
 return redirect()->route('site.index')
@endphp
@endif
@endsection
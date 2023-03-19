@extends('layouts.layoutWithoutBanner')
@section('title', 'Cadastre-se')
@section('conteudo')
<form class ="formulario" action="{{route('site.criarUsuario')}}" method = "POST" enctype = "multipart/form-data">
   @csrf
    <div class ="input-container">
    <h1 class = "titulo">Cadastrar</h1>
    @if(isset($erro))
        {{$erro}}
    @endif
        <div>
            <input class = "fundo-roxo-40" type="text" name="name" id="titulo" placeholder = "  Nome" required>
        </div>
        <div>
            <input class = "fundo-roxo-60" type="email" name="email" id="titulo" placeholder = "  Email" required>
        </div>
        <div>
            <input class = "fundo-roxo-80" type="password" name="password" id="categoria" placeholder = "  senha" required>
        </div>
    </div>            

    <div class ="area-buttons-cadastro">
        <button type = "submit" name = "btn-cadastrar" class ="botao texto-branco fundo-roxo buttons-cadastro w-100">Cadastrar</button>
     </div>
</form>
</div>
</div>
@endsection
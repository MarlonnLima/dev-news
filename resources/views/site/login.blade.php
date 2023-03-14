@extends('layouts.layoutWithoutBanner')
@section('title', 'Logue ou Cadastre-se')
@section('conteudo')
<form class ="formulario" action="{{route('site.store')}}" method = "POST" enctype = "multipart/form-data">
    @csrf
    <div class ="input-container">
    <h1 class = "titulo">Entrar</h1>
        <div>
            <input class = "fundo-roxo-40" type="text" name="usuario" id="titulo" placeholder = "  Usuario"required>
        </div>
        <div>
            <input class = "fundo-roxo-60" type="text" name="senha" id="categoria" placeholder = "  senha" required>
        </div>
    </div>            

    <div class ="area-buttons-cadastro">
        <button type = "submit" name = "btn-logar" class ="botao texto-branco fundo-roxo buttons-cadastro">Entrar</button>
        <a href ="{{route('site.cadastrar')}}" class ="botao texto-branco fundo-roxo buttons-cadastro">Cadastrar</a>
     </div>
</form>
</div>
</div>
@endsection
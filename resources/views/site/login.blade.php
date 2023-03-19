@extends('layouts.layoutWithoutBanner')
@section('title', 'Logue ou Cadastre-se')
@section('conteudo')

<form class ="formulario" action="{{route('login.auth')}}" method = "POST" enctype = "multipart/form-data">
    @csrf
    <div class ="input-container">
        <h1 class = "titulo">Entrar</h1>
            @if($mensagem = Session::get('erro'))
            {{$mensagem}}
            @endif
            @if($errors->any())
            @foreach ($errors->all() as $erro)
                {{$erro}}
            @endforeach
            @endif
        <div>
            <input class = "fundo-roxo-40" type="text" name="email" id="titulo" placeholder = "  Email" >
        </div>
        <div>
            <input class = "fundo-roxo-60" type="password" name="password" id="categoria" placeholder = "  senha">
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
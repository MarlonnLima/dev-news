@extends('layouts.layoutWithoutBanner')
@section('title', 'Cadastre-se')
@section('conteudo')
<form class ="formulario" action="php_action/register.php" method = "POST" enctype = "multipart/form-data">
    <div class ="input-container">
    <h1 class = "titulo">Cadastrar</h1>
        <div>
            <input class = "fundo-roxo-40" type="text" name="nome" id="titulo" placeholder = "  Nome" required>
        </div>
        <div>
            <input class = "fundo-roxo-60" type="text" name="usuario" id="titulo" placeholder = "  Email" required>
        </div>
        <div>
            <input class = "fundo-roxo-80" type="text" name="senha" id="categoria" placeholder = "  senha" required>
        </div>
    </div>            

    <div class ="area-buttons-cadastro">
        <button type = "submit" name = "btn-cadastrar" class ="botao texto-branco fundo-roxo buttons-cadastro w-100">Cadastrar</button>
     </div>
</form>
</div>
</div>
@endsection
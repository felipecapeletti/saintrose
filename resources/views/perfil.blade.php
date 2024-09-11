<!-- ESSA BLADE É O PERFIL VISITAVEL -->


@extends('layouts.main')
@section('content')

<div class="dashboard">

    <div class="cabecario">
        <h2 class="titulo">{{Auth::user()->name}}</h2>
        <a href="" class="meus-projetos"><p>Meus Projetos</p></a>
    </div>
    <div class="conteudo">
        <img src="" alt="imagem-perfil">
        <div class="redes-sociais">
            <a href="" class="icone"></a>
        </div>
    </div>
    <div class="destaques">
        <h1>Projeto Destaque</h1>
        <!-- foreach (imagensdestaque as imagemdestaque) -->
            <a href="link para imagem grande" class="destaque"><img src="" alt="imagens do carro"></a>
        <!-- endoforeach -->
    </div>
</div>

@endsection
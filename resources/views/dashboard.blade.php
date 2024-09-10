@extends('layouts.main')
@section('content')


<div class="dashboard">

    <div class="titulo">
        <h2>{{Auth::user()->name}}</h2>
    </div>
    <div class="conteudo">
        <img src="" alt="imagem-perfil">
        <div class="redes-sociais">
            <a href="" class="icone"></a>
        </div>
    </div>
    <div class="destaques">
        <h1>PROJETO FAVORITO</h1>
        <!-- foreach (imagensdestaque as imagemdestaque) -->
            <a href="link para imagem grande" class="destaque"><img src="" alt="imagens do carro"></a>
        <!-- endoforeach -->
    </div>
</div>


@endsection
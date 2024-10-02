@extends('layouts.main')
@section('content')

<div class="feed">
    
    <!-- foreach (publicações da categoria) -->

        <div class="linha">
            <div class="publicacao">
                <div class="informacoes">
                    <a href=""><p class="h4"> -- AUTOR DA PUBLICAÇÃO -- </p></a>
                    <p class="h4">-- DATA DA PUBLICAÇÃO --</p>
                </div>
                <div class="conteudo">
                    <h3 class="titulo h3"> </h3>
                    <img src="" alt="" class="capa">
                </div>
            </div>
        </div>

    <!-- endforeach -->

                            PAGINAÇÃO
</div>

@endsection
@extends('layouts.main')
@section('content')
    <div class="meus-projetos">
        <h1 class="letreiro">Projetos de {{Auth::user()->name}}</h1>

        @if($projetos->isEmpty())
            <div class="exposicao">
                <img src="images\luigi.webp" alt="">
                <p>Você ainda não tem projetos.</p>
            </div>
        @else
            <div class="exposicao">
                @foreach($projetos as $projeto)
                    <a href="projeto/{{$projeto->id}}" class="card-projeto">
                        <img src="{{ asset('storage/' . $projeto->capa) }}" class="card-img" alt="proejto-img">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
@endsection



                            <!--<h5 class="card-title">{ $projeto->modelo }} ({ $projeto->ano }})</h5>
                            <p class="card-text">{ $projeto->categoria }}</p>-->
 
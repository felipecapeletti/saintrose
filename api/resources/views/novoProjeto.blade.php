@extends('layouts.main')
@section('content')

    <div class="novo-projeto">

        <form action="/criar-projeto" class='formulario' method="POST" enctype="multipart/form-data">
            @csrf
    
            
            <img src="images\novoprojeto.png" alt="novoprojeto">

            <div class="grupo">
                <div class="campos">
                    <label for="capa">Imagem de Capa:</label>
                    <input type="file" name="capa" id="capa" class="input-img" required>
                </div>
                <div class="campos">
                    <label for="fotos">Fotos:</label>
                    <input type="file" name="fotos[]" multiple>
                </div>
            </div>

            <div class="grupo">
                <div class="campos">
                    <label for="categoria">Categoria do Projeto:</label>
                    <select name="categoria" id="categoria">
                        <option value="-">- selecionar categoria -</option>
                        <option value="classicos">Classicos</option>
                        <option value="esportivos">Esportivos</option>
                        <option value="jdm">JDM</option>
                        <option value="stance">Stance</option>
                        <option value="suv">SUV</option>
                        <option value="motocicletas">Motocicletas</option>
                    </select>
                </div>
            </div>

            <div class="grupo">
                <div class="campos">
                    <label for="modelo">Modelo:</label>
                    <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Ex: mitsubishi eclipse" required>
                </div>
                <div class="campos">
                    <label for="ano">Ano:</label>
                    <select name="ano" id="ano" class="input-ano">
                        <option value="">- selecionar -</option>
                        @for ($ano = date('Y'); $ano >= 1900; $ano--)
                            <option value="{{ $ano }}">{{ $ano }}</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="grupo">
                <div class="campos">
                    <label for="potencia">Potência:</label>
                    <input class="input-potencia" type="text" name="potencia" id="potencia" class="form-control" placeholder="cv / cc">
                </div>
                <div class="campos">
                    <label for="motor">Motor:</label>
                    <input type="text" name="motor" id="motor" class="form-control" >
                </div>
                <div class="campos">
                    <label for="tipo">Tipo:</label>
                    <select name="tipo" id="tipo">
                        <option value="-">- selecionar -</option>
                        <option value="aspirado">Aspirado</option>
                        <option value="turbo">Turbo</option>
                        <option value="supercharger">SuperCharger</option>
                    </select>
                </div>
            </div>

            <div class="grupo">
                <div class="campos">
                    <label for="pintura">Pintura ou Envelopado:</label>
                    <select name="pintura" id="pintura">
                        <option value="-">- selecionar -</option>
                        <option value="pintura">Pintura</option>
                        <option value="envelope">Envelope</option>
                    </select>
                </div>
            </div>

            <div class="grupo">
                <div class="campos">
                    <label for="suspensao">Suspensão:</label>
                    <input type="text" name="suspensao" id="suspensao" class="form-control" >
                </div>
                <div class="campos">
                    <label for="rodas">Rodas:</label>
                    <input type="text" name="rodas" id="rodas" class="form-control" placeholder="tamanho / modelo" >
                </div>
            </div>

            <div class="campos">
                <label for="modificacoes">Modificações Extras:</label>
                <textarea rows="6" id="modificacoes" name="modificacoes" placeholder="Descrição do projeto e modificações extras."></textarea>
            </div>

            <button type="submit" class="btn-formulario">Postar Projeto</button>
        </form>
        
    </div>

@endsection
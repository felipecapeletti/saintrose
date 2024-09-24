@extends('layouts.main')
@section('content')

    <div class="update">

        <img src="images\editarperfil.png" alt="letreiro">
        
        <div class="formularios">
            <form action="/imagem-update" class="formulario" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="uploadfoto">
                    
                    <label for="profile_picture">Nova Imagem:</label>
                    <input type="file" name="profile_picture" id="profile_picture">

                </div>

                <button type="submit" class="btn-formulario">Atualizar Imagem</button>
            </form>

            <form action="/perfil-update" class="formulario" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="uploadfoto">
                    
                    <div>
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" required>
                    </div>
                
                    <div>
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" required>
                    </div>

                </div>

                <button type="submit" class="btn-formulario">Atualizar Perfil</button>
            </form>
        </div>

        <div>
            <form action="/senha-update" class="formulario-senha" method="POST">
                @csrf
                @method('PUT')

                <div class="campos">
                    <label for="password">Nova Senha:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="campos">
                    <label for="password_confirmation">Confirmação de Senha:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>

                <button type="submit" class="btn-formulario">Atualizar</button>
            </form>
        </div>
        

    </div>

@endsection
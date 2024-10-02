@extends('layouts.main')
@section('content')

    <div class="faleConosco">
        <form action="/salvar-contato" class="formulario" method="post" enctype="multipart/form-data">
            @csrf

           <img src="images\contato.png" alt="contatoImg">

            <div class="campos">
                <div class="linha">
                    <label for="nome">Nome:</label>
                    <input type="text" class="input" id="nome" name="nome" required >
                </div>

                <div class="linha">
                    <label for="tipo-de-mensagem">Opção:</label>
                    <select name="tipo" id="tipo" required>
                        <option value="">-- Selecione --</option>
                        <option value="Contato">Contato</option>
                        <option value="Bug">Reportar Bug</option>
                        <option value="Denuncia">Denunciar Usuário</option>
                    </select>
                </div>

                <div class="linha">
                    <label for="contato">Remetente:</label>
                    <input type="text" class="input" id="contato" name="contato" placeholder="Email ou Whatsapp(com DDD):" required >
                </div>

                <div class="linha">
                    <label for="texto">Mensagem:</label>
                    <textarea rows="5" id="mensagem" name="mensagem" required></textarea>
                </div>
            </div>

            <button class="btn-formulario" type="submit">Enviar</button>
        </form>         
    </div>

@endsection 
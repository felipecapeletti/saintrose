<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Projeto;


class RouteController extends Controller
{
    public function home ()
    {

        return view ('home');
    }

    public function contato ()
    {

        return view ('contato');
    }

//Meu Perfil 
    public function meuperfil ()
    {

        return view ('dashboard');
    }

    public function novoprojeto ()
    {

        return view ('novoProjeto');
    }

    public function meusprojetos ()
    {

        $user_id = Auth::id();

        $projetos = Projeto::where('user_id', $user_id)->get();

            return view ('meusProjetos', compact('projetos'));
    }

    public function editperfil ()
    {

        return view ('perfilUpdate');
    }

//Perfil de Usuários
    public function perfilacess ($id)
    {

        $user = User::findOrFail($id);

        return view ('perfil', compact('user'));
    }

    public function projetos ()
    {

        return view ('projetos');
    }

// Feeds


    public function feed ()
    {

        return view ('feed');
    }

    public function esportivos ()
    {

        return view ('esportivos');
    }

    public function jdm ()
    {

        return view ('jdm');
    }

    public function classicos ()
    {

        return view ('classicos');
    }

    public function stance ()
    {

        return view ('stance');
    }

    public function suv ()
    {

        return view ('suv');
    }

    
    public function motocicletas ()
    {

        return view ('motocicletas');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function meuperfil ()
    {

        return view ('dashboard');
    }

    public function meusprojetos ()
    {

        return view ('meusprojetos');
    }

    public function perfilvisitado ()
    {

        return view ('perfil');
    }

    public function editperfil ()
    {

        return view ('perfilUpdate');
    }

    public function projetos ()
    {

        return view ('projetos');
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

    
    public function feed ()
    {

        return view ('feed');
    }
}

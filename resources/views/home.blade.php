@extends('layouts.main')
@section('content')
    
<div class="home-page">
    <div class="banner-block">
        <img src="\images\letreiro-categorias.png" alt="">
        <div class="banner-line">
            <a href="#">
                <img src="\images\esportivos-car.png" class="banner" salt="banner1">
            </a>
            <a href="#">
                <img src="\images\jdm-car.png" class="banner" alt="banner2">
            </a>
        </div>
        <div class="banner-line">
            <a href="#">
                <img src="\images\classicos-car.png" class="banner" alt="banner3">
            </a>
            <a href="#">
                <img src="\images\stance-car.png" class="banner" alt="banner4">
            </a>
        </div>
    </div>
    <div class="partner-block">
        <img src="\images\parceiros.png" alt="#">
        <div class="partner-links">
            <a href="#" class="link">
                <img src="\images\PARCEIRO.png" alt="#">
            </a>
            <a href="#" class="link">
                <img src="\images\PARCEIRO.png" alt="#">
            </a>
            <a href="#" class="link">
                <img src="\images\PARCEIRO.png" alt="#">
            </a>
        </div>
    </div>
</div>
    


@endsection
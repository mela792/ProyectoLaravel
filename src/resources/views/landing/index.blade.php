@extends('landing.layouts.landing')

@section('title', 'Inicio - ViajaMundo')

@section('header')
    <h1>ViajaMundo</h1>
@endsection

@section('content')

    <h2>Bienvenido a nuestra agencia de viajes</h2>

    <p>En ViajaMundo te ayudamos a descubrir
        nuevos destinos y vivir experiencias únicas.</p>

    <p>Ofrecemos viajes a diferentes ciudades
        con precios accesibles y actividades
        para disfrutar de tus vacaciones.</p>

    <div style="text-align: center;">
        <img src="{{ asset('images/portada.jpg') }}" alt="Imagen de destinos turísticos" width="600">
    </div>

@endsection
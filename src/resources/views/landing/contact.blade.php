@extends('landing.layouts.landing')

@section('title', 'Contacto - FPConnect')

@section('header')
    <h1>Contacto</h1>
@endsection

@section('content')

    <h2>Contacta con FPConnect</h2>

    <p>Si tienes alguna duda o sugerencia,
        puedes ponerte en contacto con nosotros.</p>

    <h3>Formulario de contacto</h3>

    <form>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">

        <br><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email">

        <br><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje"></textarea>

        <br><br>

        <button type="button">Enviar</button>
    </form>

@endsection
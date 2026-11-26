<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>

<body>

    <header>
        @include('_partials.nav') <!--incluye el menú-->
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>FPConnect &copy; 2026</p>
    </footer>

</body>

</html>
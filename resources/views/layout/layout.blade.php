<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Título -->
    <title>@yield('title')</title>
    @include('imports.imports')
</head>

<body>

    <!-- Navegação -->
    <x-navbar />

    <!-- Conteúdo -->
    @yield('content')

    <!-- Rodapé -->
    <x-footer />

</body>
</html>

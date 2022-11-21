<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - @yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
</head>

<body>
    @include('page.layouts._partials.navigation')
    @yield('content')
</body>

</html>

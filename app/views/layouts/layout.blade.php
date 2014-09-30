<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coorporativo</title>
    @include('layouts/css')
    @yield('css')
</head>

<body>

@include('layouts/menu')

<div class="col-xs-12">
    @yield('content')
</div>

@include('layouts/js')

@yield('js')
</body>
</html>
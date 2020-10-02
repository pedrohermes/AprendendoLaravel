<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando um crud com Laravel</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    @include('templates.navBar')

</head>
<body>
    @yield('content')

</body>
<footer>
    @include('templates.footer')
</footer>
</html>
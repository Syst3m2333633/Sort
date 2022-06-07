

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OnSort - @yield('title')</title>
</head>
<body>

    @section('sidebar')
        Contenu de la section 'sidebar' du parent
    @show

    <div class="container">
        @yield('content')
    </div>

</body>
</html>

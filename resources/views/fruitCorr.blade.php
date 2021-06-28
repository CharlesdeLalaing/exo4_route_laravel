<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    @foreach ( $fruits as $fruit)
        <h1>Il faut utilser le $loop:iteration pour avoir l'index deja pret pour les elements du tableau</h1>
        <h1> {{$loop->iteration}} : {{$fruit}}</h1>
    @endforeach

    <link rel="stylesheet" href="{{asset('js/app.js')}}">
</body>
</html>
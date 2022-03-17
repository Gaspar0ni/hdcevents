<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>

            <img src="/img/logo.jpg" alt="Logo">
            <a href="/">Home</a>
            <a href="/contact">Contato</a>
            <a href="/produtos">Produtos</a>

            <h1>Título</h1>
            @if(10 > 15)
                <p>A condição é true</p>
            @endif

            <p>{{$nome}}</p>

            @if($nome == "Pedro")
                <p>O nome é Pedro</p>
            @elseif($nome == "Matheus")
                <p>O nome é {{$nome}} e ele tem {{$idade}} anos e trabalha como {{$profissao}}!</p>
            @else
                <p>O nome não é Pedro</p>
            @endif


    </body>
</html>

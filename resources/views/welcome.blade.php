@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
            <img src="/img/logo.jpg" alt="Logo">
            
            <a href="/">Home</a>
            <a href="/contact">Contato</a>
            <a href="/produtos">Produtos</a>

            <img src="/img/eventos5.jpg" alt="Bannner" id="Banner">

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

            @for($i = 0; $i < count($arr); $i++)
                <p>{{ $arr[$i] }} - {{$i}}</p>
                @if($i == 2)
                    <p>O i é 2</p>
                @endif
            @endfor

            @foreach($nomes as $nome)
                <p>{{ $loop->index }}</p>
                <p>{{ $nome }}</p>
            @endforeach

            @php    
                $name = "João";
                echo $name
            @endphp

            <!-- Comentário do HTML -->
            {{-- Este é um comentário do Blade --}}
 
@endsection
@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
<h1>Produtos</h1>

@if($busca != '')
    <p>O usuário está buscando por: {{ $busca }}</p>
@endif

@endsection
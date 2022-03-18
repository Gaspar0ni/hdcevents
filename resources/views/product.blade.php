@extends('layouts.main')

@section('title', 'Produto {{$id}}')

@section('content')


    @if($id != null)
        <p>Exibindo produto id: {{ $id }}</p>
    @endif

@endsection
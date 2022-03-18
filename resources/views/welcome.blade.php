@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@foreach
    <p>{{ $event->title }} -- {{ $event->description }}</p>
@endforeach

@endsection
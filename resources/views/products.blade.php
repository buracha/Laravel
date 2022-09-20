@extends('layouts.main')

@section('tilte', 'Produtos')

@section('content')

<h1>Pagina de Produtos</h1>

@if($busca != '')
    <p>O usuário está buscando por: {{ $busca }}</p>
    @endif

@endsection
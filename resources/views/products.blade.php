@extends('layouts.main')

@section('title', 'Pagina de produtos')

@section('content')
<h1>Essa é a página de produtos</h1>

@if($busca != '')
    <p>O usuário está buscando por: {{ $busca }}</p>
@endif
@endsection

@extends('layouts.main')

@section('title', 'Pagina de produto')

@section('content')


    @if($id != null )
    <h1>Exibindo produto id: {{ $id }}</h1>
    @endif
    @endsection

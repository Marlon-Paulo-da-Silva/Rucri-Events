@extends('layouts.main')

@section('title', 'Rucri Events')

@section('content')
        <h1>Marlin Brabo</h1>
        <img src="/img/banner1.jpg" alt="banner1">
        @if(10 > 5)
            <p>A condição foi verdadeira</p>
        @endif
        
        @if($nome == "Marlon")
        <p>O nome é {{ $nome }}</p>
        @else
        <p>O nome não é Marlon</p>
        @endif

        @for($i = 0; $i < count($arr); $i++ )
            <p>{{ $arr[$i] }}</p>
        @endfor
@endsection
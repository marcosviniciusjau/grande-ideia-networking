@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

       <h1>Algum titulo</h1>
        <img src="/img/banner.jpg" alt="banner">
        
        <p>{{ $nome }}</p>
        @if($nome == "Pedro")
       <p>O nome é Pedro</p>
       @elseif($nome =="Matheus")
       <p>O nome é {{$nome}} e ele tem {{$idade}} anos</p>
       @else
        <p>O nome não é Pedro</p>
        @endif

        @for($i=0 ;$i < count($arr); $i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
        
        @endfor

        @if($i ==2)
            <p> O i é 2</p>
      
        @endif

        @foreach($nomes as $nome)
        <p>{{$loop->index}}</p>
        <p>{{$nome}}</p>
        @endforeach

@endsection
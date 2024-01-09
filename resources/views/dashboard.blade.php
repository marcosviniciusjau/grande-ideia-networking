@extends('layouts.main')

@section('title', 'Grande Ideia Networking')

@section('content')

<!DOCTYPE html>

<html lang="pt-br">

<head>

<title>
  Grande Ideia Networking
  
</title>


<meta charset="UTF-8">

<link rel="stylesheet" href="style.css">

</head>

<body>

<header>

</header>
<h1> Meus Eventos</h1>
  <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y',strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach


<footer>


</footer>

</body>

</html>

@endsection
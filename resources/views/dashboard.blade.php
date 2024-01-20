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
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

<header>

</header>
<h1> Meus Eventos</h1>

<div class="col-md-10 offset-md-1 dashboard-events-container">
  <table>
  <tbody>
    @if(count($eventsasparticipant) > 0)
       @foreach($eventsasparticipant as $event)
     <tr> 
<td>{{count($event->users)}}</td>
<td>{{ date('d/m/Y',strtotime($event->date)) }}</td>
<td>{{ $event->title }}</td>
</tr>
</tbody>
</table>

 @endforeach
    @else
    <p>Você ainda não está participando de nenhum evento <a href="/">ver todos os evento</a></p>
    @endif
</div>      
  <div id="cards-container" class="row">
      @if(count($events) > 0)
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y',strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants"> {{count($event->users)  }} Participantes</p>

                <a href="/events/{{$event->id}}" class="btn btn-primary botao-enviar">Saber mais</a>
                 <div class="btn-group dropend" role="group">
                <span class="material-symbols-outlined dropdown-toggle" data-bs-toggle="dropdown" id="more">
                more_vert
                </span>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="/events/edit/{{$event->id}}"><ion-icon name="create-outline"></ion-icon>Editar</a></li>
      <form action="/events/{{$event->id}}"method="POST">
        @csrf
        @method('DELETE')
        <button class="dropdown-item"   data-bs-toggle="modal" data-bs-target="#exampleModal"><ion-icon name="trash-outline"></ion-icon>Apagar</button>
      </form>
    </ul>
  </div>
  
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tem certeza que quer excluir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" type="submit">Excluir</button>
      </div>
    </div>
  </div>
</div>

            </div>
        </div>
        @endforeach
   @else
    <p>Você ainda não tem eventos, <a href="/events/create">criar eventos</a></p>
    @endif

<footer>


</footer>

</body>

</html>

@endsection
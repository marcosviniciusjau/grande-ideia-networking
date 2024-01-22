@extends('layouts.main')

@section('title', 'Editar Evento:' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Edite o seu evento:{{ $event->title }}</h1>
  <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')

    <div class="form-group">
      <label for="image">Imagem do Evento:</label>
      <input type="file" id="image" name="image" class="from-control-file">
      <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img_preview">
    </div>

    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" required value="{{$event->title}}">
    </div>

    <div class="form-group">
      <label for="date">Data do evento:</label>
      <input type="date" class="form-control" id="date" name="date" required value="{{date('Y-m-d', strtotime($event->date));}}">
    </div>

    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" required value="{{$event->city}}">
    </div>

    <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="private" id="private" class="form-control" required>
        <option value="0">Não</option>
        <option value="1" {{$event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
      </select>
    </div>

    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?" required >{{$event->description}}</textarea>
    </div>

    <div class="form-group">
      <label for="title">Adicione itens de infraestrutura:</label>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Palco"> Palco
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Open Food"> Open food
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Brindes"> Brindes
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Editar Evento">
  </form>
</div>

@endsection
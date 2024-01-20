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


<img src="/img/fundo.png" id="fundo">

<div class="categorias">

<h2>o que fazemos</h2>
</div>
<ul class="eventos">
<div class="eventos1">
<img id="circulo" src="/img/eventos_corporativos.jpg" class="thumbnail">
<p class="titulos">Eventos corporativos</p>
</div>

<div class="eventos1">
<img id="circulo" src="/img/networking.jpg" class="thumbnail">
<p class="titulos">Eventos de networking</p>
</div>

<div class="eventos1">
<img id="circulo" src="/img/jantar.jpg" class="thumbnail">
<p id="titulo_jantar">Eventos de relacionamento</p>
</div>

<div class="eventos1">
<img id="circulo" src="/img/inovacao.jpg" class="thumbnail">
<p class="titulos">Eventos de inovação</p>
</div>
</ul>
<h5>Próximos eventos</h5>
  @foreach($events as $event)
    <a href="/events/{{$event->id}}"><img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" id="eventos"></a>
@endforeach
<div class="sobre">
<div class="img-sobre">
  <img src="/img/sobre.jpg" id="img">
</div>
<div class="paragrafos">
<h2>Sobre nós</h2>
<p>A Grande Ideia Networking é uma empresa de eventos corporativos sediada em Jaú, São Paulo. Somos especialistas em criar eventos que conectam pessoas e ideias, gerando oportunidades de negócios e relacionamentos.</p>

<p id="pc">Nossa equipe é composta por profissionais experientes e criativos, que estão sempre buscando novas formas de surpreender nossos clientes. Temos uma ampla gama de serviços e soluções, que podem ser personalizados para atender às necessidades específicas de cada evento.</p>
</div>
</div>

<div class="categorias">

<h2>Cases de sucesso</h2>
</div>
<ul class="eventos">
<div class="eventos1 ">
<img id="circulo" src="/img/corporativos.png" class="thumbnail">
<p>Empresa de tecnologia que organizou um evento de lançamento de seu novo produto</p>
</div>

<div class="eventos1">
<img id="circulo" src="/img/treinamento.png" class="thumbnail">
<p>Empresa de consultoria que organizou um evento de treinamento para seus funcionários</p>
</div>

<div class="eventos1">
<img id="circulo" src="/img/varejo.png" class="thumbnail">
<p>Empresa de varejo que organizou um evento de relacionamento com seus clientes</p>
</div>


</ul>

</div>


<footer>


</footer>

</body>

</html>

@endsection
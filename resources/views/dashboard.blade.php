
    
               <center><img src="/img/ideia.png" alt="grandeideia" width="200px"></center>
 

    
       <center> <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meus Eventos') }}
        </h2></center>
   

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap');
    *{
        font-family: 'Lato', sans-serif;
        font-weight:bold;
    }
    body{
        background-image:url("./img/fundo_login.png");
        background-repeat: no-repeat;
        background-size:cover;
    }
    .entrar{
        font-family: 'Lato', sans-serif;
        font-size:medium;
        width:15%;
        height:5%;
        border-radius:25px;
        background-color:#f2a340;
        border-color:#f2a340;
        text-decoration:none;
    }
    #name,#email,#password,#password_confirmation{
        border-radius: 20px;
        height:5%;
    }
    #cards-container{
        display:flex;
        justify-content:center;
    }

    </style>

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


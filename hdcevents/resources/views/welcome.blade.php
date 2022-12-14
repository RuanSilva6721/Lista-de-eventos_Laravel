@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div id="search-container" class="col-md-12">
        <p id="title-buscar">Buscar Eventos</p>
        <form action="/" method="GET">
            <input type="text" name="search" id="search" class="form-control" placeholder="Digite a sua pesquisa">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
        <h2>Buscando por : {{$search}}</h2>
        @else
        <h2>Próximos Eventos</h2>
        @endif

        <p>Veja os eventoos dos próximos dias</p>
        <div id="cards-conatiner" class="row">
            @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-date" id="date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants"> x Participantes</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
             @endforeach
             @if(count($events) ==0 && $search)
             <p>Não foi possivel encontrar nenhum evento com {{$search}}! <a href="/">Ver todos</a></p>
            @elseif(count($events) ==0)
                <p>Não há eventos disponíveis</p>
             @endif
        </div>
    </div>



@endsection

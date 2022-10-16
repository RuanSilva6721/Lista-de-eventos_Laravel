@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <div id="search-container" class="col-md-12">
        <p id="title-buscar">Buscar Eventos</p>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder="Digite a sua pesquisa">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p>Veja os eventoos dos próximos dias</p>
        <div id="cards-conatiner" class="row">
            @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-date">12/10/2022</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants"> x Participantes</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
             @endforeach
        </div>
    </div>



@endsection
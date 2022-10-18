@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
   
    @if(count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <th scope="row"> {{$loop->index + 1}}</th>
                        <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                        <td>0</td>
                        <td>
                            <a href="#" class="btn btn-info edit-btn"> <ion-icons name="create-ouyline"></ion-icons> Editar</a> 
                            <form action="/events/{id}" method="Delete">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger delete-btn"> <ion-icons name="trash-outline"></ion-icons> Deletar</button>


                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    @else
        <p>Você ainda não possui eventos, <a href="/events/create">Criar Evento</a></p>
    @endif

</div>

@endsection

@extends('layouts.main')

@section('title', 'Editando' . $event->title)

@section('content')

<h1>Editando: {{$event->title}}</h1>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="title">Evento</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{$event->title}}">
    </div>
    <div class="form-group">
        <label for="date">Data do Evento</label>
        <input type="date" class="form-control" id="date" name="date" value="{{$event->date->format('Y-m-d')}}">
    </div>
    <div class="form-group">
        <label for="image">Imagem do Evento: </label>
        <input type="file" name="image" id="image" class="foorm-control-file">
        <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
    </div>
    <div class="form-group">
        <label for="city">Cidade</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento" value="{{$event->city}}">
    </div>
    <div class="form-group">
        <label for="private">O evento é privado?</label>
        <select name="private" id="private" class="form-control"> 
            <option value="0">Não</option>
            <option value="1" {{$event->privat ==1 ?"selected='selected'": ""}}>Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="description">descrição</label>
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento" rows="10">{{$event->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="title">Adicione itens de infraestrutura</label>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Palco"> Palco
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Cerveja"> Cerveja
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="food"> food
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Banheiros"> Banheiros
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Atualizar Evento">
    </form>
</div>

@endsection
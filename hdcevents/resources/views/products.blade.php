@extends('layouts.main')

@section('title', 'produtos')

@section('content')
<h1>Tela de produtos</h1>

@if($id==12)
<p>{{$id}}</p>
@else
<p>Não tem id 12</p>
@endif

@if($name)
<br>
<p>{{$name}}</p>
@else
<p>Não tem nenhum nome</p>
@endif

@endsection
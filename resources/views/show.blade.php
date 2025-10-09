@extends('layouts.app')
@section('title', 'trainer')
@section('content')
<div class="card text-center" style="width: 18rem; margin-top: 70px; margin-left: auto; margin-right: auto;">
    <img style="height: 100px; width: 100px;
    background-color: #EFEFEF; margin: 20px;"
    class="card-img-top rounded-circle mx-auto d-block"
    src="/images/{{ $trainer->avatar }}" alt="">
    <div class="card-body">
        <h5 class="card-title">{{ $trainer->nombre }}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
        <a href="/delete/{{ $trainer->id}}" class="btn btn-danger" onclick="confirmDelete({{ $trainer->id }})">Eliminar</a>
        <a href="/trainers/{{ $trainer->id }}/edit" class="btn btn-warning">Editar</a>
@endsection
@extends('layouts.app')
@section('title', 'Edit Trainer')
@section('content')
<form class="form-group" method="POST" action="{{ action([\App\Http\Controllers\TrainerController::class, 'update'], $trainer->id) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{ $trainer->nombre }}">
        <label for="">Apellido</label>
        <input type="text" class="form-control" name="apellido" value="{{ $trainer->apellido }}">
    </div>
    <div class="form-group">
        <label for="">Avatar</label>
        <input type="file" class="form-control" name="avatar" value="{{ $trainer->avatar }}">
    </div>
    <button type="submit" class="btn btn-primary" >Editar</button>
</form>
@endsection
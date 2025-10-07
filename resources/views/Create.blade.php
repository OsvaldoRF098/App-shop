@extends('layouts.app')
@section('title', 'Create Trainer')
@section('content')
<form class="form-group" method="post" action="/trainers" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control">
        </div>
        <div class="form-group">
            <label for="avatar">Avatar (opcional):</label>
            <input type="file" name="avatar" id="avatar" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary" onclick="showToastr()">Guardar</button>
</form>
@endsection
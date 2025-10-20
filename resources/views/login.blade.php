@extends('layouts.app')
@section('title', 'login')
@section('content')
<div class="container" style="margin-top: 70px; width: 400px;">
    <div class="card">
        <div class="card-header text-center">
            Login
        </div>
        <div class="card-body">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="userHelp">
                    <div id="userHelp" class="form-text">Ingresa tu nombre de usuario.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <a href="/trainers" class="btn btn-primary">Ingresar</a>
            </form>
        </div>
    </div>

@endsection
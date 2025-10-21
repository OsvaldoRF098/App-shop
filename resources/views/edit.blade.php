@extends('layouts.app')
@section('title', 'Edit Trainer')
@section('content')
{!! Form::model($trainer, ['route'=>['trainers.update', $trainer->id],'method'=>'PUT','files'=>'true']) !!}
@include('form')
{!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection
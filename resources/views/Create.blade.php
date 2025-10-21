@extends('layouts.app')
@section('title', 'Create Trainer')
@section('content')
{!! Form::open(['route'=>'trainers.store','method'=>'POST','files'=>'true']) !!}
@include('form')
{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection
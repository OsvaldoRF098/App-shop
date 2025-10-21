<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class'=>'form-control']) !!}
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::text('apellido', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('avatar', 'Avatar') !!}
    {!! Form::file('avatar') !!}
</div>
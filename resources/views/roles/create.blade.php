@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['url' => 'roles']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name')  !!}
            </div>
            <div class="form-group">
                {!! Form::label('display_name', 'Nombre a mostrar') !!}
                {!! Form::text('display_name')  !!}

            </div>
            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción') !!}
                {!! Form::text('description')  !!}
            </div>
            {!! Form::submit('Aceptar') !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
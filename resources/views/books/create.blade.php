@extends('layouts.app')

@section('content')
    <div class="container">
        {!!Form::open(['url'=>'books'])!!}

            @include('books._form')

        {!!Form::submit('Aceptar')!!}
        {!!Form::close()!!}
    </div>
@endsection
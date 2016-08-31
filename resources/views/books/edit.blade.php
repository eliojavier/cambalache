@extends('layouts.app')
@section('content')
    <div class="container">
        {!!Form::model($book, ['method' =>'PATCH', 'url'=>'books/' . $book->id])!!}

        @include('books._form')

        {!!Form::submit('Aceptar')!!}
        {!!Form::close()!!}
    </div>
@endsection

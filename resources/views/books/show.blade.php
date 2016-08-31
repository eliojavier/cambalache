@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Libro</th>
                    <th>Autor</th>
                    <th>Eliminar</th>
                    <th>Solicitar</th>
                </tr>
                </thead>
                <tbody>
                <tr data-id="{{$book->id}}">
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>
                        {!!Form::open(['url'=>'books/' . $book->id, 'method'=>'delete'])!!}
                        {!!Form::submit('Eliminar', ['class'=>'glyphicon glyphicon-trash'])!!}
                        {!!Form::close()!!}
                    </td>
                    <td><span class="glyphicon glyphicon-heart"> </span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
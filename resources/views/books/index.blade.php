@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Libro</th>
                    <th>Autor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr data-id="{{$book->id}}">
                        <td>{{$book->name}}</td>
                        <td>{{$book->author}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
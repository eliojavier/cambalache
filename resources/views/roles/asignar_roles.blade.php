@extends('layouts.app')
@section('content')
    <div class="container">
       {!!Form::open(['url'=>['roles/attachrole', ]])!!}
            <div class="form-group">
                {!!Form::label('user','Usuario')!!}
                {!!Form::select('user', $users)!!}
            </div>
            <div class="form-group">
                {!!Form::label('rol','Rol')!!}
                {!!Form::select('role', $roles)!!}
            </div>

            {!!Form::submit('Aceptar')!!}
       {!!Form::close()!!}
    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="container">
       {!!Form::open(['url'=>['permissions/attachpermission', ]])!!}
            <div class="form-group">
                {!!Form::label('role','Usuario')!!}
                {!!Form::select('role', $roles)!!}
            </div>
            <div class="form-group">
                {!!Form::label('permission','Permiso')!!}
                {!!Form::select('permission', $permissions)!!}
            </div>

            {!!Form::submit('Aceptar')!!}
       {!!Form::close()!!}
    </div>
@endsection
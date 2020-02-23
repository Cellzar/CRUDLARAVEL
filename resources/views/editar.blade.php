@extends('principal')

@section('content')
    <h3 class="text-center mb-3 pt-3">Actualización de usuario</h3>
    <form action="{{route('update', $usuarioActualizar->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text" name="nombres" class="form-control" value="{{$usuarioActualizar->nombres}}" required>
        </div>
        <div class="form-group">
            <input type="text" name="apellidos" class="form-control" value="{{$usuarioActualizar->apellidos}}" required>
        </div>
        <div class="form-group">
            <input type="text" name="cedula" class="form-control" value="{{$usuarioActualizar->cedula}}" required>
        </div>
        <div class="form-group">
            <input type="text" name="telefono" class="form-control" value="{{$usuarioActualizar->telefono}}" required>
        </div>
        <div class="form-group">
            <input type="date" name="fecha" class="form-control" value="{{$usuarioActualizar->fecha}}" required>
        </div>
        <button type="submit" class="btn btn-warning btn-block">Actualizar usuario</button>
    </form>
    @if (session('Actualizar'))
        <div class="alert alert-success mt-3">
            {{session('Actualizar')}}
        </div>
    @endif
@endsection
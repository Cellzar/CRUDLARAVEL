@extends('principal')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Agregar usuario
              </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="nombres" class="col-sm-5 col-form-label">Nombres</label>
                            <div class="col-sm-7">
                                <input type="text" name="nombres" class="form-control" value="{{old('nombres')}}" required>
                            </div>
                        </div>
                        @error('nombres')
                            <div class="alert alert-danger">
                                El nombres es requerido
                            </div>
                        @enderror
                        <div class="form-group row">
                            <label for="apellidos" class="col-sm-5 col-form-label">Apellidos</label>
                            <div class="col-sm-7">
                                <input type="text" name="apellidos" class="form-control" value="{{old('apellidos')}}" required>
                            </div>
                        </div>
                        @error('apellidos')
                            <div class="alert alert-danger">
                                Los apellidos son requeridos
                            </div>
                        @enderror
                        <div class="form-group row">
                            <label for="cedula" class="col-sm-5 col-form-label">Cedula</label>
                            <div class="col-sm-7">
                                <input type="text" name="cedula" class="form-control" value="{{old('cedula')}}" required>
                            </div>
                        </div>
                        @error('cedula')
                            <div class="alert alert-danger">
                                La cedula es requerida
                            </div>
                        @enderror
                        <div class="form-group row">
                            <label for="telefono" class="col-sm-5 col-form-label">Telefono</label>
                            <div class="col-sm-7">
                                <input type="text" name="telefono" class="form-control" value="{{old('telefono')}}" required>
                            </div>
                        </div>
                        @error('telefono')
                            <div class="alert alert-danger">
                                El telefono es requerido
                            </div>
                        @enderror
                        <div class="form-group row">
                            <label for="fecha" class="col-sm-5 col-form-label">Fecha de nacimiento</label>
                            <div class="col-sm-7">
                                <input type="date" name="fecha" class="form-control" value="{{old('fecha')}}" required>
                            </div>
                        </div>
                        @error('fecha')
                            <div class="alert alert-danger">
                                La fecha de nacimiento es requerido
                            </div>
                        @enderror
                        <div class="form-group row">
                            <div class="col-md-7"></div>
                            <button type="submit" class="btn btn-primary col-sm-4 btn-block">Agregar usuario</button>
                        </div>
                        
                    </form>
                    
                </div>
                <div class="modal-footer">
                
                </div>
            </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Cedula</th>
                    <th>Telefono</th>
                    <th>Fecha de nacimiento</th>
                    <th>Acciones</th>
                </tr>
                @foreach ($usuarios as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombres}}</td>
                        <td>{{$item->apellidos}}</td>
                        <td>{{$item->cedula}}</td>
                        <td>{{$item->telefono}}</td>
                        <td>{{$item->fecha}}</td>
                        <td>
                            <a href="{{route('editar', $item->id)}}" class="btn btn-warning">Editar</a>
                            <form action="{{route('eliminar', $item->id)}}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            <a href="{{route('ver', $item->id)}}">Vehiculo </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            @if (session('agregar'))
                        <div class="alert alert-success mt-3">
                            {{session('agregar')}}
                        </div>
            @endif
            @if (session('eliminar'))
                <div class="alert alert-danger mt-3">
                    {{session('eliminar')}}
                </div>
            @endif
            {{ $usuarios->links() }}
        </div>
        {{--<div class="col-md-5">
            <h3 class="text-center mb-4">Agregar usuario</h3>
             <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="nombres" class="form-control" value="{{old('nombres')}}" placeholder="Nombres" required>
                </div>
                @error('nombres')
                    <div class="alert alert-danger">
                        El nombres es requerido
                    </div>
                @enderror
                <div class="form-group">
                    <input type="text" name="apellidos" class="form-control" value="{{old('apellidos')}}" placeholder="Apellidos" required>
                </div>
                @error('apellidos')
                    <div class="alert alert-danger">
                        Los apellidos son requeridos
                    </div>
                @enderror
                <div class="form-group">
                    <input type="text" name="cedula" class="form-control" value="{{old('cedula')}}" placeholder="Cedula" required>
                </div>
                @error('cedula')
                    <div class="alert alert-danger">
                        La cedula es requerida
                    </div>
                @enderror
                <div class="form-group">
                    <input type="text" name="telefono" class="form-control" value="{{old('telefono')}}" placeholder="Telefono" required>
                </div>
                @error('telefono')
                    <div class="alert alert-danger">
                        El telefono es requerido
                    </div>
                @enderror
                <div class="form-group">
                    <input type="date" name="fecha" class="form-control" value="{{old('fecha')}}" placeholder="Fecha de nacimiento" required>
                </div>
                @error('fecha')
                    <div class="alert alert-danger">
                        La fecha de nacimiento es requerido
                    </div>
                @enderror
                <button type="submit" class="btn btn-success btn-block">Agregar usuario</button>
            </form>
            @if (session('agregar'))
                <div class="alert alert-success mt-3">
                    {{session('agregar')}}
                </div>
            @endif --}}
            
        </div>
    </div>
@endsection
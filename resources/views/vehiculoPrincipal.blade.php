@extends('principal')

@section('content')
<div class="container">
    <div class="">
        <div class="col-md-7">
            <div class="row">
                <h2>Información</h2>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="" class="font-weight-bold">Cedula:</label>
                    </div>
                <div class="col-md-4">
                    <label for="">{{$usuarioActualizar->cedula}}</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="" class="font-weight-bold">Nombres:</label>
                    </div>
                <div class="col-md-1">
                    <label for="">{{$usuarioActualizar->nombres}}</label>
                </div>
                <div class="col-md-2">
                    <label for="" class="font-weight-bold">Apellidos:</label>
                    </div>
                <div class="col-md-4">
                    <label for="">{{$usuarioActualizar->apellidos}}</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="" class="font-weight-bold">Fecha:</label>
                    </div>
                <div class="col-md-4">
                    <label for="">{{$usuarioActualizar->fecha}}</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="" class="font-weight-bold">Telefono:</label>
                    </div>
                <div class="col-md-4">
                    <label for="">{{$usuarioActualizar->telefono}}</label>
                </div>
            </div>
            
        </div>
        <hr>
        <div class="row">
            <div class="col-md-5">
                <div class="row mt-3">
                    <h2>Agregar vehiculo</h2>
                </div>
                <div class="row">
                    <form action="{{route('storev')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="placa" class="col-sm-5 col-form-label">Placa</label>
                            <div class="col-sm-7">
                                <input type="text" name="placa" class="form-control"  required>
                            </div>
                        </div>
                        @error('placa')
                            <div class="alert alert-danger">
                                La placa es requerida
                            </div>
                        @enderror
                        <div class="form-group row">
                            <label for="vin" class="col-sm-5 col-form-label">Vin</label>
                            <div class="col-sm-7">
                                <input type="text" name="vin" class="form-control"  required>
                            </div>
                        </div>
                        @error('vin')
                            <div class="alert alert-danger">
                                El vin es requerido
                            </div>
                        @enderror
                        <div class="form-group row">
                            <label for="year" class="col-sm-5 col-form-label">Año</label>
                            <div class="col-sm-7">
                                <input type="text" name="year" class="form-control"  required>
                            </div>
                        </div>
                        @error('year')
                            <div class="alert alert-danger">
                                El año es requerido
                            </div>
                        @enderror
                        <div class="form-group row">
                            <label for="modelo" class="col-sm-5 col-form-label">Modelo</label>
                            <div class="col-sm-7">
                                <input type="text" name="modelo" class="form-control"  required>
                            </div>
                        </div>
                        @error('modelo')
                            <div class="alert alert-danger">
                                El modelo es requerido
                            </div>
                        @enderror
                        <div class="form-group row">
                            <label for="color" class="col-sm-5 col-form-label">Color</label>
                            <div class="col-sm-7">
                                <input type="text" name="color" class="form-control"  required>
                            </div>
                        </div>
                        @error('color')
                            <div class="alert alert-danger">
                                El color es requerido
                            </div>
                        @enderror
        
                        <div class="form-group row">
                            <label for="kilometraje" class="col-sm-5 col-form-label">Kilometraje</label>
                            <div class="col-sm-7">
                                <input type="text" name="kilometraje" class="form-control"  required>
                            </div>
                        </div>
                        @error('color')
                            <div class="alert alert-danger">
                                El color es requerido
                            </div>
                        @enderror
        
                        <div class="form-group row">
                            {{-- <label for="color" class="col-sm-5 col-form-label">id</label> --}}
                            <div class="col-sm-7">
                                <input type="hidden" name="usuario_id" class="form-control" value="{{$usuarioActualizar->id}}" required>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary btn-block">Agregar</button>
                            <div class="row">
                                @if (session('agregar'))
                                        <div class="alert alert-success">
                                            {{session('agregar')}}
                                        </div>
                            @endif
                    </form>
                    
                    </div>
                    
                </div>
            </div>
            <div class="col-md-7">
                <div class="row mt-3">
                    <h2>Vehiculos</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Placa</th>
                                <th>Vin</th>
                                <th>Año</th>
                                <th>Modelo</th>
                                <th>Color</th>
                                <th>Kilometraje</th>
                                <th>usuario</th>
                                <th>Acción</th>
                            </tr>
                           <tr>
                                
                           </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>

@endsection
@extends('layout.layout')

@section('content')

<div class="card">
        <div class="card-header">
          Registrar Asesor
        <a href="{{ url('createA/create') }}" style="margin-left: 750px;" class="btn btn-info">Nuevo Asesor</a>
        </div>
        <div class="card-body" width:"50%">
                <table class="table">
                        <thead>
                            <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($asesores as $value)
                            <tr>
                            <td>{{ $value->codigo }}</td>
                            <td>{{ $value->nombre }}</td>
                            <td><a class="btn btn-outline-info" href="{{ url('createA/'.$value->idvendedor.'/edit') }}">Editar</a></td>
                            <td><form  action="{{ url('createA/'.$value->idvendedor.'') }}" method="post">
                                @csrf
                                <input type="hidden"  name="_method" value="delete">
                                <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                            </form>
                        </tr>
                            @endforeach
                        </tbody>
                </table>
        </div>
@endsection

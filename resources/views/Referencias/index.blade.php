
@extends('layout.layout')

@section('content')
<div class="card">
        <div class="card-header">
          Gestionar Referencias
          <input type="button" style="margin-left: 750px;"  class="btn btn-info" onclick="newReference()"  value="Nueva Referencia">
        </div>
        <div class="card-body" width:"50%">
                <table class="table">
                        <thead>
                            <tr>
                            <th>Código</th>
                            <th>Referencias</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($referencias as $value)
                            <tr>
                            <td>{{ $value->codigo }}</td>
                            <td>{{ $value->nombre }}</td>
                            <td><a class="btn btn-outline-info" onclick="edit({{$value->idreferencias}})">Editar</a></td>
                            <td>
                            <form method="POST" action={{ url("references/".$value->idreferencias)}}>
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-outline-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                </table>
        </div>
    </div>
     @include('Referencias.create')
@stop
@section('script')
<script src="{{ asset('js/functionsReferences.js') }}"></script>
@endsection

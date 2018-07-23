@extends('layout.layout')

@section('content')
<div class="card">
        <div class="card-header">
          Gestionar Usuarios
          <input type="button" style="margin-left: 750px;"  class="btn btn-info" onclick="newUser()"  value="Nuevo Usuario">
        </div>
        {{-- {{ dd($users) }} --}}
        <div class="card-body" width:"50%">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Rol
                        </th>
                        <th>
                            Editar
                        </th>
                        <th>
                            Eliminar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            {{ $user->nombre }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            {{ $user->rol }}
                        </td>
                        <td>
                            <input type="button" class="btn btn-outline-info" onclick="edit({{ $user->id }})" value="Editar">
                        </td>
                        <td>
                            <input type="hidden" name="_method" id="_method" value="DELETE">
                            <input type="button" class="btn btn-outline-danger" value="Eliminar" onclick="destroy('{{ $user->id }}')">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@include('users.create')
@endsection
@section('script')
<script src="{{ asset('js/functionUsers.js') }}" ></script>
@endsection

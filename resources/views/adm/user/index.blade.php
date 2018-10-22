@extends('layouts.templateadm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Usuarios registrados</strong>
                            </div>
                        <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>Usuario ID</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->tipo }}</td>
                                <td><a href="{{ route('users.show', $item->id) }}">Ver</a></td>
                                <td><a href="{{ route('users.edit', $item->id) }}">Ver</a></td>
                                <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $item->id]]) !!}
                                    {!! Form::submit('Borrar este usuario?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que deseas eliminarlo?')"])!!}
                                {!! Form::close() !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
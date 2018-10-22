@extends('layouts.templateadm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Datos de fincas y cultivos</h4>
                    </div>
                    <div class="card-body">
                        <div class="default-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-fincas-tab" data-toggle="tab" href="#nav-fincas" role="tab" aria-controls="nav-fincas" aria-selected="true">Fincas</a>
                                    <a class="nav-item nav-link" id="nav-cultivos-tab" data-toggle="tab" href="#nav-cultivos" role="tab" aria-controls="nav-cultivos" aria-selected="false">Cultivos</a>
                                    <a class="nav-item nav-link" id="nav-culfin-tab" data-toggle="tab" href="#nav-culfin" role="tab" aria-controls="nav-culfin" aria-selected="false">Cultivos - Fincas</a>
                                    <a class="nav-item nav-link" id="nav-usufin-tab" data-toggle="tab" href="#nav-usufin" role="tab" aria-controls="nav-usufin" aria-selected="false">Usuarios - Fincas</a>
                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
        
                                <div class="tab-pane fade show active" id="nav-fincas" role="tabpanel" aria-labelledby="nav-fincas-tab">
                                    <div class="content mt-3">
                                        <div class="animated fadeIn">
                                            <div class="row">
                
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong class="card-title">Fincas registradas</strong>
                                                    </div>
                                                <div class="card-body">
                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th>Finca ID</th>
                                                    <th>Nombre</th>
                                                    <th>Ciudad</th>
                                                    <th>Ver</th>
                                                    <th>Editar</th>
                                                    <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($collectionfincas as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->nombre }}</td>
                                                        <td>{{ $item->ciudad }}</td>
                                                        <td><a href="{{ route('fincas.show', $item->id) }}">Ver</a></td>
                                                        <td><a href="{{ route('fincas.edit', $item->id) }}">Editar</a></td>
                                                        <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['fincas.destroy', $item->id]]) !!}
                                                            {!! Form::submit('Borrar este usuario?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que desea eliminar esta finca?')"])!!}
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
                                
                                <div class="tab-pane fade" id="nav-cultivos" role="tabpanel" aria-labelledby="nav-cultivos-tab">
                                    <div class="content mt-3">
                                        <div class="animated fadeIn">
                                            <div class="row">
                
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong class="card-title">Cultivos registrados</strong>
                                                    </div>
                                                <div class="card-body">
                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th>Cultivo ID</th>
                                                    <th>Cultivo</th>
                                                    <th>Ver</th>
                                                    <th>Editar</th>
                                                    <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($collectioncultivos as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->cultivo }}</td>
                                                        <td><a href="{{ route('cultivos.show', $item->id) }}">Ver</a></td>
                                                        <td><a href="{{ route('cultivos.edit', $item->id) }}">Editar</a></td>
                                                        <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['cultivos.destroy', $item->id]]) !!}
                                                            {!! Form::submit('Borrar este Cultivo?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que desea eliminar este cultivo?')"])!!}
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
                                
                                <div class="tab-pane fade" id="nav-culfin" role="tabpanel" aria-labelledby="nav-culfin-tab">
                                    <div class="content mt-3">
                                        <div class="animated fadeIn">
                                            <div class="row">
                
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong class="card-title">Relaciones entre fincas y cultivos</strong>
                                                    </div>
                                                <div class="card-body">
                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th>ID</th>
                                                    <th>Finca</th>
                                                    <th>Cultivo</th>
                                                    <th>Ver</th>
                                                    <th>Editar</th>
                                                    <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($collectionfincacultivo as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->cultivo }}</td>
                                                        <td><a href="{{ route('fincacultivo.show', $item->id) }}">Ver</a></td>
                                                        <td><a href="{{ route('fincacultivo.edit', $item->id) }}">Editar</a></td>
                                                        <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['fincacultivo.destroy', $item->id]]) !!}
                                                            {!! Form::submit('Borrar esta relacion?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que desea eliminar esta relacion entre la finca y el cultivo?')"])!!}
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
                                
                                <div class="tab-pane fade" id="nav-usufin" role="tabpanel" aria-labelledby="nav-usufin-tab">
                                    <div class="content mt-3">
                                        <div class="animated fadeIn">
                                            <div class="row">
                
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong class="card-title">Relaciones entre fincas y usuarios</strong>
                                                    </div>
                                                <div class="card-body">
                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th>ID</th>
                                                    <th>Finca</th>
                                                    <th>Usuario</th>
                                                    <th>Ver</th>
                                                    <th>Editar</th>
                                                    <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($collectionfincacultivo as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->cultivo }}</td>
                                                        <td><a href="{{ route('fincacultivo.show', $item->id) }}">Ver</a></td>
                                                        <td><a href="{{ route('fincacultivo.edit', $item->id) }}">Editar</a></td>
                                                        <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['fincacultivo.destroy', $item->id]]) !!}
                                                            {!! Form::submit('Borrar esta relacion?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que desea eliminar esta relacion entre la finca y el cultivo?')"])!!}
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
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>
        
@endsection
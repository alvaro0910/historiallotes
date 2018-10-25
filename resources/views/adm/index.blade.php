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
                                                        <div style="text-align: center;"><strong class="card-title">Fincas registradas</strong></div>
                                                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#largeModalCrearFinca">
                                                            Crear Finca
                                                        </button>
                                                    </div>
                                                <div class="card-body">
                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th>Finca ID</th>
                                                    <th>Nombre</th>
                                                    <th>Municipio</th>
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
                                                        <td>{{ $item->municipio }}</td>
                                                        <td><a href="{{ route('fincas.show', $item->id) }}">Ver</a></td>
                                                        <td><a href="{{ route('fincas.edit', $item->id) }}">Editar</a></td>
                                                        <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['fincas.destroy', $item->id]]) !!}
                                                            {!! Form::submit('Borrar finca?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que desea eliminar esta finca?')"])!!}
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
                                                        <div style="text-align: center;"><strong class="card-title">Cultivos registrados</strong></div>
                                                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#largeModalCrearCultivo">
                                                            Crear Cultivo
                                                        </button>
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
                                                        <div style="text-align: center;"><strong class="card-title">Relaciones entre fincas y cultivos</strong></div>
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
                                                        <td>{{ $item->nombre }}</td>
                                                        <td>{{ $item->cultivo }}</td>
                                                        <td><a href="{{ route('fincascultivos.show', $item->id) }}">Ver</a></td>
                                                        <td><a href="{{ route('fincascultivos.edit', $item->id) }}">Editar</a></td>
                                                        <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['fincascultivos.destroy', $item->id]]) !!}
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
                                                        <div style="text-align: center;"><strong class="card-title">Relaciones entre fincas y usuarios</strong></div>
                                                    </div>
                                                <div class="card-body">
                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th>ID</th>
                                                    <th>Finca</th>
                                                    <th>Municipio</th>
                                                    <th>Usuario</th>
                                                    <th>Ver</th>
                                                    <th>Editar</th>
                                                    <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($collectionfincauser as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->nombre }}</td>
                                                        <td>{{ $item->municipio }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td><a href="{{ route('fincasusers.show', $item->id) }}">Ver</a></td>
                                                        <td><a href="{{ route('fincasusers.edit', $item->id) }}">Editar</a></td>
                                                        <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['fincasusers.destroy', $item->id]]) !!}
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

<div class="modal fade" id="largeModalCrearFinca" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Crear Finca
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="largeModalCrearCultivo" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Crear Cultivo
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>
        
<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/lib/data-table/datatables-init.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>
@endsection
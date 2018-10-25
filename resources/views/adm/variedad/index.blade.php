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
                                <div style="text-align:center;"><strong class="card-title">Variedades registradas</strong></div>
                            </div>
                        <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>Variedad ID</th>
                            <th>Variedad</th>
                            <th>Descripcion</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->variedad }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td><a href="{{ route('variedades.show', $item->id) }}">Ver</a></td>
                                <td><a href="{{ route('variedades.edit', $item->id) }}">Editar</a></td>
                                <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['variedades.destroy', $item->id]]) !!}
                                    {!! Form::submit('Borrar esta variedad?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que desea eliminarla?')"])!!}
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
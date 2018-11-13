@extends('layouts.templateusu')

@section('title', 'Info')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Informacion lotes</strong>
                </div>
            <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre lote</th>
                    <th>Cultivo</th>
                    <th>Detallar</th>
                </tr>
                </thead>
                <tbody>
                @php 
                    $anio = 2009;       
                @endphp 
                
                @foreach ($data as $e)
                <tr>
                    <td>{{ $e->codigo }}</td>
                    <td>{{ $e->nombre }}</td>
                    <td>{{ $e->cultivo }}</td>
                    <td><a href="{{ route('detalles', [$e->id, $anio]) }}">ver</a></td>
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

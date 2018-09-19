@extends('layouts.templateusu')

@section('title', 'Info')

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

            <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                </div>
            <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Finca</th>
                    <th>Detalle Lote</th>
                    <th>Costo labores</th>
                    <th>Costo insumos</th>
                    <th>Producciones</th>
                    <th>Rendimientos</th>
                </tr>
                </thead>
                <tbody>
                <?php $list = array(1,2,3,4,5,5,5,5,5,5,5,5,5,5,5,5,5,5,); ?>
                @foreach ($list as &$e)
                <tr>
                    <td>250</td>
                    <td>Torre</td>
                    <td>Jordan</td>
                    <td><a title="Detallar" href="{{ route('detalle') }}">de</a></td>
                    <td><a title="Detallar" href="{{ route('costolabores') }}">cl</a></td>
                    <td><a title="Detallar" href="{{ route('costoinsumos') }}">ci</a></td>
                    <td><a title="Detallar" href="{{ route('producciones') }}">pr</a></td>
                    <td><a title="Detallar" href="{{ route('rendimientos') }}">re</a></td>
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

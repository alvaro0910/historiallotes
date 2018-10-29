@extends('layouts.templateadm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="text-align:center;"><strong class="card-title">Produccion lotes</strong></div>
                                <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#largeModalCrearProduccion">
                                    Crear Produccion
                                </button>
                            </div>
                        <div class="card-body">
                        <table id="bootstrap-data-table7" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>Producion ID</th>
                            <th>Lote</th>
                            <th>Cantidad</th>
                            <th>Mes</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->cantidad }}</td>
                                <td>{{ $item->periodo }}</td>
                                <td><a href="{{ route('producciones.show', $item->id) }}">Ver</a></td>
                                <td><a href="{{ route('producciones.edit', $item->id) }}">Editar</a></td>
                                <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['producciones.destroy', $item->id]]) !!}
                                    {!! Form::submit('¿Borrar este registro?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que desea eliminar el registro? $item->id')"])!!}
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

<div class="modal fade" id="largeModalCrearProduccion" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
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
                    Crear Produccion
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>

@jquery
@toastr_js
<script>
    @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}";
      
      switch(type){
        case 'info':
          toastr.info("{{ Session::get('message') }}");
          break;
        case 'warning':
          toastr.warning("{{ Session::get('message') }}");
          break;
        case 'success':
          toastr.success("{{ Session::get('message') }}");
          break;
        case 'error':
          toastr.error("{{ Session::get('message') }}");
          break;
      }
    @endif
</script>
@endsection
@extends('layouts.templateadm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Datos de lotes y sus propiedades</h4>
                    </div>
                    <div class="card-body">
                        <div class="default-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-propiedades-tab" data-toggle="tab" href="#nav-propiedades" role="tab" aria-controls="nav-propiedades" aria-selected="true">Propiedades</a>
                                    <a class="nav-item nav-link" id="nav-prolot-tab" data-toggle="tab" href="#nav-prolot" role="tab" aria-controls="nav-prolot" aria-selected="false">Lotes - Propiedades</a>
                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
        
                                <div class="tab-pane fade show active" id="nav-propiedades" role="tabpanel" aria-labelledby="nav-propiedades-tab">
                                    <div class="content mt-3">
                                        <div class="animated fadeIn">
                                            <div class="row">
                
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div style="text-align: center;"><strong class="card-title">Propiedades registradas</strong></div>
                                                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#largeModalCrearPropiedad">
                                                            Crear Propiedad
                                                        </button>
                                                    </div>
                                                <div class="card-body">
                                                <table id="bootstrap-data-table5" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th>Propiedad ID</th>
                                                    <th>Material</th>
                                                    <th>Unidad</th>
                                                    <th>Ver</th>
                                                    <th>Editar</th>
                                                    <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($collectionpropiedades as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->material }}</td>
                                                        <td>{{ $item->unidad }}</td>
                                                        <td><a href="{{ route('propiedad.show', $item->id) }}">Ver</a></td>
                                                        <td><a href="{{ route('propiedad.edit', $item->id) }}">Editar</a></td>
                                                        <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['propiedad.destroy', $item->id]]) !!}
                                                            {!! Form::submit('¿Borrar este registro?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que desea eliminar este registro?')"])!!}
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
                                
                                <div class="tab-pane fade" id="nav-prolot" role="tabpanel" aria-labelledby="nav-prolot-tab">
                                    <div class="content mt-3">
                                        <div class="animated fadeIn">
                                            <div class="row">
                
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div style="text-align: center;"><strong class="card-title">Relaciones entre fincas y cultivos</strong></div>
                                                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#largeModalCrearRelacionLotePropiedad">
                                                            Crear Relacion Lote-Propiedad
                                                        </button>
                                                    </div>
                                                <div class="card-body">
                                                <table id="bootstrap-data-table6" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th>Lote</th>
                                                    <th>Material</th>
                                                    <th>Cantidad</th>
                                                    <th>Unidad</th>
                                                    <th>Ver</th>
                                                    <th>Editar</th>
                                                    <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($collectionpropiedadlotes as $item)
                                                    <tr>
                                                        <td>{{ $item->nombre }}</td>
                                                        <td>{{ $item->material }}</td>
                                                        <td>{{ $item->cantidad }}</td>
                                                        <td>{{ $item->unidad }}</td>
                                                        <td><a href="{{ route('propiedadlote.show', $item->id) }}">Ver</a></td>
                                                        <td><a href="{{ route('propiedadlote.edit', $item->id) }}">Editar</a></td>
                                                        <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['propiedadlote.destroy', $item->id]]) !!}
                                                            {!! Form::submit('Borrar esta relacion?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que desea eliminar esta relacion entre el lote y la propiedad?')"])!!}
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

<div class="modal fade" id="largeModalCrearPropiedad" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
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
                    Crear Propiedad
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="largeModalCrearRelacionLotePropiedad" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
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
                    Crear Relacion
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
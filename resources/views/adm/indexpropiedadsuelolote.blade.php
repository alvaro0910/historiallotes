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
                                                        <a href="{{ route('propiedad.create') }}" class="btn btn-secondary mb-1">Crear propiedad</a>
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
                                                        <td>
                                                            <div class="icon-container" style="width: 20px;">
                                                                <a href="{{ route('propiedad.show', $item->id) }}"><span class="ti-search"></span></a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="icon-container" style="width: 20px;">
                                                                <a href="{{ route('propiedad.edit', $item->id) }}"><span class="ti-pencil-alt"></span></a>
                                                            </div>
                                                        </td>
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
                                                        <a href="{{ route('propiedadlote.create') }}" class="btn btn-secondary mb-1">Crear relacion</a>
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
                                                        <td>
                                                            <div class="icon-container" style="width: 20px;">
                                                                <a href="{{ route('propiedadlote.show', $item->id) }}"><span class="ti-search"></span></a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="icon-container" style="width: 20px;">
                                                                <a href="{{ route('propiedadlote.edit', $item->id) }}"><span class="ti-pencil-alt"></span></a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['propiedadlote.destroy', $item->id]]) !!}
                                                            {!! Form::submit('¿Borrar esta relacion?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que desea eliminar esta relacion entre el lote y la propiedad?')"])!!}
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
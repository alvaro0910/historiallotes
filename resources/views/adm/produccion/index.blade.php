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
                                <div style="text-align:center;"><strong class="card-title">Producción lotes</strong></div>
                                <a href="{{ route('producciones.create') }}" class="btn btn-secondary mb-1">Crear producción</a>
                            </div>
                        <div class="card-body">
                        <table id="bootstrap-data-table7" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>Produción ID</th>
                            <th>Lote</th>
                            <th>Cantidad</th>
                            <th>Fecha (aaaa/mm/dd)</th>
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
                                <td>
                                    <div class="icon-container" style="width: 20px;">
                                        <a href="{{ route('producciones.show', $item->id) }}"><span class="ti-search"></span></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="icon-container" style="width: 20px;">
                                        <a href="{{ route('producciones.edit', $item->id) }}"><span class="ti-pencil-alt"></span></a>
                                    </div>
                                </td>
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
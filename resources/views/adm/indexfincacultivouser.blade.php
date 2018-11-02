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
                                                <a href="{{ route('fincas.create') }}" class="btn btn-secondary mb-1">Crear Finca</a>
                                            </div>
                                        <div class="card-body">
                                        <table id="bootstrap-data-table1" class="table table-striped table-bordered">
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
                                                <td>
                                                    <div class="icon-container" style="width: 20px;">
                                                        <a href="{{ route('fincas.show', $item->id) }}"><span class="ti-search"></span></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="icon-container" style="width: 20px;">
                                                        <a href="{{ route('fincas.edit', $item->id) }}"><span class="ti-pencil-alt"></span></a>
                                                    </div>
                                                </td>
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
                                                <a href="{{ route('cultivos.create') }}" class="btn btn-secondary mb-1">Crear Cultivo</a>
                                            </div>
                                        <div class="card-body">
                                        <table id="bootstrap-data-table2" class="table table-striped table-bordered">
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
                                                <td>
                                                    <div class="icon-container" style="width: 20px;">
                                                        <a href="{{ route('cultivos.show', $item->id) }}"><span class="ti-search"></span></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="icon-container" style="width: 20px;">
                                                        <a href="{{ route('cultivos.edit', $item->id) }}"><span class="ti-pencil-alt"></span></a>
                                                    </div>
                                                </td>
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
                                                <a href="{{ route('cultivosfincas.create') }}" class="btn btn-secondary mb-1">Crear relacion</a>
                                            </div>
                                        <div class="card-body">
                                        <table id="bootstrap-data-table3" class="table table-striped table-bordered">
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
                                                <td>
                                                    <div class="icon-container" style="width: 20px;">
                                                        <a href="{{ route('cultivosfincas.show', $item->id) }}"><span class="ti-search"></span></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="icon-container" style="width: 20px;">
                                                        <a href="{{ route('cultivosfincas.edit', $item->id) }}"><span class="ti-pencil-alt"></span></a>
                                                    </div>
                                                </td>
                                                <td>
                                                {!! Form::open(['method' => 'DELETE','route' => ['cultivosfincas.destroy', $item->id]]) !!}
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
                                                <a href="{{ route('fincasusers.create') }}" class="btn btn-secondary mb-1">Crear relacion</a>
                                            </div>
                                        <div class="card-body">
                                        <table id="bootstrap-data-table4" class="table table-striped table-bordered">
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
                                                <td>
                                                    <div class="icon-container" style="width: 20px;">
                                                        <a href="{{ route('fincasusers.show', $item->id) }}"><span class="ti-search"></span></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="icon-container" style="width: 20px;">
                                                        <a href="{{ route('fincasusers.edit', $item->id) }}"><span class="ti-pencil-alt"></span></a>
                                                    </div>
                                                </td>
                                                <td>
                                                {!! Form::open(['method' => 'DELETE','route' => ['fincasusers.destroy', $item->id], 'id' => 'form1']) !!}
                                                    <div class="icon-container" style="width: 20px;">
                                                        <a href="javascript:;" onclick="return  confirm('¿Seguro que desea eliminar esta relacion entre la finca y el cultivo?'); document.getElementById('form1').submit();"><span class="ti-pencil-alt"></span><%=n%></a>
                                                        {!! Form::submit('Borrar esta relacion?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que desea eliminar esta relacion entre la finca y el cultivo?')"])!!}</span></a>
                                                    </div>
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
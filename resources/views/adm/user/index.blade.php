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
                                <strong class="card-title">Usuarios registrados</strong>
                            </div>
                        <div class="card-body">
                        <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>Usuario ID</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->tipo }}</td>
                                <td>
                                    <div class="icon-container" style="width: 20px;">
                                        <a href="{{ route('users.show', $item->id) }}"><span class="ti-search"></span></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="icon-container" style="width: 20px;">
                                        <a href="{{ route('users.edit', $item->id) }}"><span class="ti-pencil-alt"></span></a>
                                    </div>
                                </td>
                                <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $item->id]]) !!}
                                    {!! Form::submit('Borrar este usuario?', ['class' => 'btn btn-danger', 'onclick' => "return confirm('¿Seguro que deseas eliminarlo?')"])!!}
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
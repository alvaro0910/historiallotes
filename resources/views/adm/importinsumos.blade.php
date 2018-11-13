@extends('layouts.templateadm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Importar costo insumos</div>
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                <p>¡Los siguientes errores fueron encontrados al importar el archivo!</p>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>    
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
                </div>
                @endif
                <div class="card-body">
                    {!! Form::open(array('route' => 'importinsumos.file','method'=>'POST','files'=>'true')) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Seleccionar archivo</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="import_file" name="import_file" class="form-control-file"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        {!! Form::submit('Cargar',['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
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
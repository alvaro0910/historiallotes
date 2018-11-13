@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-8" style="">
            <div class="card">
                <div class="card-header">
                    <strong>Crear finca</strong>
                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                    <p>¡Los siguientes errores fueron encontrados al validar el formulario!</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>    
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                    </div>
                    @endif
                </div>
                <div class="card-body card-block">
                    {{ Form::open(['route' => 'fincas.store', 'method' => 'POST']) }}
                    @method('post')
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre *</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control"><small class="form-text text-muted">Ingrese el nombre de la finca</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Departamento</label></div>
                        <div class="col col-md-9">{!! Form::select('departamento', $departamentos, null, ['id'=>'departamento'], ['class'=>'standardSelect']) !!}</div>
                    </div>   
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Municipio</label></div>
                        <div class="col-12 col-md-9">{!! Form::select('municipio', ['placeholder'=>'Seleccione municipio...'], null, ['id'=>'municipio']) !!}</div>
                    </div>        
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Dirección</label></div>
                        <div class="col col-md-9"><input type="text" id="direccion" name="direccion" placeholder="Dirección" class="form-control"><small class="help-block text-muted">Ingrese la dirección de la finca</small></div>
                    </div>   
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o">Crear finca</i> 
                </button>
                </div> 
                <div class="card-footer">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{ route('fincascultivosusers.index') }}"> 
                                <div class="icon-container" style="width:240px;">
                                    <span class="ti-back-left"></span><span class="icon-name"> Regresar</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                {{ Form::close() }}
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
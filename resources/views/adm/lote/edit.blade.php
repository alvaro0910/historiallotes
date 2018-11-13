@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong>Datos lote</strong>
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
                    {!! Form::model($data, [
                        'method' => 'PUT',
                        'route' => ['lotes.update', $data->id]
                    ]) !!}
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre *</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control" value="{{ $data->nombre }}">
                        <small class="form-text text-muted">Ingrese el nombre del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Código *</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="codigo" name="codigo" placeholder="Código" class="form-control" value="{{ $data->codigo }}">
                        <small class="form-text text-muted">Ingrese el código del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Área *</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="area" name="area" placeholder="Área" class="form-control" value="{{ $data->area }}">
                        <small class="form-text text-muted">Ingrese el área del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Población</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="poblacion" name="poblacion" placeholder="Población" class="form-control" value="{{ $data->codigo }}">
                        <small class="form-text text-muted">Ingrese la población del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Edad</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="edad" name="edad" placeholder="Edad" class="form-control" value="{{ $data->edad }}">
                        <small class="help-block text-muted">Ingrese la edad del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Altura</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="alturasnm" name="alturasnm" placeholder="Altura SNM" class="form-control" value="{{ $data->alturasnm }}">
                        <small class="help-block text-muted">Ingrese la altura sobre el nivel de mar del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Cultivo</label></div>
                        <select data-placeholder="Seleccione cultivo..." class="standardSelect" tabindex="1" id="cultivo_id" name="cultivo_id">
                            @foreach ($listcultivos as $e)
                                <option value="{{ $e->id }}">{{ $e->cultivo }}</option>
                            @endforeach
                        </select>
                        <div class="col col-md-3"><label for="select" class="form-control-label">Variedad</label></div>
                        <select data-placeholder="Seleccione variedad..." class="standardSelect" tabindex="1" id="variedad_id" name="variedad_id">
                            @foreach ($listvariedades as $e)
                                <option value="{{ $e->id }}">{{ $e->variedad }}</option>
                            @endforeach
                        </select>
                    </div>
                        <!--<select id="prioridadForm" name="prioridadForm">  no olvidar poner el < ? de php
                            <option value="baja" php if($estado=="baja") echo "selected";?>>Baja</option> 
                            <option value="media" php if($estado=="media") echo "selected";?>>Media</option> 
                            <option value="alta" php if($estado=="alta") echo "selected";?>>Alta</option> 
                            </select>-->
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Actualizar Lote
                </button>
                
                </div>
                <div class="card-footer">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{ route('lotes.index') }}"> 
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
@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong>Crear estado fisico</strong>
                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                    <p>Los siguientes errores fueron encontrados al validar el formulario!</p>
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
                    {{ Form::open(['route' => 'estados.store', 'method' => 'POST']) }}
                    @method('post')
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Estado fisico</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="descripcion" name="descripcion" placeholder="Estado Fisico" class="form-control">
                        <small class="form-text text-muted">Ingrese el estado fisico lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Año</label></div>
                        <div class="col-12 col-md-9"><input type="date" id="periodo" name="periodo" placeholder="Año" class="form-control">
                        <small class="form-text text-muted">Ingrese el año del estado fisico del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Lote</label></div>
                        <select data-placeholder="Seleccione lote..." class="standardSelect" id="lote_id" name="lote_id">
                            @foreach ($data as $item)
                                <option value="{{ $item->id }}">{{ $item->codigo }} - {{ $item->nombre }}</option>
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
                    <i class="fa fa-dot-circle-o"></i> Crear estado
                </button>
                </div>
                <div class="card-footer">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{ route('estados.index') }}"> 
                                <div class="icon-container">
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
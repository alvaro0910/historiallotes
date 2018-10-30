@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong>Crear lote</strong>
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
                    {{ Form::open(['route' => 'lotes.store', 'method' => 'POST']) }}
                    @method('post')
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Codigo</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="codigo" name="codigo" placeholder="Codigo" class="form-control">
                          <small class="form-text text-muted">Ingrese el codigo del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control">
                        <small class="form-text text-muted">Ingrese el nombre del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Area</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="area" name="area" placeholder="Area" class="form-control">
                        <small class="form-text text-muted">Ingrese el area del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Poblacion</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="poblacion" name="poblacion" placeholder="Poblacion" class="form-control">
                        <small class="form-text text-muted">Ingrese la poblacion del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Edad</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="edad" name="edad" placeholder="Edad" class="form-control">
                        <small class="help-block text-muted">Ingrese la edad del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Altura</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="alturasnm" name="alturasnm" placeholder="Altura SNM" class="form-control">
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
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Actualizar Lote
                </button>
                {{ Form::close() }}
                </div>
                <div class="card-footer">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{ route('lotes.index') }}"> 
                                <div class="icon-container">
                                    <span class="ti-back-left"></span><span class="icon-name"> Regresar</span>
                                </div>
                            </a>
                        </li>
                    </ul>
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
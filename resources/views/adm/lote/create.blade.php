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
                    {{ Form::open(['route' => 'lotes.store', 'method' => 'POST']) }}
                    @method('post')
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Código <font color="red">*</font></label></div>
                        <div class="col-12 col-md-9"><input type="text" id="codigo" name="codigo" placeholder="Código" class="form-control">
                          <small class="form-text text-muted">Ingrese el código del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre <font color="red">*</font></label></div>
                        <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control">
                        <small class="form-text text-muted">Ingrese el nombre del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Área <font color="red">*</font></label></div>
                        <div class="col-12 col-md-9"><input type="text" id="area" name="area" placeholder="Área" class="form-control">
                        <small class="form-text text-muted">Ingrese el área del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Población <font color="red">*</font></label></div>
                        <div class="col-12 col-md-9"><input type="text" id="poblacion" name="poblacion" placeholder="Población" class="form-control">
                        <small class="form-text text-muted">Ingrese la población del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Edad</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="edad" name="edad" placeholder="Edad en meses" class="form-control">
                        <small class="help-block text-muted">Ingrese la edad del lote en meses</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Altura</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="alturasnm" name="alturasnm" placeholder="Altura SNM" class="form-control">
                        <small class="help-block text-muted">Ingrese la altura sobre el nivel de mar del lote</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Finca</label></div>
                        <div class="col col-md-9">
                            <select data-placeholder="Seleccione finca..." class="standardSelect" tabindex="1" id="finca_id" name="finca_id">
                                @foreach ($listfincas as $e)
                                    <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Cultivo</label></div>
                        <div class="col col-md-9">
                            <select data-placeholder="Seleccione cultivo..." class="standardSelect" tabindex="1" id="cultivo_id" name="cultivo_id">
                                @foreach ($listcultivos as $e)
                                    <option value="{{ $e->id }}">{{ $e->cultivo }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Variedad</label></div>
                        <div class="col col-md-9">
                            <select data-placeholder="Seleccione variedad..." class="standardSelect" tabindex="1" id="variedad_id" name="variedad_id">
                                @foreach ($listvariedades as $e)
                                    <option value="{{ $e->id }}">{{ $e->variedad }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Crear Lote
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
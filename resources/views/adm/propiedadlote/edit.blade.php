@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-8" style="">
            <div class="card">
                <div class="card-header">
                    <strong>Datos Relación</strong>
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
                        'route' => ['propiedadlote.update', $data['0']->id]
                    ]) !!}
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cantidad <font color="red">*</font></label></div>
                        <div class="col-12 col-md-9"><input type="text" id="cantidad" name="cantidad" placeholder="Cantidad Material" class="form-control" value="{{ $data['0']->cantidad }}">
                        <small class="form-text text-muted">Ingrese la cantidad del material analizado</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fecha (aaaa/mm/dd) <font color="red">*</font></label></div>
                        <div class="col-12 col-md-9"><input type="date" id="periodo" name="periodo" class="form-control" value="{{ $data['0']->periodo }}>
                        <small class="form-text text-muted">Ingrese la fecha del análisis</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Lote</label></div>
                        <div class="col col-md-9">    
                            <select data-placeholder="Seleccione lote..." class="standardSelect" id="lote_id" name="lote_id">
                                @foreach ($listlotes as $item)
                                    <option value="{{ $item->id }}">{{ $item->codigo }} - {{ $item->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Propiedad</label></div>
                        <div class="col col-md-9">
                            <select data-placeholder="Seleccione propiedad..." class="standardSelect" id="propiedad_id" name="propiedad_id">
                                @foreach ($listpropiedades as $item)
                                    <option value="{{ $item->id }}">{{ $item->material }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Actualizar relación
                </button>
                </div>
                <div class="card-footer">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{ route('propiedades.index') }}"> 
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
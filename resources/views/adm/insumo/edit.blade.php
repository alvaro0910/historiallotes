@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong>Datos costo insumo</strong>
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
                        'route' => ['insumos.update', $data->id]
                    ]) !!}
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Descripción</label></div>
                        <div class="col-12 col-md-9"><input type="textarea" id="descripcion" name="descripcion" placeholder="Descripción" class="form-control" value="{{ $data->descripcion }}">
                        <small class="form-text text-muted">Ingrese la descripción de insumos</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Costo <font color="red">*</font></label></div>
                        <div class="col-12 col-md-9"><input type="text" id="costo" name="costo" placeholder="Costo" class="form-control" value="{{ $data->costo }}">
                        <small class="form-text text-muted">Ingrese el costo de la aplicación de insumos</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fecha (aaaa/mm/dd) <font color="red">*</font></label></div>
                        <div class="col-12 col-md-9"><input type="date" id="periodo" name="periodo" placeholder="Fecha" class="form-control" value="{{ $data->periodo }}">
                            <small class="form-text text-muted">Ingrese la fecha del costo de insumos</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Lote</label></div>
                        <div class="col col-md-9">
                            <select data-placeholder="Seleccione lote..." class="standardSelect" tabindex="1" id="lote_id" name="lote_id">
                                @foreach ($listlotes as $item)
                                    <option value="{{ $item->id }}">{{ $item->codigo }} - {{ $item->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Grupo Labores</label></div>
                        <div class="col col-md-9">
                            <select data-placeholder="Seleccione grupo labor..." class="standardSelect" tabindex="1" id="grupo_labor_id" name="grupo_labor_id">
                                @foreach ($listgrupos as $item)
                                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>     
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Actualizar costo insumos
                </button>
                </div>
                <div class="card-footer">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{ route('insumos.index') }}"> 
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
@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">

        <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <strong>Crear costo labor</strong>
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
                {{ Form::open(['route' => 'labores.store', 'method' => 'POST']) }}
                @method('post')
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Descripcion</label></div>
                    <div class="col-12 col-md-9"><input type="textarea" id="descripcion" name="descripcion" placeholder="Descripcion" class="form-control">
                    <small class="form-text text-muted">Ingrese la descripcion de labores</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Costo</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="costo" name="costo" placeholder="Costo" class="form-control">
                    <small class="form-text text-muted">Ingrese el costo de las labores</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Fecha</label></div>
                    <div class="col-12 col-md-9"><input type="date" id="periodo" name="periodo" placeholder="Fecha" class="form-control">
                    <small class="form-text text-muted">Ingrese la fecha del costo de labores</small></div>
                </div>
                <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cantidad MO</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="cantidadmo" name="cantidadmo" placeholder="Cantidad MO" class="form-control">
                        <small class="form-text text-muted">Ingrese la cantidad de mano de obra</small></div>
                    </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class="form-control-label">Lote</label></div>
                    <select data-placeholder="Seleccione lote..." class="standardSelect" tabindex="1" id="lote_id" name="lote_id">
                    @foreach ($listlotes as $item)
                        <option value="{{ $item->id }}">{{ $item->codigo }} - {{ $item->nombre }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class="form-control-label">Grupo Labores</label></div>
                    <select data-placeholder="Seleccione grupo labor..." class="standardSelect" tabindex="1" id="grupo_labor_id" name="grupo_labor_id">
                    @foreach ($listgrupos as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>     
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i>Crear costo labor
            </button>
            </div>
            <div class="card-footer">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="{{ route('labores.index') }}"> 
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
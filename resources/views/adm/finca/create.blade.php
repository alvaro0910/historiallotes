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
                    {{ Form::open(['route' => 'fincas.store', 'method' => 'POST']) }}
                    @method('post')
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control"><small class="form-text text-muted">Ingrese el nombre de la finca</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Departamento</label></div>
                        <select data-placeholder="Seleccione un departamento..." class="standardSelect" tabindex="1" id="departamento" name="departamento">
                            <option value=""></option>
                            <option value="Caldas">Caldas</option>
                            <option value="Antioquia">Antioquia</option>
                        </select>
                        <div class="col col-md-3"><label for="select" class="form-control-label">Municipio</label></div>
                        <select data-placeholder="Seleccione un municipio..." class="standardSelect" tabindex="1" id="municipio" name="municipio">
                            <option value=""></option>
                            <option value="Manizales">Manizales</option>
                            <option value="Medellin">Medellin</option>
                        </select>
                    </div>        
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Direccion</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="direccion" name="direccion" placeholder="Direccion" class="form-control"><small class="help-block text-muted">Ingrese la direccion de la finca</small></div>
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
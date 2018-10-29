@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
    
                <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <strong>Crear variedad</strong>
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
                        {{ Form::open(['route' => 'variedades.store', 'method' => 'POST']) }}
                        @method('post')
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Variedad</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="variedad" name="variedad" placeholder="Nombre" class="form-control"><small class="form-text text-muted">Ingrese la variedad</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descripcion</label></div>
                            <div class="col-12 col-md-9"><textarea type="textarea-input" id="descripcion" name="descripcion" rows="9" placeholder="Descripcion" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Crear variedad
                    </button>
                    {{ Form::close() }}
                    </div>
                    <div class="card-footer">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="{{ route('variedades.index') }}"> 
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
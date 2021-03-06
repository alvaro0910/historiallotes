@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
    
                <div class="col-lg-8" style="">
                <div class="card">
                    <div class="card-header">
                        <strong>Crear Relación</strong>
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
                        {{ Form::open(['route' => 'fincasusers.store', 'method' => 'POST']) }}
                        @method('post')
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class="form-control-label">Finca</label></div>
                            <select data-placeholder="Seleccione Finca..." class="standardSelect" tabindex="1" id="finca_id" name="finca_id">
                                @foreach ($listfincas as $e)
                                    <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                                @endforeach
                            </select>
                            <div class="col col-md-3"><label for="select" class="form-control-label">Usuario</label></div>
                            <div class="col col-md-9">
                                <select data-placeholder="Seleccione Usuario..." class="standardSelect" tabindex="1" id="user_id" name="user_id">
                                    @foreach ($listusers as $e)
                                        <option value="{{ $e->id }}">{{ $e->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Crear relación
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
@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            
            <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong>Datos usuario</strong>
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
                        'route' => ['users.update', $data->id]
                    ]) !!}
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre *</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Nombre" class="form-control" value="{{ $data->name }}">
                        <small class="form-text text-muted">Ingrese el nombre del usuario</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Correo *</label></div>
                        <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="Correo" class="form-control" value="{{ $data->email }}">
                        <small class="help-block text-muted">Ingrese el correo del usuario</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Tipo *</label></div>
                        <div class="col col-md-9">
                            <div class="form-check">
                            <div class="radio">
                                <label for="radio1" class="form-check-label">
                                <input type="radio" id="tipo" name="tipo" value="adm" class="form-check-input">Administrador
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio2" class="form-check-label ">
                                <input type="radio" id="tipo" name="tipo" value="usu" class="form-check-input">Visitante
                                </label>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Actualizar Usuario
                </button>
                </div>
                <div class="card-footer">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{ route('users.index') }}"> 
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
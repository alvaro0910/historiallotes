@extends('layouts.inicio')

@section('title', 'Register')

@section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">{{ __('Nombre') }}</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre usuario" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="email">{{ __('Correo') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Dirreción de correo electrónico" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="password">{{ __('Clave') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Clave" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirmar clave') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar clave" required>    
                        </div>
                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Aceptar términos y condiciones
                            </label>
                        </div>
                        
                        <input id="tipo" type="hidden" name="tipo" value="usu">
                        
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">{{ __('Registrarse') }}</button>
                        <div class="register-link m-t-15 text-center">
                            <p>¿Ya tiene una cuenta? <a href="{{ route('login') }}"> Ingresar</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.inicio')

@section('title', 'Login')

@section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="form-group">
                            <label for="email">{{ __('Correo') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo" required autofocus>

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
                        <div class="checkbox">
                            <label for="remember">{{ __('Recordarme') }}
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>        
                            </label>
                            <label class="pull-right">
                                <a href="{{ route('password.request') }}"> {{ __('Olvido su clave?') }}</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Ingresar</button>
                        
                        <div class="register-link m-t-15 text-center">
                            <p>No tiene una cuenta? <a href="{{ route('register') }}">Regístrese aquí</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

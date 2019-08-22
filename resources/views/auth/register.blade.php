@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="last_names" type="text" class="form-control @error('last_names') is-invalid @enderror" name="last_names" value="{{ old('last_names') }}" required autocomplete="last_names" placeholder="Apellidos">

                                @error('last_names')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electrónico">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repita la contraseña">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <select name="pais" id="pais" class="form-control">
                                    <option value="1">México</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_nacimiento" class="col-md-12 col-form-label">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-4">
                                <select name="dia_nacimiento" id="dia_nacimiento" class="form-control">
                                    <option value="0">Día</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="mes_nacimiento" id="mes_nacimiento" class="form-control">
                                    <option value="0">Mes</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="año_nacimiento" id="año_nacimiento" class="form-control">
                                    <option value="0">Año</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="aceptar_terminos" type="checkbox" name="aceptar_terminos" required>
                                <label for="aceptar_terminos" class="col-form-label">{{ __('Acepto los términos y condiciones') }}</label>
                            </div>
                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

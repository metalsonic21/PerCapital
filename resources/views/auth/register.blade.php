@extends('layouts.app')

@section('content')
<b-container>
        <b-row>
            <b-col cols="12" md="12" sm="4">
                <div class="wrapper wrapper-content animated fadeInDown">
                    <div>
                        <br>
                        <div class="text-center">
                            <h3>Registro en PER CAPITAL</h3>
                            <p>Crea tu cuenta para empezar a invertir</p>
                            <br>
                        </div>
                        <form class="m-t" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            </div>
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">Confirmar contraseña</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="text-center">

                                <b-button variant="secondary" class="m-b btn-block" type="submit">Register</b-button>
                            </div>
                            <p class="text-muted text-center"><small>¿Ya tienes una cuenta? <b-link href="{{ route('login') }}">Login</b-link></small>
                            </p>
                        </form>
                    </div>

                </div>
            </b-col>
        </b-row>
    </b-container>


@endsection

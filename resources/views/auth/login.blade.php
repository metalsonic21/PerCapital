@extends('layouts.app')

@section('content')

<b-container>
    <div class="wrapper wrapper-content animated fadeInDown">
    <b-row>

    <b-col cols="6" md="6" sm="6" lg="6">
        <h2>Inicio de sesión</h2>
            <p class="text-justify">
            En cualquier economia es importante tomar acciones para proteger el patrimonio, preservar el capital y aprovechar las oportunidades que brinda el mercado.
            </p>

            <p class="text-justify">
            PER CAPITAL pone a tu disposicion herramientas para lograr estos objetivos.
            </p>
    </b-col>

        <b-col col="5" md="5" sm="5" lg="5">
            <b-form class="m-t" autocomplete="off" method="POST" action="{{ route('login') }}">
                @csrf
                <b-form-group>
                    <label for="email">Correo electrónico</label>
                    <b-form-input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>Email</b-form-input>
                
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </b-form-group>
                
                <b-form-group>
                    <label for="password">Contraseña</label>
                    <b-form-input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">Contraseña</b-form-input>
                
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </b-form-group>

                <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>
                    </div>

    <b-container>

    <b-row>
        <b-button variant="secondary" class="text-right" type="submit">Inicio sesión</b-button>

    </b-row>

    <p class="text-muted text-center">
    <b-link href="{{ route('password.request') }}">
        <small>¿Olvidó contraseña?</small>
    </b-link>
    </p>

    </b-container>
        <p class="text-muted text-center">
            <small>
            ¿No tienes una cuenta?
        <b-link href="{{ route('register') }}">
        Regístrate
        </b-link>
        </small>
        </p>

    </b-form>
</b-col>
</b-row>
</div>
</b-container>
@endsection

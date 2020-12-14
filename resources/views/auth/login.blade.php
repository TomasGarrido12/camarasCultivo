@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/estilos.css" />
<div class="contentBx">
  
  <div class="formBx">
    
    <h2>Iniciar sesión</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="inputBx">
        <label for="email">{{ __('Dirección email') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="inputBx">
        <label for="password">{{ __('Contraseña') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="remember">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">{{ __('Recordarme') }}</label>
      </div>
      <div class="inputBx">
        <button type="submit" class="btn btn-success" >
          {{ __('Entrar') }}
      </button>

      @if (Route::has('password.request'))
          <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Te olvidaste la contraseña??') }}
          </a>
      @endif
      </div>
    </form>
  </div>
</div>
@endsection
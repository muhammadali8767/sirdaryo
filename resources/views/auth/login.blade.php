@extends('layouts.loginlayout')

@section('content')
<p class="login-box-msg"> <a href="https://itlive.uz" target="_blank">IT Live</a> ADMIN</p>

<form method="POST" action="{{ route('login') }}">
        @csrf
  <div class="input-group mb-3">
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email"  required autocomplete="email">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-envelope"></span>
      </div>
    </div>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
  <div class="input-group mb-3">
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-lock"></span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-8">
      <div class="icheck-primary">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">
            {{ __('Запомнить меня') }}
        </label>

    </div>
    </div>
    <!-- /.col -->
    <div class="col-4">
      <button type="submit" class="btn btn-primary btn-block">{{ __('Вход') }}</button>
    </div>
    <!-- /.col -->
  </div>
</form>
@if (Route::has('password.request'))
    <p class="mb-1">
        <a href="{{ route('password.request') }}">{{ __('Забыли свой пароль?') }}</a>
    </p>
</a>
@endif

{{-- <p class="mb-0">
    <a href="{{ route('register') }}" class="text-center">Зарегистрируйтесь</a>
</p> --}}
@endsection

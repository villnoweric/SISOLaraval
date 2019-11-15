@extends('layouts.login')

@section('content')
<div class="container">
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                    <img src="images/icon/panther_no_background.png" alt="Glencoe-Silver Lake">
                    <h2>SISO</h2>
            </div>
            
            <div class="login-form">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="au-input au-input--full form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="au-input au-input--full form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="login-checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                        </label>
                        @if (Route::has('password.request'))
                        <label>
                            <a href="{{ route('password.request') }}">Forgotten Password?</a>
                        </label>
                        @endif
                    </div>
                    <button class="au-btn au-btn--block au-btn--purple m-b-20" type="submit">sign in</button>
                </form>
                @if (Route::has('register'))
                <div class="register-link">
                    <p>
                        Don't have an account?
                        <a href="{{ route('register') }}">Sign Up Here</a>
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

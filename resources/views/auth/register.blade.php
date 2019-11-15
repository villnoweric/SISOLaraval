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
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input class="au-input au-input--full form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required placeholder="Name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="au-input au-input--full form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="au-input au-input--full form-control @error('password') is-invalid @enderror" type="password" name="password" required placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input class="au-input au-input--full" type="password" name="password_confirmation" required placeholder="Password">
                    </div>
                    <button class="au-btn au-btn--block au-btn--purple m-b-20" type="submit">register</button>
                </form>
                @if (Route::has('register'))
                <div class="register-link">
                    <p>
                        Already have an account?
                        <a href="{{ route('login') }}">Log in</a>
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

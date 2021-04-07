@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" class=" form-sp-style" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="form-control">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<body style="background-image: url('../admin/images/forgot-password.png');background-size: cover;background-position: center;">
    <div class="container">
        <div class="row top-156">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="login-layout">
                    <div class="glass-layout">
                        <h2>Forgot Password?</h2>
                        <br>
                        <p>Enter your email address below,
                            And we will send you an email allowing you to reset it.</p>
                            
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                            <form class="mt-3  form-sp-style" method="POST" action="{{ route('password.email') }}">
                                @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="blackcolor-text input-blue @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Emter email address" autofocus>
                            {{-- <div class="invalid-feedback">
                                Please fill out this field
                            </div> --}}
                            <br>
                                @error('email')
                                    <span class="invalid-feedback r-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <ul class="ls-login">
                                    <li>
                                            <button class="btns btn-blue">Reset my password</button>
                                    </li>
                                    <li>
                                            <a href="/login" class="btns btn-red">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                    <p class="text-left">If you have any trouble resetting your password, <br>
                        contact us at: <a href="mailto:info@eljoservices.com">info@eljoservices.com</a></p>
                    <br>
                    <p>Remember Password ? <a href="/login" class="text-green">Login</a></p>
                    <p class="footer">© 2021 Skillsacademi. All Rights Reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

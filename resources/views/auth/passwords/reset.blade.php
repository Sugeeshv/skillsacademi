@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<body style="background-image: url('../../images/change-password.png');background-size: cover;background-position: center;">
    <div class="container">
        <div class="row top-156">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="login-layout">
                    <div class="glass-layout">
                        <h2>Change Password?</h2>
                    <form method="POST" action="{{ route('password.update') }}" >
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group" style="display: none">

                            <div class="col-md-6">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="r-text">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required placeholder="Enter your New Password" autocomplete="new-password" autocomplete="no">
                            <i onclick="show('password')" class="fa fa-lock" id="display"></i>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong class="r-text">{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                <i onclick="show('password-confirm')" class="fa fa-lock" id="display"></i>
                            
                        </div>
                        <div class="form-group row mt-4 mb-3">
                            <button class="btns btn-red">{{ __('Reset Password') }}</button>
                            
                        </div>
                    </form>
                    <p>If you have any trouble resetting your password, <br>
                        contact us at: <a href="mailto:info@eljoservices.com">info@eljoservices.com</a>
                        </p>
                        <p>Remember Password ? <a href="" class="text-red">Login</a></p>
                    <p class="mt-6 mb-3 m-auto">© 2021 Skillsacademi. All Rights Reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
<script>
    function show(a) {
    var x=document.getElementById(a);
    var c=x.nextElementSibling
    if (x.getAttribute('type') == "password") {
    c.removeAttribute("class");
    c.setAttribute("class","fa fa-unlock");
    x.removeAttribute("type");
      x.setAttribute("type","text");
    } else {
    x.removeAttribute("type");
      x.setAttribute('type','password');
   c.removeAttribute("class");
    c.setAttribute("class","fa fa-lock");
    }
  }
</script>

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
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
</div>
@endsection --}}

@extends('layouts\app')

@section('title') Forgot-password @endsection

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
					@csrf

					<span class="login100-form-title p-b-16">
						Reset Password
					</span>
					<span class="login100-form-title p-b-35">
						<i class="ri ri-lock-password-fill"></i>
					</span>


                    {{-- Email --}}
                    <div class=" wrap-input100 validate-input"  data-validate = "Valid email is: a@b.c">
                        <input id="email" type="text" class="input100  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        <span class="focus-input100" data-placeholder="Email"></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="wrap-input100 validate-input" data-validate="Invalid password">
                        <span class="btn-show-pass" id="eye1">
                            <i class="zmdi zmdi-eye" id="i1"></i>
                        </span>
                        <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                        @error('password')
                                value ="12"
                        @enderror>
                        <span for="password" class="focus-input100" data-placeholder="{{ __('Password') }}"></span>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    {{--  --}}

                    {{-- Confirm Password --}}
                    <div class="wrap-input100 validate-input" data-validate="Invalid password">
                        <span class="btn-show-pass" id="eye2">
                            <i class="zmdi zmdi-eye" id="i2"></i>
                        </span>
                        <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">

                        <span for="password" class="focus-input100" data-placeholder="{{ __('Confirm Password') }}"></span>
                        <span class="invalid-feedback" role="alert">
                            <strong name="password-macth"></strong>
                        </span>
                    </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">{{ __('Reset Password') }}</button>
                    </div>
                </div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
@endsection


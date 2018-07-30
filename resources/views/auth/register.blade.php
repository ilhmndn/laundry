@extends('layouts.app')
@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" >
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form">

					<span class="login100-form-title p-b-34">
							{{ csrf_field() }}
						Account Register
					</span>

					{{-- Label Nama --}}
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type name">
						<label for="name" class="input100">{{ __('Name') }} </label>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  required autofocus name="name" placeholder="Name" >
						<span class="focus-input100"></span>
						@if ($errors->has('name'))
								<span class="invalid-feedback">
										<strong>{{ $errors->first('name') }}</strong>
								</span>
						@endif
					</div>

					{{-- Label Email --}}
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type email">
						<label for="email" class="input100">{{ __('E-Mail Address') }} </label>
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  required autofocus name="email" placeholder="Email" type="email" >
						<span class="focus-input100"></span>
						@if ($errors->has('email'))
								<span class="invalid-feedback">
										<strong>{{ $errors->first('email') }}</strong>
								</span>
						@endif
					</div>

					{{-- Label Password --}}
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type email">
						<label for="password" class="input100">{{ __('Password') }} </label>
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}"  required autofocus name="password" placeholder="Password" type="password" >
						<span class="focus-input100"></span>
						@if ($errors->has('password'))
								<span class="invalid-feedback">
										<strong>{{ $errors->first('password') }}</strong>
								</span>
						@endif
					</div>

					{{-- Label Ulangi Password --}}
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type email">
						<label for="password-confirm" class="input100">{{ __('Confirm Password') }} </label>
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password_confirmation" required placeholder="Ulangi Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
						  {{ __('Register') }}
						</button>
					</div>



					{{-- <div class="form-group row">
							<div class="col-md-8 offset-md-1">
									<div class="checkbox">
											<label>
													<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
											</label>
									</div>
							</div>
					</div> --}}

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="/#" class="txt2">
							User name / password?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="/register" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>




@endsection

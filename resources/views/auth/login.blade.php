@extends('layouts.app')
@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" >
				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
						{{ csrf_field() }}
					<span class="login100-form-title p-b-34">

					<img src="images/b.png" class="logologin"><br>
					</span>

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type name">
						<input id="{{ __('Name') }}" class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama">
						@if ($errors->has('name'))
								<span class="invalid-feedback">
										<strong>{{ $errors->first('name') }}</strong>
								</span>
						@endif
						<span class="focus-input100"></span>


					</div>


					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input id="{{ $errors->has('password') ? ' is-invalid' : '' }}" class="input100" type="password" name="password" placeholder="Kata Sandi" >
						@if ($errors->has('password'))
								<span class="invalid-feedback">
										<strong>{{ $errors->first('password') }}</strong>
								</span>
						@endif
						<span class="focus-input100"></span>

					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
					  {{ __('Login') }}
						</button>
					</div>


					<div class="w-full text-center p-t-27 p-b-239">

					</div>

				</form>

				<div class="login100-more" style="background-image: url('images/tes1.png');"></div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>




@endsection

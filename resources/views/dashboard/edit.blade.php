@extends('layouts.menu')

@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Profil</h3> </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Profil</li>
      </ol>
    </div>
  </div>
  <!-- End Bread crumb -->
  <!-- Container fluid  -->
  <div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card3">
          <div class="card-title">
            <h4 class="fa fa-user">Edit Profil</h4>
          </div>
          <div class="card-body">
            <div class="basic-form">
              <form action="/home/{{ Auth::user()->id }}" class="edit" method="post" class="edit" >
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                </div>
                  @endif


								<div class="form-group" data-validate="Type email">
									<label for="email" class="input100">{{ __('Nama') }} </label>
									<span class="focus-input100"></span>
								</div>

								<div class="form-group" data-validate="Type password">
									<input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  required autofocus name="name" value="{{ Auth::user()->name }}">
									<span class="focus-input100"></span>
									@if ($errors->has('name'))
											<span class="invalid-feedback">
													<strong>{{ $errors->first('name') }}</strong>
											</span>
									@endif
								</div>

								{{-- Label Email --}}
								<div class="form-group" data-validate="Type email">
									<label for="email" class="input100">{{ __('Email') }} </label>
									<span class="focus-input100"></span>
								</div>


								<div class="form-group" data-validate="Type password">
									<input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  required autofocus name="email" value="{{ Auth::user()->email }}" type="email" >
									<span class="focus-input100"></span>
									@if ($errors->has('email'))
											<span class="invalid-feedback">
													<strong>{{ $errors->first('email') }}</strong>
											</span>
									@endif
								</div>

								{{-- Label Password --}}
								<div class="form-group" data-validate="Type email">
									<label for="password" class="input100">{{ __('Password') }} </label>
									<span class="focus-input100"></span>
								</div>


								<div class="form-group" data-validate="Type password">
									<input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  required autofocus name="password" value="{{ Auth::user()->password }}" type="password" >
									<span class="focus-input100"></span>
									@if ($errors->has('password'))
											<span class="invalid-feedback">
													<strong>{{ $errors->first('password') }}</strong>
											</span>
									@endif
								</div>

								{{-- Label Ulangi Password --}}
								<div class="form-group" data-validate="Type email">
									<label for="password-confirm" class="input100">{{ __('Ulangi Password') }} </label>
									<span class="focus-input100"></span>
								</div>

								<div class="form-group" data-validate="Type password">
									<input class="form-control" type="password" name="password_confirmation" required placeholder="Ulangi Password" value="{{ Auth::user()->password }}">
									<span class="focus-input100"></span>
								</div>


                  <button type="submit" name="submit" class="buttonsubmit" ><i class="fa fa-arrow-circle-right" aria-hidden="true">
                    {{ __('Submit') }}</i></button>
                  </button>{{ csrf_field() }}

                  <input type="hidden" class="form-control" placeholder="Nama Pelanggan" name="_method" value="PUT">


                </div>
           </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /# column -->

    <!-- /# column -->
  </div>
  <!-- /# row -->

  <!-- /# row -->

  <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
<!-- footer -->
<footer class="footer"> © 2018 All rights reserved by <a href="http://www.ilhmndn.me">ilhmndn</a></footer>
<!-- End footer -->
</div>
<!-- End Page wrapper  -->
</div>

@endsection


@section('js')


  <script>
      $(".edit").on("submit", function(){
          return confirm("Apakah data sudah benar?");
      });
  </script>


@endsection

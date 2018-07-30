@extends('layouts.menu')

@section('content')
<div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Pelanggan</h3> </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Pelanggan</li>
      </ol>
    </div>
  </div>
  <!-- End Bread crumb -->
  <!-- Container fluid  -->
  <div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card2">
          <div class="card-title">
            <h4 class="fa fa-pelanggan"> Edit Pelanggan</h4>

          </div>
          <div class="card-body">
            <div class="basic-form">
              <form action="/customer/{{$customer->id_pel}}" method="post" class="edit">
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                </div>
                  @endif
                <div class="form-group">
                  <label>Nama Pelanggan</label>
                  <input type="text" class="form-control" placeholder="Nama Pelanggan" name="nama_pel" value="{{$customer->nama_pel}}">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Nama Pelanggan" name="alamat" value="{{$customer->alamat}}">
                  <label>No Hp</label>
                  <input type="text" class="form-control" placeholder="Nama Pelanggan" name="telp" value="{{$customer->telp}}">
                </div>
            </div>
            <button type="submit" name="submit" value="edit" class="buttonsubmit"><i class="fa fa-arrow-circle-right" aria-hidden="true">Submit</i></button> {{ csrf_field() }}
            <input type="hidden" class="form-control" placeholder="Nama Pelanggan" name="_method" value="PUT">



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
</body>


<!-- End Wrapper -->
<!-- All Jquery -->
@endsection

@section('js')
  <script>
      $(".edit").on("submit", function(){
          return confirm("Apakah data sudah benar?");
      });
  </script>
@endsection

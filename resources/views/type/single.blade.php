@extends('layouts.menu')

@section('content')
<div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Jenis Cucian</h3> </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Detail Jenis Cucian</li>
      </ol>
    </div>
  </div>
  <!-- End Bread crumb -->
  <!-- Container fluid  -->
  <div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-title">
            <h4>Detail Jenis Cucian</h4>

          </div>
          <div class="card-body">
            <div class="basic-form">
              <form action="/type" method="post">
                <div class="form-group">
                  <label>Kode Jenis Cucian :  </label>
                  <label>{{$type->kd_jenis}}</label>
                </div>
                <div class="form-group">
                  <label>Jenis Cucian : </label>
                  <label>{{$type->jenis_cucian}}</label>
                </div>

                <div class="form-group">
                  <label>Harga : </label>
                  <label>{{$type->harga}}</label>
                </div>


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



<!-- End Wrapper -->
<!-- All Jquery -->
@endsection

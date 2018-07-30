@extends('layouts.menu')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Jenis Cucian</h3> </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Tambah Jenis Cucian</li>
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
            <h4 class="fa fa-cucian"> Tambah Jenis Cucian</h4>

          </div>
          <div class="card-body">
            <div class="basic-form">
              <form action="/type" method="post" class="tambah">
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
                  <label>Kode Jenis Cucian</label>
                  <input type="text" class="form-control" id="kd_jenis" name="kd_jenis" readonly>
                </div>

                <div class="form-group">
                  <label>Jenis Cucian</label>
                  <input type="text" class="form-control" placeholder="Jenis Cucian" name="jenis_cucian">
                </div>

                <div class="form-group">
                  <label>Harga (Per Kilo)</label>
                  <input type="text" class="form-control" placeholder="Harga" name="harga" >


            </div>
            <button type="submit" name="submit" value="Create" class="buttonsubmit"><i class="fa fa-arrow-circle-right" aria-hidden="true">Submit</i></button> {{ csrf_field() }}


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

<script type="text/javascript">
  $(document).ready(function() {

    var text = "";
    var text2 = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var possible2 = "1234567890";
    var a = new Date();


    // var today = new Date();
    for (var i = 0; i < 1; i++)
      text += possible.charAt(Math.floor(Math.random() * possible.length));
    for (var i = 0; i < 1; i++)
      text2 += possible2.charAt(Math.floor(Math.random() * possible2.length));
    $('#kd_jenis').val('J' + text + text2 );
  });
</script>

<script>
    $(".tambah").on("submit", function(){
        return confirm("Apakah data sudah benar?");
    });
</script>
@endsection

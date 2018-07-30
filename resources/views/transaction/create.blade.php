@extends('layouts.menu')

@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Transaksi</h3> </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Tambah Transaksi</li>
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
            <h4>Tambah Transaksi</h4>

          </div>
          <div class="card-body">
            <div class="basic-form">
              <form action="/transaction" method="post" name="formReception" class="tambah">
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
                  <label>No Transaksi</label>
                  <input type="text" class="form-control" id="no_trans" name="no_trans" readonly>
                </div>

                <div class="form-group">
                  <label>Nama Pelanggan</label>
                  <input type="text" class="typehead3 form-control" name="nama_pel">
                </div>

                <div class="form-group">
                  <label>No Order</label>
                  <input type="text" class="typehead3 form-control" name="no_order" id="nord" readonly>
                </div>

                {{-- <div class="form-group">
                  <label>Tanggal Transaksi</label>
                  <input type="text" class="form-control" value="today();" id="datepicker" data-date-format="yyyy-mm-dd" name="tgl_trans" readonly>
                </div> --}}

                <div class="form-group">
                    <label>Tanggal Transaksi</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" placeholder="Tanggal Transaksi" name="tgl_trans" />
                        <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                  <label>Total Bayar</label>
                  <input type="text" class="typehead3 form-control" name="t_bayar" id="totb" readonly>
                </div>

                <div class="form-group">
                  <label>Bayar</label>
                  <input type="text" class="typehead3 form-control" name="bayar" id="byr" readonly>
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <input type="text" class="typehead3 form-control" name="status" id="stts" readonly>
                </div>


                <div class="form-group">
                  <label>Status Cucian</label>
                  <input type="text" class="typehead3 form-control" name="status_cucian" id="sttsc" readonly>

                </div>

                <div class="form-group">
                  <label>Sisa</label>
                  <input type="text" class="typehead3 form-control" name="sisa" id="ssa" readonly>
                </div>

                <div class="form-group">
                  <label>Dibayar</label>
                  <input type="text" class="form-control" onFocus="startCalc(1);" onBlur="stopCalc();" name="dibayar">
                </div>

                <div class="form-group">
                  <label>Kembali</label>
                  <input type="text" class="form-control" name="kembalian">
                </div>

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

@endsection

@section('calc')
<script>
  function startCalc(data) {
    console.log(data);
    interval = setInterval("calc(" + data + ")", 1);
  }


  function calc(data) {
    if (data == 1) {
      sisa = document.formReception.sisa.value;
      dibayar = document.formReception.dibayar.value;
      document.formReception.status.value = ((status = "Lunas") ? "Lunas" : "Belum Lunas");
      var kembalian = (sisa) - (dibayar);
      document.formReception.kembalian.value = Math.abs(kembalian);
      document.formReception.status.value = ((kembalian <= 0) ? "Lunas" : "Belum Lunas");


      document.formReception.status_cucian.value = ((kembalian <= 0) ? "Cucian Selesai" : "Dalam Proses Pengerjaan");
    }

  }

  function stopCalc() {
    clearInterval(interval);
  }
</script>


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
      text2 += possible.charAt(Math.floor(Math.random() * possible2.length));
    $('#no_trans').val('T' + a.getDate() + text + a.getMonth() + text2);
  });
</script>

<script>
    $(".tambah").on("submit", function(){
        return confirm("Apakah data sudah benar?");
    });
</script>

<script type="text/javascript">

  $('#datetimepicker1').datetimepicker({
  format: 'YYYY-MM-DD'
  });
  $('#datetimepicker2').datetimepicker({
  format: 'YYYY-MM-DD'
  });
</script>


@endsection

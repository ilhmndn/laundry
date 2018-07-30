@extends('layouts.menu')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Cucian Masuk</h3> </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Tambah Cucian Masuk</li>
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
            <h4 class="fa fa-cucian"> Tambah Cucian Masuk</h4>

          </div>
          <div class="card-body">
            <div class="basic-form">
              <form action="/reception" method="post" name="formReception" class="tambah">
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
                  <label>No Order</label>
                  <input type="text" class="form-control" id="no_order" name="no_order" readonly>
                </div>

                <div class="form-group">
                  <label>Nama Pelanggan</label>
                  <input type="text" class="typehead form-control" name="nama_pel">
                </div>

                <div class="form-group">
                  <input type="hidden" class="typehead form-control" name="id_pel" id="idp">
                </div>

                <div class="form-group">
                  <label>Jenis Cucian</label>
                  <input type="text" class="typehead2 form-control" name="jenis_cucian">
                </div>

                <div class="form-group">
                  <input type="hidden" class="typehead2 form-control" name="kd_jenis" id="kdj">
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" class="typehead2 form-control" onFocus="startCalc();" onBlur="stopCalc();" name="harga" id="hrg" readonly>
                </div>

                <div class="form-group">
                  <label>Berat (per kilo)</label>
                  <input type="text" class="form-control" onFocus="startCalc(1);" onBlur="stopCalc();" name="berat">
                </div>

                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="keterangan">
                </div>

                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <div class='input-group date' id='datetimepicker2'>
                        <input type='text' class="form-control" placeholder="Tanggal Masuk" name="tgl_masuk" />
                        <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label>Tanggal Keluar</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" placeholder="Tanggal Keluar" name="tgl_keluar" />
                        <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                        </span>
                    </div>
                </div>

                <label>Total Bayar</label>
                <input type="text" class="form-control" name="t_bayar" readonly>
            </div>

            <div class="form-group">
              <label>Bayar</label>
              <input type="text" class="form-control" name="bayar" onFocus="startCalc(2);" onBlur="stopCalc();">
            </div>

            <div class="form-group">
              <label>kembalian</label>
              <input type="text" class="form-control" name="kembalian" readonly>
            </div>

            <div class="form-group">
              <label>Sisa</label>
              <input type="text" class="form-control" name="sisa" readonly>
            </div>

            <label>Status Bayar</label>
            <input type="text" class="form-control" name="status" readonly>
          </div>
            <div class="form-group">
            <label>Status Cucian</label>
            <input type="text" class="form-control" name="status_cucian" readonly>
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
      valueHarga = document.formReception.harga.value;
      valueBerat = document.formReception.berat.value;

      document.formReception.t_bayar.value = (valueHarga) * (valueBerat);
    } else if (data == 2) {
      total = document.formReception.t_bayar.value;
      bayar = document.formReception.bayar.value;
      var kembalian = (total) - (bayar);
      document.formReception.kembalian.value = Math.abs(kembalian);
      document.formReception.sisa.value = ((kembalian <= 0) ? "0" : document.formReception.kembalian.value );
      document.formReception.status.value = ((kembalian <= 0) ? "Lunas" : "Belum Lunas");
      document.formReception.status_cucian.value = "Dalam Proses Pengerjaan"

    }

  }

  function stopCalc() {
    clearInterval(interval);
  }
</script>

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
      text2 += possible.charAt(Math.floor(Math.random() * possible.length));
    $('#no_order').val('R' + a.getDate() + text+ a.getMonth() + text2);
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

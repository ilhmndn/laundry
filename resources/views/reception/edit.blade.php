@extends('layouts.menu')

@section('content')
<div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Cucian Masuk</h3> </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Edit Cucian Masuk</li>
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
            <h4 class="fa fa-cucian"> Edit Cucian Masuk</h4>

          </div>
          <div class="card-body">
            <div class="basic-form">
              <form action="/reception/{{$reception->no_order}}" method="post" name="formReception" class="edit">
                <div class="form-group">
                  <label>No Order</label>
                  <input type="text" class="form-control" name="no_order" value="{{$reception->no_order}}" readonly>
                  <label>ID Pelanggan</label>
                  <input type="text" class="form-control" name="id_pel" value="{{$reception->id_pel}}" readonly>
                  <label>Nama Pelanggan</label>
                  <input type="text" class="form-control" name="nama_pel" value="{{$reception->nama_pel}}" readonly>
                  {{-- <label>Tanggal Masuk</label>
                  <input type="text" class="form-control" id="datepicker" data-date-format="yyyy-mm-dd" value="{{$reception->tgl_masuk}}" name="tgl_masuk" readonly>
                  <label>Tanggal Keluar </label>
                  <input type="text" class="form-control" id="datepicker2" data-date-format="yyyy-mm-dd" value="{{$reception->tgl_keluar}}" name="tgl_keluar"> --}}


                      <label>Tanggal Masuk</label>
                      <div class='input-group date' id='datetimepicker2'>
                          <input type='text' class="form-control" placeholder="Tanggal Masuk" name="tgl_masuk" value="{{$reception->tgl_masuk}}"/>
                          <span class="input-group-addon">
                              <span class="fa fa-calendar"></span>
                          </span>
                      </div>



                      <label>Tanggal Keluar</label>
                      <div class='input-group date' id='datetimepicker1'>
                          <input type='text' class="form-control" placeholder="Tanggal Keluar" name="tgl_keluar" value="{{$reception->tgl_keluar}}" />
                          <span class="input-group-addon">
                              <span class="fa fa-calendar"></span>
                          </span>
                      </div>


                  <label>Total Bayar</label>
                  <input type="text" class="form-control" placeholder="Total Bayar" name="t_bayar" value="{{$reception->t_bayar}}" readonly>
                  <label>Bayar</label>
                  <input type="text" class="form-control" placeholder="Bayar" name="bayar" onFocus="startCalc(1);" onBlur="stopCalc();" value="{{$reception->bayar}}">
                  <label>Kembalian</label>
                  <input type="text" class="form-control" placeholder="Sisa" name="kembalian" value="{{$reception->kembalian}}" readonly>

                  <label>Sisa</label>
                  <input type="text" class="form-control" placeholder="Sisa" name="sisa" value="{{$reception->sisa}}" readonly>

                  <label>Status</label>
                  <input type="text" class="form-control" placeholder="Status" name="status" value="{{$reception->status}}"readonly>
                  <label>Status Cucian</label>
                  <input type="text" class="form-control" placeholder="Status Cucian" name="status_cucian" value="{{$reception->status_cucian}}" readonly>

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

@section('calc')
<script>
  function startCalc(data) {
    console.log(data);
    interval = setInterval("calc(" + data + ")", 1);
  }


  function calc(data) {
    if (data == 1) {
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

<script>
    $(".edit").on("submit", function(){
        return confirm("Apakah anda yakin?");
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

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
        <li class="breadcrumb-item active">Tambah Pelanggan</li>
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
            <h4 class="fa fa-pelanggan"> Tambah Pelanggan</h4>

          </div>

          <div class="card-body">
            <div class="basic-form">

              <form action="/customer" method="post" class="tambah">
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
                  <label >Nama Pelanggan</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama Pelanggan" name="nama_pel" >
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Masukkan Alamat Pelanggan" name="alamat" >
                </div>

                <div class="form-group">
                  <label>No Hp</label>
                  <input type="text" class="form-control" placeholder="Masukkan No HP Pelanggan" name="telp">
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

<!-- End Wrapper -->
<!-- All Jquery -->
@endsection

@section('js')


  <script src="js/lib/datatables/datatables.min.js"></script>
  <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
  <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
  <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
  <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
  <script src="js/lib/datatables/datatables-init.js"></script>

  <script>
      $(".tambah").on("submit", function(){
          return confirm("Apakah data sudah benar?");
      });
  </script>

@endsection

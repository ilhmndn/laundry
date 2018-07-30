@extends('layouts.menu')
@section('content')
<div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Jenis Cucian</h3> </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Jenis Cucian</li>
      </ol>
    </div>
  </div>
  <!-- End Bread crumb -->
  <!-- Container fluid  -->
  <div class="container-fluid">
    @include('flash-message')


  @yield('content')
    <!-- Start Page Content -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Jenis Cucian Omah Laundry</h4>
            <h6 class="card-subtitle">Export Data Pelanggan ke Excel, PDF & Print</h6>
            <div class="table-responsive m-t-40">
              <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Kode Jenis Cucian</th>
                    <th>Jenis Cucian</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Kode Jenis Cucian</th>
                    <th>Jenis Cucian</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($types as $type )
                  <tr>
                    <td>{{$type->kd_jenis}}</td>
                    <td>{{ucfirst($type->jenis_cucian)}}</td>
                    <td>Rp. {{$type->harga}} /Kg</td>
                    <td>

                      <form action="/type/{{$type->kd_jenis}}" method="post" class="hapus">
                          <a class="fa fa-edit" href="/type/{{$type->kd_jenis}}/edit"></a>
                        <button type="submit" class="buttonsubmit" name="submit" value="delete"><i class="fa fa-trash" aria-hidden="true"></i></button> {{ csrf_field() }}

                    </td>
                    <input type="hidden" name="_method" value="DELETE"></td>

                    </form>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
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
      $(".hapus").on("submit", function(){
          return confirm("Apakah anda yakin menghapus data ini?");
      });
  </script>

@endsection

@extends('layouts.menu')

@section('content')
<div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Laporan Transaksi</h3> </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Laporan</li>
      </ol>
    </div>
  </div>
  <!-- End Bread crumb -->
  <!-- Container fluid  -->
  <div class="container-fluid">
    <form action="{{route('pdf')}}" method="POST">
      @csrf
        <input type="submit" class="btn btn-info" value="Download" >
        <br>
        <br>

      <div class="row">
        <div class='col-sm-6'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker1' >
                <input type='text' class="form-control" placeholder="Tanggal Mulai" name="tanggal_mulai" />
                <span class="input-group-addon">
                    <span class="fa fa-calendar"></span>
                </span>
            </div>
        </div>
      </div>
      <div class='col-sm-6'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker2'>
                <input type='text' class="form-control" placeholder="Tanggal Akhir" name="tanggal_akhir" />
                <span class="input-group-addon">
                    <span class="fa fa-calendar"></span>
                </span>
            </div>
        </div>
      </div>
        </form>
    <!-- Start Page Content -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive m-t-40">
              <table id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>No Transaksi</th>
                    <th>No Order</th>
                    <th>Tanggal Transaksi</th>
                    <th>Nama Pelanggan</th>
                    <th>Total Bayar</th>

                  </tr>
                </thead>
                <tbody>
                  @php
                      $total = 0;
                    @endphp

                  @foreach($transactions as $transaction )
                  <tr>
                    <td>{{$transaction->no_trans}}</td>
                    <td>{{$transaction->no_order}}</td>
                    <td>{{$transaction->tgl_trans->format('d-m-y')}}</td>
                    <td>{{$transaction->Reception->nama_pel}}</td>
                  <td>Rp. {{$transaction->Reception->t_bayar}}</td>
                  </tr>
                  @php
                    $total += $transaction->Reception->t_bayar;
                  @endphp
                  @endforeach


                </tbody>

              </table>

            </div>
            <tr>
              <th rowspan="5" colspan="5" style="text-align:right">
                Total :
              </th>
              <th>
                Rp. {{$total}}
              </th>
            </tr>
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

  <script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
    $('#datetimepicker1').datetimepicker({
    format: 'YYYY-MM-DD'
    });
    $('#datetimepicker2').datetimepicker({
    format: 'YYYY-MM-DD'
    });
  </script>

  <script src="js/lib/datatables/datatables.min.js"></script>
  <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
  <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
  <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
  <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
  <script src="js/lib/datatables/datatables-init.js"></script>




@endsection

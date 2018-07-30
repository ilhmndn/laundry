<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/omah.png">
    <title>Omah Laundry</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/helper.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <link href="/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="/css/bootstrap-datepicker.min.css" rel="stylesheet" />

  </head>
  <body>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
          <CENTER> <img src="images/b.png" class="logologin"></CENTER><br>
          <h4 class="card-title"> <CENTER> LAPORAN TRANSAKSI OMAH LAUNDRY </CENTER></h4>

            <div class="table-responsive m-t-40">
              <table id="myTable" class="table table-bordered" cellspacing="0" width="100%">
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
                    </form>
                  </tr>
                  @php
                    $total += $transaction->Reception->t_bayar;
                  @endphp
                  @endforeach

                </tbody>
  <tr>
                  <td rowspan="4" colspan="4" style="text-align:right">
                    Total Pemasukan:
                  </td>
                  <td>
                    Rp. {{$total}}
                  </td>
    </tr>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>

    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>

    <script src="/js/jquery-1.10.2.min.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="/js/custom.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
        $('#myTable').DataTable();
    });


</script>

  </body>


</html>

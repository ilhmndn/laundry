@extends('layouts.menu')

@section('content')
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Transaksi</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Detail Transaksi</li>
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
                                <h4>Basic Form</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="/reception" method="post">
                                      <div class="form-group">
                                          <label>No Order :  </label>
                                          <label>{{$reception->no_order}}</label>
                                      </div>

                                      <div class="form-group">
                                          <label>ID Pelanggan :  </label>
                                          <label>{{$reception->id_pel}}</label>
                                      </div>

                                      <div class="form-group">
                                          <label>Nama Pelanggan :  </label>
                                          <label>{{$reception->nama_pel}}</label>
                                      </div>

                                      <div class="form-group">
                                          <label>Tanggal Masuk :  </label>
                                          <label>{{$reception->tgl_masuk}}</label>
                                      </div>

                                      <div class="form-group">
                                          <label>Tanggal Keluar  :  </label>
                                          <label>{{$reception->tgl_keluar}}</label>
                                      </div>

                                      <div class="form-group">
                                          <label>Total Bayar :  </label>
                                          <label>{{$reception->t_bayar}}</label>
                                      </div>

                                      <div class="form-group">
                                          <label>Bayar :  </label>
                                          <label>{{$reception->bayar}}</label>
                                      </div>

                                      <div class="form-group">
                                          <label>Sisa :  </label>
                                          <label>{{$reception->sisa}}</label>
                                      </div>

                                      <div class="form-group">
                                          <label>Status :  </label>
                                          <label>{{$reception->status}}</label>
                                      </div>

                                      <div class="form-group">
                                          <label>Status Cucian :  </label>
                                          <label>{{$reception->status_cucian}}</label>
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
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
    </body>


    <!-- End Wrapper -->
    <!-- All Jquery -->
    @endsection

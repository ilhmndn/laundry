@extends('layouts.menu')

@section('content')
  <!-- End Left Sidebar  -->
  <!-- Page wrapper  -->
  <div class="page-wrapper">
      <!-- Bread crumb -->
      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-primary">Dashboard</h3> </div>
          <div class="col-md-7 align-self-center">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item active">Dashboard</li>
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
              <div class="col-md-3">
                  <div class="card bg-primary p-20">
                      <div class="media widget-ten">
                          <div class="media-left meida media-middle">
                              <span><i class="ti-user f-s-40"></i></span>
                          </div>
                          <div class="media-body media-text-right" >
                              <h2 class="color-white"> <a href="/customer" class="clickarea"></a>   {{ $customers = DB::table('customers')->count() }}</h2>
                              <p class="m-b-0">Jumlah Pelanggan</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card bg-pink p-20">
                      <div class="media widget-ten">
                          <div class="media-left meida media-middle">
                              <span><i class="ti-layout-tab f-s-40"></i></span>
                          </div>
                          <div class="media-body media-text-right">
                              <h2 class="color-white"> <a href="/reception" class="clickarea"></a> {{ $receptions = DB::table('receptions')->count() }}</h2>
                              <p class="m-b-0">Jumlah Cucian Masuk</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card bg-success p-20">
                      <div class="media widget-ten">
                          <div class="media-left meida media-middle">
                              <span><i class="ti-notepad f-s-40"></i></span>
                          </div>
                          <div class="media-body media-text-right">
                              <h2 class="color-white"><a href="/transaction" class="clickarea"></a>{{ $transactions = DB::table('transactions')->count() }}</h2>
                              <p class="m-b-0">Jumlah Transaksi</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card bg-danger p-20">
                      <div class="media widget-ten">
                          <div class="media-left meida media-middle">
                              <span><i class="ti-printer f-s-40"></i></span>
                          </div>
                          <div class="media-body media-text-right">
                              <h2 class="color-white"><a href="/laporan" class="clickarea"></a>{{ $transactions = DB::table('transactions')->count() }}</h2>
                              <p class="m-b-0">Jumlah Laporan</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>




          <!-- End PAge Content -->
      </div>
      <!-- End Container fluid  -->
      <!-- footer -->

      <!-- End footer -->
  </div>
  <footer class="footer"> © 2018 All rights reserved by <a href="http://www.ilhmndn.me">ilhmndn</a></footer>
  <!-- End Page wrapper  -->
</div>
</body>


<!-- End Wrapper -->
<!-- All Jquery -->
@endsection

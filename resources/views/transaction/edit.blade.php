@extends('layouts.menu')

@section('content')
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                                    <form action="/reception/{{$reception->no_order}}" method="post">
                                      <div class="form-group">
                                          <label>No Order : </label>
                                          <label>{{$reception->no_order}}</label>
                                          <input type="text" class="form-control" placeholder="No Order" name="no_order" value="{{$reception->no_order}}" hidden><br>

                                          <label>ID Pelanggan : </label>
                                          <label>{{$reception->id_pel}}</label>
                                          <input type="text" class="form-control" placeholder="ID Pelanggan" name="id_pel" value="{{$reception->id_pel}}" hidden><br>

                                          <label>Nama Pelanggan : </label>
                                          <label>{{$reception->nama_pel}}</label>
                                          <input type="text" class="form-control" placeholder="Nama Pelanggan" name="nama_pel" value="{{$reception->nama_pel}}" hidden><br><br>
                                          <label>Tanggal Masuk</label>
                                          <input type="date" class="form-control" placeholder="Tanggal Masuk" name="tgl_masuk" value="{{$reception->tgl_masuk}}">
                                          <label>Tanggal Keluar </label>
                                          <input type="date" class="form-control" placeholder="Tanggal Keluar" name="tgl_keluar" value="{{$reception->tgl_keluar}}">
                                          <label>Total Bayar</label>
                                          <input type="text" class="form-control" placeholder="Total Bayar" name="t_bayar" value="{{$reception->t_bayar}}">
                                          <label>Bayar</label>
                                          <input type="text" class="form-control" placeholder="Bayar" name="bayar" value="{{$reception->bayar}}">
                                          <label>Sisa</label>
                                          <input type="text" class="form-control" placeholder="Sisa" name="sisa" value="{{$reception->sisa}}">
                                          <label>Status</label>
                                          <input type="text" class="form-control" placeholder="Status" name="status" value="{{$reception->status}}">
                                          <label>Status Cucian</label>
                                          <input type="text" class="form-control" placeholder="Status Cucian" name="status_cucian" value="{{$reception->status_cucian}}">

                                      </div>
                                      </div>
                                      <button type="submit" name="submit" value="edit" class="btn btn-default">Edit</button>
                                      {{ csrf_field() }}
                                      <input type="hidden" class="form-control" placeholder="b" name="_method" value="PUT">


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
  </body>


  <!-- End Wrapper -->
  <!-- All Jquery -->
  @endsection

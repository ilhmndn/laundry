<html lang="{{ app()->getLocale() }}">

<head><!-- CSRF Token -->
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
  <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<div class="preloader">
  <svg class="circular" viewBox="25 25 50 50">
  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">
  <!-- header header  -->
  <div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
      <!-- Logo -->
      <div class="navbar-header">
        <a class="navbar-brand" href="/home">
          <span><img src="/images/logo-text.png" alt="homepage" class="dark-logo"/> </span>
        </a>
      </div>
      <!-- End Logo -->
      <div class="navbar-collapse">
        <!-- toggle and nav items -->
        <ul class="navbar-nav mr-auto mt-md-0">
          <!-- This is  -->
          <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
          <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
          <!-- Messages -->

            <div class="dropdown-menu animated zoomIn">
              <ul class="mega-dropdown-menu row">



              </ul>
            </div>
          </li>
          <!-- End Messages -->
        </ul>
        <!-- User profile and search -->
        <ul class="navbar-nav my-lg-0"

          </li>
          <!-- Comment -->

          </a>
            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
              <ul>

                <li>

                </li>

              </ul>
            </div>
          </li>
          <!-- End Comment -->
          <!-- Messages -->

          </a>
            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
              <ul>
                <li>
                  <div class="drop-title">You have 4 new messages</div>
                </li>
                <li>
                  <div class="message-center">
                    <!-- Message -->
                    <a href="#">
                      <div class="user-img"> <img src="/images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                      <div class="mail-contnet">
                        <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#">
                      <div class="user-img"> <img src="/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                      <div class="mail-contnet">
                        <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#">
                      <div class="user-img"> <img src="/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                      <div class="mail-contnet">
                        <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#">
                      <div class="user-img"> <img src="/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                      <div class="mail-contnet">
                        <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                      </div>
                    </a>
                  </div>
                </li>
                <li>
                  <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                </li>
              </ul>
            </div>
          </li>

          <!-- End Messages -->
          <!-- Profile -->

          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle text-muted " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/images/users/profix.png" alt="user" class="profile-pic" /></a>
            {{ Auth::user()->name }}
            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
              <ul class="dropdown-user">
                @guest
                            <li>
                                <a href="{{ route('login') }}"><i class="ti-user"></i>{{ __('Login') }}</a></li>
                            <li>
                                <a href="{{ route('register') }}"><i class="ti-settings"></i>{{ __('Register') }}</a></li>
                        @else
                            <li>
                                <a href="/home/{{ Auth::user()->id }}/edit"><i class="ti-user"></i>
                                  Edit Profil </a> </li>

                            <li>
                                <a href="/home/create"><i class="fa fa-user"></i>
                                  Kelola Akun </a> </li>

                              <li><a  href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"> <i class="fa fa-power-off"></i>
                                  {{ __('Logout') }}</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- End header header -->
  <!-- Left Sidebar  -->
  <div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav">
          <li class="nav-devider"></li>
          <li class="nav-label">Home</li>
          <li> <a class="has-arrow  " href="/home" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>

          </li>



          <li class="nav-label">Item</li>
          {{--MENU PELANGGAN--}}
          <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-pelanggan"></i><span class="hide-menu">Pelanggan <span class="label label-rouded label-primary pull-right">{{ $customers = DB::table('customers')->count() }}</span></span></a>
            <ul aria-expanded="false" class="collapse">
              <li><a href="/customer">Daftar Pelanggan </a></li>
              <li><a href="/customer/create">Tambah Pelanggan </a></li>
            </ul>
          </li>

          {{--MENU CUCIAN--}}
          <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cucian"></i><span class="hide-menu">Jenis Cucian</span></a>
            <ul aria-expanded="false" class="collapse">
              <li><a href="/type">Daftar Jenis Cucian</a></li>
              <li><a href="/type/create">Tambah Jenis Cucian </a></li>
            </ul>
          </li>

          <li class="nav-label">Cucian</li>
          <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-masuk"></i><span class="hide-menu">Cucian Masuk <span class="label label-rouded label-warning pull-right">{{ $receptions = DB::table('receptions')->count() }}</span></span></a>
            <ul aria-expanded="false" class="collapse">
              <li><a href="/reception">Daftar Cucian Masuk</a></li>
              <li><a href="/reception/create">Tambah Cucian Masuk</a></li>
            </ul>
          </li>

          <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Transaksi <span class="label label-rouded label-success pull-right">{{ $transactions = DB::table('transactions')->count() }}</span></span></a>
            <ul aria-expanded="false" class="collapse">
              <li><a href="/transaction">Daftar Transaksi</a></li>
              <li><a href="/transaction/create">Tambah Transaksi</a></li>

            </ul>
          </li>

          <li class="nav-label">Laporan</li>
          <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Laporan <span class="label label-rouded label-danger pull-right">{{ $transactions = DB::table('transactions')->count() }}</span></span></a>
            <ul aria-expanded="false" class="collapse">
              <li><a href="/laporan">Laporan Transaksi</a></li>

            </ul>
          </li>

          <li class="nav-label">Tentang</li>
          <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-tentang"></i><span class="hide-menu">Tentang </span></a>
            <ul aria-expanded="false" class="collapse">
              <li><a href="uc-calender.html">Tentang Omah Laundry</a></li>
              <li><a href="uc-datamap.html">Tentang Saya</a></li>
            </ul>
          </li>

        </ul>
        </li>
        </ul>
      </nav>

    </div>
    <!-- End Sidebar scroll-->
  </div>

  @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
  {{-- <script src="/js/lib/jquery/jquery.min.js"></script> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="/js/lib/bootstrap/js/popper.min.js"></script>
  <script src="/js/lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="/js/jquery.slimscroll.js"></script>
  <!--Menu sidebar -->
  <script src="/js/sidebarmenu.js"></script>
  <!--stickey kit -->
  <script src="/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
  <script src="/js/lib/owl-carousel/owl.carousel.min.js"></script>
  <script src="/js/lib/owl-carousel/owl.carousel-init.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

{{--
  <script src="/js/lib/chartist/chartist.min.js"></script>
  <script src="/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
  <script src="/js/lib/chartist/chartist-init.js"></script> --}}

  @yield('js')
  <!--Custom JavaScript -->
  <script src="/js/custom.min.js"></script>

  <!--Custom TypeAhead -->
  <script type="text/javascript">
    $(document).ready(function() {
      var input = $('input.typehead');
      var path = "{{route('autocomplete')}}";
      input.typeahead({
        source: function(query, process) {
          return $.get(path, {
            query: query
          }, function(data) {
            // console.log(data);

            return process(data);

          })
        }
      })

      input.change(function() {
        var current = input.typeahead("getActive");
        if (current) {
          // Some item from your model is active!
          if (current.name == input.val()) {
            // console.log(current.nmp);
            // $('#nord').val(current.nord);
            $('#idp').val(current.idp);

            // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
          } else {
            // This means it is only a partial match, you can either add a new item
            // or take the active if you don't want new items
          }
        } else {
          // Nothing is active so it is a new value (or maybe empty value)
        }
      });
    })
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      var input = $('input.typehead2');
      var path = "{{route('autocomplete2')}}";
      input.typeahead({
        source: function(query, process) {
          return $.get(path, {
            query: query
          }, function(data2) {
            // console.log(data);

            return process(data2);

          })
        }
      })

      input.change(function() {
        var current = input.typeahead("getActive");
        if (current) {
          // Some item from your model is active!
          if (current.name == input.val()) {
            $('#kdj').val(current.kdj);
            $('#hrg').val(current.hrg);

            // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
          } else {
            // This means it is only a partial match, you can either add a new item
            // or take the active if you don't want new items
          }
        } else {
          // Nothing is active so it is a new value (or maybe empty value)
        }
      });
    })
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      var input = $('input.typehead3');
      var path = "{{route('autocomplete3')}}";
      input.typeahead({
        source: function(query, process) {
          return $.get(path, {
            query: query
          }, function(data3) {
            // console.log(data);

            return process(data3);

          })
        }
      })

      input.change(function() {
        var current = input.typeahead("getActive");
        if (current) {
          // Some item from your model is active!
          if (current.name == input.val()) {
            $('#nord').val(current.nord);
            $('#totb').val(current.totb);
            $('#byr').val(current.byr);
            $('#stts').val(current.stts);
            $('#sttsc').val(current.sttsc);
            $('#ssa').val(current.ssa);


            // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
          } else {
            // This means it is only a partial match, you can either add a new item
            // or take the active if you don't want new items
          }
        } else {
          // Nothing is active so it is a new value (or maybe empty value)
        }
      });
    })
  </script>

  <!--Custom Calc -->

  <!-- Menghitung otomatis -->

  <!--Custom DatePicker -->


  @yield('calc')

  {{-- <script type="text/javascript">
    $("#datepicker").datepicker("setDate", new Date());
    $("#datepicker").css('pointer-events', 'none');
    $('#datepicker').datepicker({


      "setDate": new Date(),
      "autoclose": true,
      "disabled": true,
    });

    $('#datepicker2').datepicker({
      "autoclose": true,
      "disabled": true

    });
  </script> --}}


</html>

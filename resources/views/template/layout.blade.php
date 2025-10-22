<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $data['title'] }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('assets') }}/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('assets') }}/bower_components/jvectormap/jquery-jvectormap.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <span class="logo-lg"><b>APP-</b>LAUNDRY</span>
                <span class="logo-mini"><b>APP</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('assets') }}/dist/img/caleg.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">User</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('assets') }}/dist/img/caleg.png" class="img-circle" alt="User Image">
                                    <!-- Menu Footer-->
                                <li class="user-footer">

                                    <div class="pull-right">
                                        <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset('assets') }}/dist/img/caleg.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>
                            {{ session('username') }}
                            <a href="#"><i class="fa fa-location-dot text-success"></i> Medan
                            </a>
                    </div>
                </div>
                <!-- search form -->
                {{-- <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form> --}}
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MENU NAVIGATION</li>
                    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>


                    <li class="treeview" style="height: auto;">
                        <a href="#">
                            <i class="fa fa-gear"></i> <span>Setting</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li><a href="/user"><i class="fa fa-circle-o"></i>User</a></li>

                        </ul>
                    </li>

                    <li class="treeview" style="height: auto;">
                        <a href="#">
                            <i class="fa fa-file"></i> <span>Report</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li>
                                <a href="/laporantransaksi"><i class="fa fa-circle-o"></i>Transaction</a>
                            </li>

                        </ul>
                    </li>

                    <li><a href="/logout"><i class="fa fa-right-from-bracket"></i> <span>Logout</span></a></li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">





            @yield('content')


            <!-- jQuery 3 -->
            <script src="{{ asset('assets') }}/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <!--<script src="{{ asset('assets') }}/bower_components/jquery-ui/jquery-ui.min.js"></script>-->
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button);

            </script>
            <!-- Bootstrap 3.3.7 -->
            <script src="{{ asset('assets') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- Morris.js charts -->
            <script src="{{ asset('assets') }}/bower_components/raphael/raphael.min.js"></script>
            <script src="{{ asset('assets') }}/bower_components/morris.js/morris.min.js"></script>
            <!-- Sparkline -->
            <script src="{{ asset('assets') }}/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
            <!-- jvectormap -->
            <script src="{{ asset('assets') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="{{ asset('assets') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="{{ asset('assets') }}/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="{{ asset('assets') }}/bower_components/moment/min/moment.min.js"></script>
            <script src="{{ asset('assets') }}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
            <!-- datepicker -->
            <script src="{{ asset('assets') }}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src="{{ asset('assets') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
            <!-- Slimscroll -->
            <script src="{{ asset('assets') }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <!-- FastClick -->
            <script src="{{ asset('assets') }}/bower_components/fastclick/lib/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('assets') }}/dist/js/adminlte.min.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="{{ asset('assets') }}/dist/js/pages/dashboard.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="{{ asset('assets') }}/dist/js/demo.js"></script>
            <script src="{{ asset('assets') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="{{ asset('assets') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>


            <script>
                $(function() {
                    $('#example1').DataTable({
                        'paging': false
                    , })
                    $('#example2').DataTable({
                        'paging': true
                        , 'lengthChange': false
                        , 'searching': false
                        , 'ordering': true
                        , 'info': true
                        , 'autoWidth': false
                    });
                })

            </script>

            @if (session('success'))
            <script>
                Swal.fire({
                    title: "Yess"
                    , text: "{{ session('success') }}"
                    , icon: "success"
                    , showConfirmButton: false
                    , timer: 1000 // otomatis hilang setelah 2 detik

                });

            </script>
            @endif

            @if (session('error'))
            <script>
                Swal.fire({
                    title: "Opps"
                    , text: "{{ session('error') }}"
                    , icon: "error"
                    , showConfirmButton: false
                    , timer: 1000 // otomatis hilang setelah

                });

            </script>
            @endif

            <script>
                $(".btnhapus").click(function() {
                    var id = $(this).data('id');
                    var url = $(this).data('url');
                    var aksi = $(this).data('aksi');

                    var level = '{{ session('
                    level ') }}';
                    if (level == 'Administrator') {

                        $.ajax({
                            url: url + '/' + id
                            , type: 'DELETE'
                            , data: {
                                _token: '{{ csrf_token() }}'
                            },

                            success: function(response) {
                                Swal.fire({
                                    title: 'Berhasil!'
                                    , text: response.message
                                    , icon: 'success'
                                    , showConfirmButton: false
                                    , timer: 1000, // tampil 2 detik
                                    timerProgressBar: true
                                }).then(() => {
                                    if (url == 'hapustransaksi') {
                                        location.replace('/transaksi');

                                    } else {
                                        location.reload();
                                    }
                                });

                            }
                            , error: function() {
                                Swal.fire('Gagal!', 'Terjadi kesalahan saat menghapus.'
                                    , 'error');
                            }
                        })

                    } else {
                        $.ajax({
                            url: url + '/' + id
                            , type: 'DELETE'
                            , data: {
                                _token: '{{ csrf_token() }}'
                            }
                            , success: function(response) {
                                Swal.fire({
                                    title: "Deleted!"
                                    , text: "Your file has been deleted."
                                    , icon: "success"
                                    , showConfirmButton: false
                                    , timer: 1000, // tampil 2 detik
                                    timerProgressBar: true
                                }).then(() => {
                                    location.reload();
                                });
                            }
                            , error: function() {
                                Swal.fire('Gagal!'
                                    , 'Terjadi kesalahan saat menghapus.'
                                    , 'error');
                            }
                        })

                    }
                });

                $(".typecost").change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "/detailcost/" + id
                        , type: 'GET'
                        , success: function(response) {
                            $("#detailcost").val(response.detail);
                            $(".editdetailcost").val(response.detail);
                        }
                        , error: function(error) {
                            console.log(error.message);

                        }
                    })
                });

                $("#mr").change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: 'store/' + id
                        , type: 'GET'
                        , success: function(response) {
                            $("#store").val(response.store);
                        }
                        , error: function(err) {
                            console.log(err.message);

                        }
                    })
                });

                $(".mr").change(function() {
                    var id = $(this).val();
                    var data = $(this).data('id');
                    $.ajax({
                        url: 'store/' + id
                        , type: 'GET'
                        , success: function(response) {
                            $(".store").val(response.store);
                        }
                        , error: function(err) {
                            console.log(err.message);

                        }
                    })
                });


                $("#wa").change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: 'customer/' + id
                        , type: 'GET'
                        , success: function(response) {
                            $("#customer").val(response.customer);
                            $("#rekening").html(response.rekening);
                            $("#produk").html(response.produk);
                            $("#kode-customer").val(response.kode_customer);

                        }
                        , error: function(error) {
                            console.log(error.message);
                        }
                    })
                });

                $(".wa").change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: 'customer/' + id
                        , type: 'GET'
                        , success: function(response) {
                            $(".customer").val(response.customer);
                            $(".rekening").html(response.rekening);

                        }
                        , error: function(error) {
                            console.log(error.message);
                        }
                    })
                });


                $("#produk").change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: 'produk/' + id
                        , type: 'GET'
                        , success: function(response) {
                            $("#rate").val(response.rate);
                            $("#admin").val(response.admin);

                            var rate = $("#rate").val();
                            var rate2 = parseFloat(rate);
                            var admin = $("#admin").val();
                            var transaksi = $("#transaksi").val();
                            var hasiladmin = parseInt(admin.replace(/[.,]/g, ""));
                            var hasiltransaksi = parseInt(transaksi.replace(/[.,]/g, ""));
                            let hasilBiaya = Math.floor(hasiltransaksi * (rate2 / 100));
                            console.log('Biaya : ', hasilBiaya);
                            $("#biaya").val(formatRupiah(Math.floor(hasilBiaya)));
                            let transfer = hasiltransaksi - hasilBiaya - hasiladmin;
                            $("#transfer").val(formatRupiah(transfer));

                        }
                        , error: function(error) {}
                    })
                });

                $(".produk").change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: 'produk/' + id
                        , type: 'GET'
                        , success: function(response) {
                            $(".rate").val(response.rate);
                            $(".admin").val(response.admin);
                        }
                        , error: function(error) {}
                    })
                });


                $("#transaksi").on('input', function() {
                    var val = $(this).val();

                    let angka = val.replace(/[^0-9]/g, '');
                    if (angka === '') {
                        $(this).val('');
                        return;
                    }
                    // Format tampilan input
                    $(this).val(formatRupiah(angka));

                    // Ambil nilai rate dan admin
                    var rate = $("#rate").val();
                    var rate2 = parseFloat(rate);

                    var admin = $("#admin").val();
                    var hasiladmin = parseInt(admin.replace(/[.,]/g, ""));

                    var nominal = parseInt(val.replace(/[.,]/g, ""));
                    let hasilBiaya = Math.floor(nominal * (rate2 / 100));
                    console.log('Biaya : ', hasilBiaya);
                    $("#biaya").val(formatRupiah(Math.floor(hasilBiaya)));
                    let transfer = nominal - hasilBiaya - hasiladmin;
                    $("#transfer").val(formatRupiah(transfer));

                })


                $(".transaksi").keyup(function() {
                    var val = $(this).val();
                    var rate = $(".rate").val();
                    var rate2 = parseFloat(rate);
                    var persentase = rate2 / 100;
                    var hasil = persentase * val;
                    var admin = $(".admin").val();
                    var transfer = val - hasil - admin

                    $(".biaya").val(hasil);
                    $(".transfer").val(transfer);

                })

                $(".btnstatus").click(function() {
                    var id = $(this).data('id');
                    var url = $(this).data('url');
                    var aksi = $(this).data('aksi');

                    var level = '{{ session('
                    level ') }}';
                    if (level == 'Administrator') {

                        if (url == 'updatetransfer') {
                            var idcus = $(this).data('wa');
                            var total = $('.valtotaltf' + idcus).val();
                            var tf = $(this).data('tf');
                            var updatetotal = Number(total) - Number(tf);
                            var cs = '.totaltf' + idcus;
                            var text = 'Total Transfer : ' + formatRupiah(updatetotal);
                            $('.valtotaltf' + idcus).val(updatetotal);
                            $(cs).text(text);

                            var rv = '.remove' + id;
                            $(rv).remove();
                        }

                        $.ajax({
                            url: url + '/' + id
                            , type: 'PUT'
                            , data: {
                                _token: '{{ csrf_token() }}'
                            },

                            success: function(response) {


                                Swal.fire({
                                    title: 'Berhasil!'
                                    , text: response.message
                                    , icon: 'success'
                                    , showConfirmButton: false
                                    , timer: 1000, // tampil 2 detik
                                    timerProgressBar: true
                                }).then(() => {
                                    // location.reload();

                                    var rv = '.remove' + id;
                                    $(rv).remove();
                                });

                            }
                            , error: function() {
                                Swal.fire('Gagal!', 'Terjadi kesalahan saat memproses.'
                                    , 'error');
                            }
                        })



                    } else {

                        Swal.fire({
                            title: 'Masukan informasi '
                            , input: 'text'
                            , inputPlaceholder: 'Informasi'
                            , showCancelButton: true
                            , confirmButtonText: 'Kirim'
                            , cancelButtonText: 'Batal'
                            , inputValidator: (value) => {
                                if (!value) {
                                    return 'Informasi tidak boleh kosong!';
                                }
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Swal.fire('Terkirim!', 'Nama: ' + result.value, 'success');
                                kiriminformasi(aksi, result.value);

                                Swal.fire({
                                    title: "Apa kamu yakin?"
                                    , text: "Data ini sudah melakukan transfer"
                                    , icon: "warning"
                                    , showCancelButton: true
                                    , confirmButtonColor: "#3085d6"
                                    , cancelButtonColor: "#d33"
                                    , confirmButtonText: "Yes"
                                }).then((result) => {
                                    if (result.isConfirmed) {

                                        $.ajax({
                                            url: url + '/' + id
                                            , type: 'PUT'
                                            , data: {
                                                _token: '{{ csrf_token() }}'
                                            },

                                            success: function(response) {
                                                Swal.fire({
                                                    title: "Deleted!"
                                                    , text: "Your file has been deleted."
                                                    , icon: "success"
                                                });
                                                location.reload();
                                            }
                                            , error: function() {
                                                Swal.fire('Gagal!'
                                                    , 'Terjadi kesalahan saat menghapus.'
                                                    , 'error');
                                            }
                                        })
                                    }
                                });

                            }
                        });

                    }
                });


                $(".btnstatusreceive").click(function() {

                    var id = $(this).data('id');
                    var url = $(this).data('url');
                    var aksi = $(this).data('aksi');
                    // var total_receive = $(this).data('totalreceive');



                    var receive = $(this).data('receive');
                    var store = $(this).data('store');
                    var no = $(this).data('no');
                    var total_receive = $('.totalreceive-' + store + '-' + no).text();

                    var updatereceive = receive.replace(/[.,]/g, "");
                    var updatetotalreceive = total_receive.replace(/[.,]/g, "");

                    var updatetotal = Number(updatetotalreceive) - Number(updatereceive);
                    const row = $("#row" + id);

                    var level = '{{ session('
                    level ') }}';
                    if (level == 'Administrator') {

                        $.ajax({
                            url: url + '/' + id
                            , type: 'PUT'
                            , data: {
                                _token: '{{ csrf_token() }}'
                            },

                            success: function(response) {
                                Swal.fire({
                                    title: 'Berhasil!'
                                    , text: response.message
                                    , icon: 'success'
                                    , showConfirmButton: false
                                    , timer: 1000, // tampil 2 detik
                                    timerProgressBar: true
                                }).then(() => {


                                    row.remove();
                                    let formatted = updatetotal.toLocaleString('id-ID');
                                    $('.totalreceive-' + store + '-' + no).text(formatted);
                                    //    alert(updatetotalreceive+'-'+updatereceive)
                                    // location.reload();
                                });
                            }
                            , error: function() {
                                Swal.fire('Gagal!', 'Terjadi kesalahan saat memproses.', 'error');
                            }
                        })
                    } else {


                        Swal.fire({
                            title: 'Masukan informasi '
                            , input: 'text'
                            , inputPlaceholder: 'Informasi'
                            , showCancelButton: true
                            , confirmButtonText: 'Kirim'
                            , cancelButtonText: 'Batal'
                            , inputValidator: (value) => {
                                if (!value) {
                                    return 'Informasi tidak boleh kosong!';
                                }
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                kiriminformasi(aksi, result.value);
                                Swal.fire({
                                    title: "Apa kamu yakin?"
                                    , text: "Data ini sudah melakukan transfer"
                                    , icon: "warning"
                                    , showCancelButton: true
                                    , confirmButtonColor: "#3085d6"
                                    , cancelButtonColor: "#d33"
                                    , confirmButtonText: "Yes"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        $.ajax({
                                            url: url + '/' + id
                                            , type: 'PUT'
                                            , data: {
                                                _token: '{{ csrf_token() }}'
                                            }
                                            , success: function(response) {
                                                // Swal.fire({
                                                //     title: "Deleted!",
                                                //     text: "Your file has been deleted.",
                                                //     icon: "success"
                                                // });
                                                // location.reload();

                                                row.remove();
                                                let formatted = updatetotal.toLocaleString('id-ID');
                                                $('.totalreceive-' + store + '-' + no).text(formatted);

                                            }
                                            , error: function() {
                                                Swal.fire('Gagal!'
                                                    , 'Terjadi kesalahan saat menghapus.'
                                                    , 'error');
                                            }
                                        })
                                    }
                                });

                            }
                        });
                    }
                })


                $("#investasi").on('input', function() {
                    var val = $(this).val();
                    let angka = val.replace(/[^0-9]/g, '');
                    if (angka === '') {
                        $(this).val('');
                        return;
                    }
                    $(this).val(formatRupiah(angka));
                })

                let timeout;
                $('#whatsapp').on('input', function() {

                    let input = $(this).val();

                    // Hilangkan semua karakter kecuali angka
                    let numbers = input.replace(/\D/g, '');

                    // Paksa awalan 62
                    if (!numbers.startsWith('62')) {
                        numbers = '62' + numbers.replace(/^0+/, '');
                    }

                    // Potong maksimal 13 digit (62 + 11 digit nomor)
                    numbers = numbers.substring(0, 18);

                    // Format: 62 895-2207-8908
                    let formatted = numbers;

                    if (numbers.length > 2) {
                        formatted = numbers.slice(0, 2) + ' ';
                    }
                    if (numbers.length > 5) {
                        formatted += numbers.slice(2, 5) + '-' + numbers.slice(5, 9);
                    } else if (numbers.length > 2) {
                        formatted += numbers.slice(2);
                    }
                    if (numbers.length > 9) {
                        formatted += '-' + numbers.slice(9, 14);
                    }

                    if (numbers.length > 14) {
                        formatted += '-' + numbers.slice(14, 17);
                    }

                    $(this).val(formatted);


                });

                $('#no-rekening').on('input', function() {
                    let input = $(this).val();
                    let numbers = input.replace(/\D/g, '');
                    let formatted = numbers.match(/.{1,4}/g);
                    if (formatted) {
                        $(this).val(formatted.join('-'));
                    } else {
                        $(this).val('');
                    }
                })

                $('.no-rekening').on('input', function() {
                    let input = $(this).val();
                    let numbers = input.replace(/\D/g, '');
                    let formatted = numbers.match(/.{1,4}/g);
                    if (formatted) {
                        $(this).val(formatted.join('-'));
                    } else {
                        $(this).val('');
                    }
                })



                function formatRupiah(angka) {
                    let reverse = angka.toString().split('').reverse().join('');
                    let ribuan = reverse.match(/\d{1,3}/g);
                    let hasil = ribuan.join('.').split('').reverse().join('');
                    return hasil;
                }


                $(".klik").click(function() {
                    var id = $(this).data('id');

                    var targetElement = $('#atas');
                    // Scroll halus ke elemen
                    $('html, body').animate({
                        scrollTop: targetElement.offset().top
                    }, 500); // 500 ms untuk

                    $.ajax({
                        url: '/detailtransaksi/' + id
                        , type: 'GET'
                        , success: function(response) {
                            // console.log(response.tanggal);
                            $("#formedittransaksi").html(response);
                        }
                        , error: function(error) {

                        }
                    })
                })

                // informasi

                // $("#submitaksi").click(function(){
                //     var aksi = $(".informasi").data('aksi')
                //     var info = $("#info").val();

                //     $.ajax({
                //         url : '/aktivitas',
                //         type : 'POST',
                //         data : {
                //              _token: '{{ csrf_token() }}',
                //              aksi : aksi,
                //              info : info,
                //              id_user : {{ session('id_user') }},
                //         },
                //         success : function(respnse){
                //             console.log('sukses');
                //             $("#close").click()
                //             $("#submit").show();
                //             $(".informasi").hide();
                //         },
                //         error : function(error){
                //             console.log(error.message);
                //         }
                //     })
                // })

                // function kiriminformasi(aksi, info) {

                //     $.ajax({
                //         url: '/aktivitas'
                //         , type: 'POST'
                //         , data: {
                //             _token: '{{ csrf_token() }}'
                //             , aksi: aksi
                //             , info: info
                //             , id_user: ''
                //         , }
                //         , success: function(respnse) {
                //             console.log('sukses');

                //             $("#submit").show();
                //             $(".informasi").hide();
                //         }
                //         , error: function(error) {
                //             console.log(error.message);
                //         }
                //     })

                // }

                $(".informasi").click(function() {

                    Swal.fire({
                        title: 'Masukan informasi'
                        , input: 'text'
                        , inputPlaceholder: 'Informasi'
                        , showCancelButton: true
                        , confirmButtonText: 'Kirim'
                        , cancelButtonText: 'Batal'
                        , inputValidator: (value) => {
                            if (!value) {
                                return 'Informasi tidak boleh kosong!';
                            }
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            //  Swal.fire('Terkirim!', 'Nama: ' + result.value, 'success');
                            var aksi = $(".informasi").data('aksi')
                            kiriminformasi(aksi, result.value);
                            sessionStorage.setItem('info', result.value);
                            $("#submit").click();
                        }
                    });

                })

                $("#cost").on('input', function() {
                    var val = $(this).val();
                    let angka = val.replace(/[^0-9]/g, '');
                    if (angka === '') {
                        $(this).val('');
                        return;
                    }
                    $(this).val(formatRupiah(angka));

                })

                $("#admin1").on('input', function() {
                    var val = $(this).val();
                    let angka = val.replace(/[^0-9]/g, '');
                    if (angka === '') {
                        $(this).val('');
                        return;
                    }
                    $(this).val(formatRupiah(angka));

                })

                $("#admin2").on('input', function() {
                    var val = $(this).val();
                    let angka = val.replace(/[^0-9]/g, '');
                    if (angka === '') {
                        $(this).val('');
                        return;
                    }
                    $(this).val(formatRupiah(angka));

                })

                $(".transfer").click(function() {
                    var id = $(this).data('id');
                    Swal.fire({
                        title: "Apa kamu yakin"
                        , text: "Data ini ingin di proses"
                        , icon: "warning"
                        , showCancelButton: true
                        , confirmButtonColor: "#3085d6"
                        , cancelButtonColor: "#d33"
                        , confirmButtonText: "Yes"
                    }).then((result) => {

                        if (result.isConfirmed) {

                            // $.ajax({
                            //     url : 'transfer/'+id,
                            //     type : 'PUT',
                            //     success : function(response){
                            //         console.log(response);

                            //         Swal.fire({
                            //             title: "Deleted!",
                            //             tex:t "Your file has been deleted.",
                            //             icon: "success"
                            //         });

                            //     },
                            //     error : function(error){
                            //         console.log(error);

                            //     }
                            // })


                        }
                    });


                })



                $("#filterplstore").change(function() {
                    var val = $(this).val();
                    if (val == 'tanggal') {
                        $("#tanggal").show();
                        $("#bulan").hide();
                    } else {
                        $("#tanggal").hide();
                        $("#bulan").show();
                    }
                })

                $("#filtertanggal").change(function() {
                    var val = $(this).val();
                    $.ajax({
                        type: 'GET'
                        , url: '/plstoretanggal' + '/' + val
                        , success: function(response) {
                            $("#datafilter").html(response);
                        }
                        , error: function(error) {
                            console.log(error.message);
                        }
                    })
                })

                $("#filterbulan").change(function() {
                    var val = $(this).val();
                    $.ajax({
                        type: 'GET'
                        , url: '/plstorebulan' + '/' + val
                        , success: function(response) {
                            $("#datafilter").html(response);
                        }
                        , error: function(error) {
                            console.log(error.message);
                        }
                    })

                })

                $("#all").change(function() {
                    $('.item').prop('checked', $(this).prop('checked'));
                })

                $('.item').change(function() {
                    // Jika semua .item dicentang, maka centang juga #checkAll
                    $('#all').prop('checked', $('.item:checked').length === $('.item').length);
                });

                // hurup kapital pada nama rekening
                $("#owner").on('input', function() {
                    var val = $(this).val();
                    var kapital = val.toUpperCase();
                    $(this).val(kapital);
                })

                // hurup kapital pada nama rekening
                $("#nama-rekening").on('input', function() {
                    var val = $(this).val();
                    var kapital = val.toUpperCase();
                    $(this).val(kapital);
                })


                // hurup kapital pada bank
                $("#bank").on('input', function() {
                    var val = $(this).val();
                    var kapital = val.toUpperCase();
                    $(this).val(kapital);
                })

                // hurup kapital pada nama rekening
                $(".nama-rekening").on('input', function() {
                    var val = $(this).val();
                    var kapital = val.toUpperCase();
                    $(this).val(kapital);
                })

                // hurup kapital pada bank
                $(".bank").on('input', function() {
                    var val = $(this).val();
                    var kapital = val.toUpperCase();
                    $(this).val(kapital);
                })

            </script>

            <script>
                $(document).ready(function() {
                    $('.js-example-basic-multiple').select2({
                        dropdownParent: $('#exampleModal'), // ID modal kamu
                        //  dropdownParent: $('#newcustomer'),
                        matcher: function(params, data) {
                            // Jika tidak ada pencarian, tampilkan semua
                            if ($.trim(params.term) === '') {
                                return data;
                            }

                            if (typeof data.text === 'undefined') {
                                return null;
                            }

                            // Hilangkan spasi dan strip agar pencarian jadi fleksibel
                            const term = params.term.toLowerCase().replace(/\s|-/g, '');
                            const text = data.text.toLowerCase().replace(/\s|-/g, '');

                            // Pencarian substring
                            if (text.indexOf(term) > -1) {
                                return data;
                            }

                            return null;
                        }
                        , width: '100%' //supaya tampilnya rapi
                    });
                });

            </script>

            <script>
                $(document).ready(function() {
                    $('.js-example-basic-multiple2').select2({
                        matcher: function(params, data) {
                            // Jika tidak ada pencarian, tampilkan semua
                            if ($.trim(params.term) === '') {
                                return data;
                            }

                            if (typeof data.text === 'undefined') {
                                return null;
                            }

                            // Hilangkan spasi dan strip agar pencarian jadi fleksibel
                            const term = params.term.toLowerCase().replace(/\s|-/g, '');
                            const text = data.text.toLowerCase().replace(/\s|-/g, '');

                            // Pencarian substring
                            if (text.indexOf(term) > -1) {
                                return data;
                            }

                            return null;
                        }
                        , width: '100%' //supaya tampilnya rapi
                    });
                });

            </script>

            <script>
                $('.btnupdatestatusrekening').click(function() {
                    var id = $(this).data('id');
                    var kode = $(this).data('kode');

                    var level = '{{ session('
                    level ') }}';
                    if (level == 'Administrator') {

                        $.ajax({
                            url: '/updatestatusrekening' + '/' + id
                            , type: 'PUT'
                            , data: {
                                _token: '{{ csrf_token() }}'
                                , kode: kode
                            , },

                            success: function(response) {
                                // Swal.fire('Berhasil!', response.message, 'success').then(() => {
                                //     location.reload();
                                // });

                                Swal.fire({
                                    title: "Berhasil"
                                    , text: "Status rekening berhasil diupdate"
                                    , icon: "success"
                                    , showConfirmButton: false
                                    , timer: 1000, // tampil 2 detik
                                    timerProgressBar: true
                                }).then(() => {
                                    location.reload();
                                });
                            }
                            , error: function() {
                                Swal.fire('Gagal!', 'Terjadi kesalahan saat memproses.'
                                    , 'error');
                            }
                        })

                    } else {

                        Swal.fire({
                            title: 'Masukan informasi'
                            , input: 'text'
                            , inputPlaceholder: 'Informasi'
                            , showCancelButton: true
                            , confirmButtonText: 'Kirim'
                            , cancelButtonText: 'Batal'
                            , inputValidator: (value) => {
                                if (!value) {
                                    return 'Informasi tidak boleh kosong!';
                                }
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                kiriminformasi('Update status rekening', result.value);

                                $.ajax({
                                    url: '/updatestatusrekening' + '/' + id
                                    , type: 'PUT'
                                    , data: {
                                        _token: '{{ csrf_token() }}'
                                        , kode: kode
                                    }
                                    , success: function(response) {


                                        Swal.fire({
                                            title: "Deleted!"
                                            , text: "Your file has been deleted."
                                            , icon: "success"

                                        });
                                        location.reload();

                                    }
                                    , error: function() {
                                        Swal.fire('Gagal!', 'Terjadi kesalahan saat menghapus.', 'error');
                                    }
                                });


                            }

                        })



                    }

                });

                $("#fitur").change(function() {
                    val = $(this).val();
                    if (val == 'Perbulan') {
                        $("#pertahun").hide();
                        $("#pertanggal").hide();
                        $("#perbulan").show();
                    } else if (val == 'Pertahun') {
                        $("#pertahun").show();
                        $("#perbulan").hide();
                        $("#pertanggal").hide();

                    } else if (val == 'Pertanggal') {
                        $("#pertahun").hide();
                        $("#perbulan").hide();
                        $("#pertanggal").show();
                    }
                });

                $(".edittransaksi").click(function() {
                    var id = $(this).data('id');
                    // alert(id);
                    $.ajax({
                        type: 'GET'
                        , url: '/getdatatransaksi?id=' + id
                        , success: function(response) {
                            // $('#edittransaksi').modal('show');
                            $("#formedittransaksimodal").html(response);
                            $('.btnfiturpencarian').hide();

                            $('.js-example-basic-multiplebaru').select2({
                                matcher: function(params, data) {
                                    if ($.trim(params.term) === '') {
                                        return data;
                                    }
                                    if (typeof data.text === 'undefined') {
                                        return null;
                                    }

                                    const term = params.term.toLowerCase().replace(/\s|-/g, '');
                                    const text = data.text.toLowerCase().replace(/\s|-/g, '');

                                    if (text.indexOf(term) > -1) {
                                        return data;
                                    }
                                    return null;
                                }
                                , width: '100%' // Supaya tampilannya rapi
                            });

                        }
                        , error: function(error) {
                            console.log(error);

                        }
                    })
                })

            </script>

            <script>
                $(document).ready(function() {
                    var totaltransaksi = $("#totaltransaksiall").val();
                    var val = 'Total Transaksi : ' + totaltransaksi;
                    $("#valtransaksi").html(val);

                    var totalbiaya = $("#totalbiayaall").val();
                    var val = 'Total Biaya : ' + totalbiaya;
                    $("#valbiaya").html(val);

                    var totaladminjual = $("#totaladminjualall").val();
                    var val = 'Total Admin Jual : ' + totaladminjual;
                    $("#valadminjual").html(val);

                    var totaltransfer = $("#totaltransferall").val();
                    var val = 'Total Transfer : ' + totaltransfer;
                    $("#valtransfer").html(val);

                    var totalmodal = $("#totalmodalall").val();
                    var val = 'Total Modal : ' + totalmodal;
                    $("#valmodal").html(val);

                    var totaladminbeli = $("#totaladminbeliall").val();
                    var val = 'Total Admin Beli : ' + totaladminbeli;
                    $("#valadminbeli").html(val);

                    var totalreceive = $("#totalreceiveall").val();
                    var val = 'Total Receive : ' + totalreceive;
                    $("#valreceive").html(val);

                    var totalpl = $("#totalplall").val();
                    var val = 'Total PL : ' + totalpl;
                    $("#valpl").html(val);

                });

                $(".lihat-btn").on("click", function() {
                    let container = $(this).closest(".post");
                    container.find(".short-text").toggle();
                    container.find(".full-text").toggle();
                });


                $(".editexpenses").click(function() {
                    var id = $(this).data('id');
                    $.ajax({
                        type: 'GET'
                        , url: 'geteditexpenses/' + id
                        , success: function(response) {
                            $("#formedittransaksimodal").html(response);
                            $('.btnfiturpencarian').hide();
                        }
                        , error: function(error) {

                        }
                    , })
                });

            </script>



            <script>
                $("#hitreceive").change(function() {
                    if ($(this).is(":checked")) {
                        $("#formbiasa").hide();
                        $("#formhitreceive").show();
                    } else {
                        $("#formbiasa").show();
                        $("#formhitreceive").hide();
                    }
                });

                $("#ratehit").on("keypress", function(e) {
                    // Dapatkan kode tombol
                    var charCode = (e.which) ? e.which : e.keyCode;

                    // Izinkan: backspace, delete, panah, tab, enter
                    if ($.inArray(charCode, [8, 9, 13, 37, 39, 46]) !== -1) {
                        return true;
                    }

                    // Izinkan angka 0-9
                    if (charCode >= 48 && charCode <= 57) {
                        return true;
                    }

                    // Izinkan titik (.)
                    if (charCode === 46) {
                        return true;
                    }
                    // Selain itu blok
                    return false;
                });

                $("#adminhit").on('input', function() {
                    var val = $(this).val();
                    let angka = val.replace(/[^0-9]/g, '');
                    if (angka === '') {
                        $(this).val('');
                        return;
                    }
                    $(this).val(formatRupiah(angka));
                })

                $("#transaksihit").on('input', function() {
                    var val = $(this).val();
                    let angka = val.replace(/[^0-9]/g, '');
                    if (angka === '') {
                        $(this).val('');
                        return;
                    }
                    $(this).val(formatRupiah(angka));
                    $("#hasilreceive").val(hitunghitreceive());
                });

                $("#adminhit").on('input', function() {
                    $("#hasilreceive").val(hitunghitreceive());
                });

                $("#ratehit").on('input', function() {
                    $("#hasilreceive").val(hitunghitreceive());
                });

            </script>


            {{-- update hitreceive --}}
            <script>
                $("#hitreceiveupdate").change(function() {
                    if ($(this).is(":checked")) {
                        $("#formhitreceiveupdate").show();
                        $("#formbiasaupdate").hide();
                    } else {
                        $("#formhitreceiveupdate").hide();
                        $("#formbiasaupdate").show();
                    }
                });

                $("#ratehitupdate").on("keypress", function(e) {
                    // Dapatkan kode tombol
                    var charCode = (e.which) ? e.which : e.keyCode;

                    // Izinkan: backspace, delete, panah, tab, enter
                    if ($.inArray(charCode, [8, 9, 13, 37, 39, 46]) !== -1) {
                        return true;
                    }

                    // Izinkan angka 0-9
                    if (charCode >= 48 && charCode <= 57) {
                        return true;
                    }

                    // Izinkan titik (.)
                    if (charCode === 46) {
                        return true;
                    }

                    // Selain itu blok
                    return false;
                });

                $("#adminhitupdate").on('input', function() {
                    var val = $(this).val();
                    let angka = val.replace(/[^0-9]/g, '');
                    if (angka === '') {
                        $(this).val('');
                        return;
                    }
                    $(this).val(formatRupiah(angka));
                    $("#hasilreceiveupdate").val(hitunghitreceiveupdate());
                })

                $("#transaksihitupdate").on('input', function() {
                    var val = $(this).val();
                    let angka = val.replace(/[^0-9]/g, '');
                    if (angka === '') {
                        $(this).val('');
                        return;
                    }
                    $(this).val(formatRupiah(angka));
                    $("#hasilreceiveupdate").val(hitunghitreceiveupdate());

                });

                $("#ratehitupdate").on('input', function() {
                    $("#hasilreceiveupdate").val(hitunghitreceiveupdate());
                })

            </script>

            <script>
                function hitunghitreceive() {
                    var valtransaksi = $("#transaksihit").val();
                    var valrate = $("#ratehit").val();
                    var valadmin = $("#adminhit").val();

                    let transaksi = valtransaksi.replace(/[^0-9]/g, '');
                    let admin = valadmin.replace(/[^0-9]/g, '');

                    var hitung = transaksi * (valrate / 100);
                    var kurang = transaksi - hitung;
                    var hasil = kurang - admin;
                    var hasil2 = Math.floor(hasil);
                    return formatRupiah(hasil2);
                }

            </script>

            <script>
                function hitunghitreceiveupdate() {
                    var valtransaksi = $("#transaksihitupdate").val();
                    var valrate = $("#ratehitupdate").val();
                    var valadmin = $("#adminhitupdate").val();

                    let transaksi = valtransaksi.replace(/[^0-9]/g, '');
                    let admin = valadmin.replace(/[^0-9]/g, '');

                    var hitung = transaksi * (valrate / 100);
                    var kurang = transaksi - hitung;
                    var hasil = kurang - admin;
                    var hasil2 = Math.floor(hasil);
                    return formatRupiah(hasil2);
                }

            </script>

            <script>
                $(".detail").click(function() {
                    var mr = $(this).data('marketplace');
                    var sw = '.show-' + mr;
                    $(sw).toggle();
                })

            </script>

            <script>
                $(document).ready(function() {
                    var val = $("#totalreceive").val();
                    $("#valtotalreceive").text(val);
                })

            </script>

            <script>
                $(".detailstore").click(function() {
                    var mr = $(this).data('store');
                    var sw = '.showstore-' + mr;
                    $(sw).toggle();
                })

            </script>

            <script>
                $(".detailpl").click(function() {
                    var mr = $(this).data('lokasi');
                    var sw = '.showpl-' + mr;
                    $(sw).toggle();
                })

            </script>

            <script>
                var a = 200000 * 0.022;
                console.log(a);

            </script>

@extends('template.layout')
@section('content')
<section class="content">

    @if (session('level') !== 'Administrator')
    <div>
        <div class="box box-danger">
            <div class="box-header">
                <marquee behavior="" direction="">
                    <h5>HELLO {{ strtoupper(session('username')) }}, SELAMAT DATANG DI SISTEM KAMI, MOHON MAAF FITUR INI DIBATASI UNTUK ANDA</h5>
                </marquee>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <div class="box box-primary">
                    <div class="box-header">

                    </div>
                    <div class="box-body" style="">
                        <center>
                            <img src="{{ asset('assets') }}/dist/img/user.jpg" class="user-image img-responsive" alt="User Image" style="height: 240px">

                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xs-6">
                <div class="box box-primary">
                    <div class="box-header">
                        Profil User
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" readonly value="{{ session('username') }}">
                        </div>

                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <input type="text" class="form-control" readonly value="{{ session('level') }}">
                        </div>

                        <div class="form-group">
                            <label for="">Lokasi</label>
                            <input type="text" class="form-control" readonly value="{{ session('wilayah') }}">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    @endif


    @if (session('level') == 'Administrator')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>343</h3>
                    <p>Data User</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>ere</h3>
                    <p>Data Customer</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>


        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>343</h3>
                    <p>Data Store</p>
                </div>
                <div class="icon">
                    <i class="fa fa-store"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>343</h3>
                    <p>Produk</p>
                </div>
                <div class="icon">
                    <i class="fa fa-receipt"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>
    </div>

    @endif




    <div class="row" style="display: {{ session('level') != 'Administrator' ? 'none' : '' }}">
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
            <!-- Calendar -->
            <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                    <i class="fa fa-calendar"></i>

                    <h3 class="box-title">Calendar</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">

                        <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->



        </section>
    </div>


    <!-- right col -->
    </div>
    <!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper --

@endsection

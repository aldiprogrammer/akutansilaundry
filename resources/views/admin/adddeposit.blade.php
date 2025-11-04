@extends('template.layout')
@section('content')
<style>
    td {
        font-weight: normal;
    }

</style>
<!-- Main content -->
<section class="content">


    <div class="row">
        <div class="col-md-12">

            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title"> <i class="fa fa-map-location-dot"></i> {{ $data['title'] }}</h3>

                    <hr>

                </div>
                <div class="box-body">
                    <div class="box-body">
                        <form action="{{route('deposit.create')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Tanggal</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="tanggal" value="{{date('Y-m-d')}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Whatsapp</label>
                                <div class="col-sm-8">
                                    <select name="wa" class="wa form-control">
                                        <option value="">-- Pilih Whatsapp -- </option>
                                        @foreach ($cs as $item)
                                        <option value="{{$item->id}}">{{$item->wa }} | {{$item->customer}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Customer</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control customer" readonly name="customer" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Saldo awal</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control saldo" readonly name="saldoawal" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Tambah saldo</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control addsaldo rupiah" name="addsaldo" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Saldo akhir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control saldoakhir" readonly name="saldoakhir" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Payment</label>
                                <div class="col-sm-8">
                                    <select name="payment" id="" class="form-control" required>
                                        <option value="">-- Pilih Payment --</option>
                                        <option>Cash</option>
                                        <option>Qris</option>
                                        <option>Transfer</option>
                                        <option>Saldo</option>
                                    </select>
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="form-label col-sm-2"></label>
                                <div class="col-sm-8">
                                    <button class="btn btn-primary">Save</button>
                                    <a href="/deposit" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>



                        </form>

                    </div>
                </div>
            </div>
            <!-- /.box -->



        </div>
    </div>


</section>
<!-- /.content -->
</div>

@endsection

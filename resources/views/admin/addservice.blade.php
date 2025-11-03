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
                        <form action="{{route('service.create')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Nama produk</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama_produk" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Harga</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rupiah" name="harga" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Satuan</label>
                                <div class="col-sm-8">
                                    <select name="satuan" class="form-control" id="" required>
                                        <option value="">-- Pilih Satuan --</option>
                                        <option value="Kg">Kg</option>
                                        <option value="Piece">Piece</option>
                                        <option value="Coint">Coin</option>
                                        <option value="M2">M2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Number of stef</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="numberofstef" name="numberofstef" required>
                                </div>
                            </div>

                            <div id="stef-fields">
                                <div class="form-group row">
                                    <label for="exampleFormControlInput1" class="col-sm-2">Service stef</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="servicestaf" required>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlInput1" class="col-sm-2">Komisi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rupiah" name="komisi" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlInput1" class="col-sm-2">Durasi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="level" required>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="form-label col-sm-2"></label>
                                <div class="col-sm-8">
                                    <button class="btn btn-primary">Save</button>
                                    <a href="/lokasi" class="btn btn-danger">Kembali</a>
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

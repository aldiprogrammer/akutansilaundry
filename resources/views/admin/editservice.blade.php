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
                        <form action="{{route('service.update', $sr->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Nama produk</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama_produk" value="{{$sr->nama_produk}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Harga</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rupiah" name="harga" value={{number_format($sr->harga, 0, ',', '.')}} required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Satuan</label>
                                <div class="col-sm-8">
                                    <select name="satuan" class="form-control" id="" required>
                                        <option>{{$sr->satuan}}</option>
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
                                    <input type="hidden" id="numberold" value="{{$sr->of_stef}}">
                                    <input type="number" class="form-control" id="numberofstef" value="{{$sr->of_stef}}" name="numberofstef" required>
                                </div>
                            </div>

                            @php
                            $no = 0;
                            $of = DB::table('ofstefs')->where('id_service', $sr->id)->get();
                            @endphp

                            @foreach ($of as $item)
                            @php
                            $no++;
                            @endphp
                            <div class="form-group row">
                                <label class="col-sm-2">Service Stef {{$no}} </label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="servicestaf[]" value="{{$item->service_stef}}" placeholder="Service Stef" required>
                                </div>

                                <label class="col-sm-2">Komisi {{$no}}</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="komisi[]" value="{{$item->komisi}}" placeholder="Komisi" required>
                                </div>

                                <label class="col-sm-1">Durasi {{$no}}</label>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" name="durasi[]" value="{{$item->durasi}}" placeholder="durasi" required>
                                </div>

                            </div>
                            @endforeach



                            <div id="stef-fields">

                            </div>


                            <div class="form-group row">
                                <label class="form-label col-sm-2"></label>
                                <div class="col-sm-8">
                                    <button class="btn btn-primary">Edit</button>
                                    <a href="/service" class="btn btn-danger">Kembali</a>
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

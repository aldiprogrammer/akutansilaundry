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
                        <form action="{{route('expenses.create')}}" method="post">
                            @csrf

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Tanggal</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="tanggal" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Type Of Cost</label>
                                <div class="col-sm-8">
                                    <select name="typecost" class="form-control typecost" required>
                                        <option value=""> -- Pilih type of cost --</option>
                                        @foreach ($cost as $item)
                                        <option value="{{$item->id}}">{{$item->type_of_cost}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Detail of cost</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="detail" id="detailcost" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Cost</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="cost" id="transaksi" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Lokasi</label>
                                <div class="col-sm-8">
                                    <select name="lokasi" class="form-control" id="" required>
                                        <option value=""> -- Pilih lokasi --</option>
                                        @foreach ($lokasi as $item)
                                        <option value="{{$item->id}}">{{$item->lokasi}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="form-label col-sm-2"></label>
                                <div class="col-sm-8">
                                    <button class="btn btn-primary">Save</button>
                                    <a href="/expenses" class="btn btn-danger">Kembali</a>
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

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
                        <form action="{{route('customer.update', $cs->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Custoemr</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="customer" value="{{$cs->customer}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Gender</label>
                                <div class="col-sm-8">
                                    <select name="jk" id="" class="form-control" required>
                                        <option value="{{$cs->jk}}">{{$cs->jk}}</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Whatsapp</label>
                                <div class="col-sm-8">
                                    <input type="telp" id="whatsapp" value="{{$cs->wa}}" class="form-control" name="wa" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Level</label>
                                <div class="col-sm-8">
                                    <select name="level" id="" class="form-control" required>
                                        <option value="{{$cs->id_level}}">{{$cs->level->level}}</option>
                                        @foreach ($level as $lv)
                                        <option value="{{$lv->id}}">{{$lv->level}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Saldo</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="saldo" id="transaksi" value="{{number_format($cs->saldo, 0, ',', '.')}}" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="form-label col-sm-2"></label>
                                <div class="col-sm-8">
                                    <button class="btn btn-primary">Update</button>
                                    <a href="/customer" class="btn btn-danger">Kembali</a>
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

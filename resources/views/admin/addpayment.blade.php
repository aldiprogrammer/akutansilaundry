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
                        <form action="{{route('payment.create')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Nama Payment</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama_payment" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Bank</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="bank" name="bank" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">No Rekening</label>
                                <div class="col-sm-8">
                                    <input type="text" id="no-rekening" class="form-control" name="no_rekening" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="bank" name="nama" required>
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

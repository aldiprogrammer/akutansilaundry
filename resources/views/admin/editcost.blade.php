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
                        <form action="{{route('cost.update', $cost->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Type of cost</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$cost->type_of_cost}}" name="type" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Detail of cost</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$cost->detail_of_cost}}" name="detail" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="form-label col-sm-2"></label>
                                <div class="col-sm-8">
                                    <button class="btn btn-primary">Update</button>
                                    <a href="/cost" class="btn btn-danger">Kembali</a>
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

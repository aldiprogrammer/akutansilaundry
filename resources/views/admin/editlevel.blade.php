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
                        <form action="{{route('level.update', $level->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Level</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="level" value="{{$level->level}}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Keterangan</label>
                                <div class="col-sm-8">
                                    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control" required>{{$level->keterangan}}</textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="form-label col-sm-2"></label>
                                <div class="col-sm-8">
                                    <button class="btn btn-primary">Update</button>
                                    <a href="/level" class="btn btn-danger">Kembali</a>
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

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
                        <form action="{{route('pengumuman.update', $pg->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Tgl Mulai</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="tgl_mulai" value="{{$pg->tgl_mulai}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Tgl Selesai</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" value="{{$pg->tgl_selesai}}" name="tgl_selesai" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Text</label>
                                <div class="col-sm-8">
                                    <textarea name="text" id="" cols="30" rows="10" class="form-control" required>{{$pg->text}}</textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="exampleFormControlInput1" class="col-sm-2">Lokasi</label>
                                <div class="col-sm-8">
                                    <select name="lokasi" id="" required class="form-control">
                                        <option value="{{$pg->id_lokasi}}">{{$pg->lokasi->lokasi}}</option>
                                        @foreach ($lokasi as $item)
                                        <option value="{{$item->id}}">{{$item->lokasi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="form-label col-sm-2"></label>
                                <div class="col-sm-8">
                                    <button class="btn btn-primary">Update</button>
                                    <a href="/servicetype" class="btn btn-danger">Kembali</a>
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

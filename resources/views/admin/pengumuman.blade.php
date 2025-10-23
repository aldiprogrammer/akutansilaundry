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
                    <h3 class="box-title"> <i class="fas fa-list"></i> Data {{ $data['title'] }}</h3>
                </div>
                <div class="box-body">
                    <a href="/tambahpengumuman" class="btn bg-black"> <i class="fas fa-plus"></i> Tambah {{ $data['title'] }} </a>
                    <hr>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-striped mt-5">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tgl Mulai</th>
                                        <th scope="col">Tgl Selesai</th>
                                        <th scope="col">Text</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Opsi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($data['pengumuman'] as $pg)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$pg->tgl_mulai}}</td>
                                        <td>{{$pg->tgl_selesai}}</td>
                                        <td>{{$pg->text}}</td>
                                        <td>{{$pg->lokasi->lokasi}}</td>
                                        <td>
                                            <button id="hapus" class="btn btn-danger btn-sm btnhapus" data-id="{{ $pg->id }}" data-url='hapuspengumuman' data-aksi="Hapus data level"><i class="fas fa-trash"></i></button>
                                            <a href="editpengumuman/{{ $pg->id }}" class="btn bg-black btn-sm"> <i class="fas fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>

                        </div>
                    </div>
                    </tbody>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->



        </div>
    </div>


</section>
<!-- /.content -->
</div>

@endsection

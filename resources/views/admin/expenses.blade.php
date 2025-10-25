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
                    <h3 class="box-title"> <i class="fa' fa-map-location-dot"></i> Data {{ $data['title'] }}</h3>
                </div>
                <div class="box-body">
                    <a href="/tambahexpenses" class="btn bg-black"> <i class="fas fa-plus"></i> Tambah {{ $data['title'] }} </a>
                    <hr>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-striped mt-5">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Type of cost</th>
                                        <th scope="col">Detail of cost</th>
                                        <th scope="col">Cost</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Opsi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp

                                    @foreach($data['ex'] as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$item->costto->type_of_cost}}</td>
                                        <td>{{ $item->costto->detail_of_cost }}</td>

                                        <td>{{ number_format($item->cost, 0, ',', '.') }}</td>
                                        <td>{{$item->lokasi }}</td>
                                        <td>{{$item->tanggal}}</td>
                                        <td>
                                            <button id="hapus" class="btn btn-danger btn-sm btnhapus" data-id="{{ $item->id }}" data-url='hapusexpenses' data-aksi="Hapus data lokasi"><i class="fas fa-trash"></i></button>
                                            <a href="editexpenses/{{ $item->id }}" class="btn bg-black btn-sm"> <i class="fas fa-pen"></i></a>
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

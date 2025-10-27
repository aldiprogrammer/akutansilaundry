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
                    <a href="/tambahservice" class="btn bg-black"> <i class="fas fa-plus"></i> Tambah {{ $data['title'] }} </a>
                    <hr>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-striped mt-5">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama produk</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Satuan</th>
                                        <th scope="col">Number of stef</th>
                                        <th scope="col">Service stef</th>
                                        <th scope="col">Komisi</th>
                                        <th scope="col">Durasi</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($data['service'] as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$item->nama_produk}}</td>
                                        <td>{{ $item->harga }}</td>
                                        <td>{{ $item->satuan }}</td>
                                        <td>{{ $item->of_stef }}</td>
                                        <td>{{ $item->harga }}</td>


                                        <td>
                                            <button id="hapus" class="btn btn-danger btn-sm btnhapus" data-id="{{ $item->id }}" data-url='hapuscost' data-aksi="Hapus data cost"><i class="fas fa-trash"></i></button>
                                            <a href="editcost/{{ $item->id }}" class="btn bg-black btn-sm"> <i class="fas fa-pen"></i></a>
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

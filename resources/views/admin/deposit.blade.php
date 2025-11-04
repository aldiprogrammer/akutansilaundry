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
                    <a href="/tambahdeposit" class="btn bg-black"> <i class="fas fa-plus"></i> Tambah {{ $data['title'] }} </a>
                    <hr>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-striped mt-5">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Whatsapp</th>
                                        <th scope="col">Saldo awal</th>
                                        <th scope="col">Tambah saldo</th>
                                        <th scope="col">Saldo akhir</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Opsi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($data['depo'] as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$item->customer}}</td>
                                        <td>{{ $item->wa }}</td>
                                        <td>{{number_format($item->saldo_awal, 0, ',', '.')}}</td>
                                        <td>{{number_format($item->tambah_saldo, 0, ',', '.')}}</td>
                                        <td>{{number_format($item->saldo_akhir, 0, ',', '.')}}</td>
                                        <td>{{$item->payment}}</td>
                                        <td>
                                            <button id="hapus" class="btn btn-danger btn-sm btnhapus" data-id="{{ $item->id }}" data-url='hapusdeposit' data-aksi="Hapus data deposit"><i class="fas fa-trash"></i></button>
                                            <a href="editdeposit/{{ $item->id }}" class="btn bg-black btn-sm"> <i class="fas fa-pen"></i></a>
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

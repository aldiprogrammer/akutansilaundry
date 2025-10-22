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
                    <a href="/tambahpayment" class="btn bg-black"> <i class="fas fa-plus"></i> Tambah {{ $data['title'] }} </a>
                    <hr>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-striped mt-5">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Payment</th>
                                        <th scope="col">Bank</th>
                                        <th scope="col">No Rekening</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Opsi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($data['payment'] as $py)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$py->nama_payment}}</td>
                                        <td>{{ $py->bank }}</td>
                                        <td>{{ $py->no_rekening }}</td>
                                        <td>{{ $py->nama }}</td>
                                        <td>
                                            <button id="hapus" class="btn btn-danger btn-sm btnhapus" data-id="{{ $py->id }}" data-url='hapuspayment' data-aksi="Hapus data level"><i class="fas fa-trash"></i></button>
                                            <a href="editpayment/{{ $py->id }}" class="btn bg-black btn-sm"> <i class="fas fa-pen"></i></a>
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

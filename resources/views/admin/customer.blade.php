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
                    <a href="/tambahcustomer" class="btn bg-black"> <i class="fas fa-plus"></i> Tambah {{ $data['title'] }} </a>
                    <hr>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-striped mt-5">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Whatsapp</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Saldo</th>
                                        <th scope="col">Opsi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($data['customer'] as $cs)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$cs->customer}}</td>
                                        <td>{{ $cs->jk }}</td>
                                        <td>{{$cs->wa}}</td>
                                        <td>{{$cs->level->level}}</td>
                                        <td>{{number_format($cs->saldo, 0, ',', '.')}}</td>

                                        <td>
                                            <button id="hapus" class="btn btn-danger btn-sm btnhapus" data-id="{{ $cs->id }}" data-url='hapuscustomer' data-aksi="Hapus data level"><i class="fas fa-trash"></i></button>
                                            <a href="editcustomer/{{ $cs->id }}" class="btn bg-black btn-sm"> <i class="fas fa-pen"></i></a>
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

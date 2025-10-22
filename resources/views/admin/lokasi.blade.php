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
                    <a href="/tambahlokasi" class="btn bg-black"> <i class="fas fa-plus"></i> Tambah {{ $data['title'] }} </a>
                    <hr>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-striped mt-5">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Store</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Nama Investor</th>
                                        <th scope="col">Investasi</th>
                                        <th scope="col">Persentase</th>
                                        <th scope="col">Opsi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($data['lokasi'] as $lokasi => $investors)
                                    @php
                                    $total_investasi = $investors->sum('investasi');
                                    @endphp

                                    @foreach($investors as $investor)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$investor->nama_store}}</td>
                                        <td>{{ $lokasi }}</td>
                                        <td>{{ $investor->nama_investor }}</td>
                                        <td>{{ number_format($investor->investasi, 0, ',', '.') }}</td>
                                        <td>{{$investor->persentase}}%</td>
                                        <td>
                                            <button id="hapus" class="btn btn-danger btn-sm btnhapus" data-id="{{ $investor->id }}" data-url='hapuslokasi' data-aksi="Hapus data lokasi"><i class="fas fa-trash"></i></button>
                                            <a href="editlokasi/{{ $investor->id }}" class="btn bg-black btn-sm"> <i class="fas fa-pen"></i></a>
                                        </td>
                                    </tr>


                                    @endforeach
                                    {{-- Baris total per lokasi --}}
                                    <tr style="font-weight: bold; background-color: gray; color: black">
                                        <td></td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>Total</td>
                                        <td>{{ number_format($total_investasi, 0, ',', '.') }}</td>
                                        <td>100.00%</td>
                                        <td>-</td>
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

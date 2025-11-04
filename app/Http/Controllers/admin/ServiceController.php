<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ofstef;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Data service',
            'service' => Service::all(),
        ];
        return view('admin.service', compact('data'));
    }

    function tambahservice()
    {
        $data = ['title' => 'Tambah service'];
        return view('admin.addservice', compact('data'));
    }

    function create(Request $request)
    {
        $sr = new Service();
        $sr->nama_produk = $request->nama_produk;
        $sr->harga = str_replace(['.', ','], '',  $request->harga);
        $sr->satuan = $request->satuan;
        $sr->of_stef = $request->numberofstef;
        $sr->save();

        $count = count($request->durasi);
        $durasi = $request->durasi;

        for ($i = 0; $i < $count; $i++) {
            $of = new Ofstef();
            $of->id_service = $sr->id;
            $of->service_stef = $request->servicestaf[$i];
            $of->komisi = $request->komisi[$i];
            $of->durasi = $request->durasi[$i];
            $of->save();

            // echo 'durasi';
        }
        return redirect()->route('service')->with('success', 'Data berhasil ditambah');
    }

    function edit($id)
    {
        $data = ['title' => 'Edit Service'];
        $sr = Service::find($id);
        return view('admin/editservice', compact('data', 'sr'));
    }

    function update(Request $request, $id)
    {
        $sr = Service::find($id);
        $sr->nama_produk = $request->nama_produk;
        $sr->harga = str_replace(['.', ','], '',  $request->harga);
        $sr->satuan = $request->satuan;
        $sr->of_stef = $request->numberofstef;
        $sr->update();

        $ofd = Ofstef::where('id_service', $id)->delete();
        $count = count($request->durasi);
        for ($i = 0; $i < $count; $i++) {
            $of = new Ofstef();
            $of->id_service = $sr->id;
            $of->service_stef = $request->servicestaf[$i];
            $of->komisi = $request->komisi[$i];
            $of->durasi = $request->durasi[$i];
            $of->save();

            // echo 'durasi';
        }


        return redirect()->route('service')->with('success', 'Data berhasil diubah');
    }

    function delete($id)
    {
        $sr = Service::find($id);
        $sr->delete();
        $of = Ofstef::where('id_service', $id)->delete();
    }
}

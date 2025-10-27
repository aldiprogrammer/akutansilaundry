<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
        $sr->harga = $request->harga;
        $sr->satuan = $request->satuan;
        $sr->of_stef = $request->of_stef;
        $sr->service_stef = $request->service_stef;
        $sr->komisi = $request->komisi;
        $sr->durasi = $request->durasi;
        $sr->save();
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
        $sr->harga = $request->harga;
        $sr->satuan = $request->satuan;
        $sr->of_stef = $request->of_stef;
        $sr->service_stef = $request->service_stef;
        $sr->komisi = $request->komisi;
        $sr->durasi = $request->durasi;
        $sr->update();
        return redirect()->route('service')->with('success', 'Data berhasil diubah');
    }

    function delete($id)
    {
        $sr = Service::find($id);
        $sr->delete();
    }
}

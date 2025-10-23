<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lokasi;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    function index()
    {
        $data = [
            'title' => "Pengumuman",
            'pengumuman' => Pengumuman::with('lokasi')->get(),
        ];
        return view('admin.pengumuman', compact('data'));
    }

    function tambahpengumuman()
    {
        $data = ['title' => 'Tambah pengumuman'];
        $lokasi = Lokasi::all();
        return view('admin.addpengumuman', compact('data', 'lokasi'));
    }

    function create(Request $request)
    {
        $pg = new Pengumuman();
        $pg->tgl_mulai = $request->tgl_mulai;
        $pg->tgl_selesai = $request->tgl_selesai;
        $pg->text = $request->text;
        $pg->id_lokasi = $request->lokasi;
        $pg->save();
        return redirect()->route('pengumuman')->with('success', 'Data berhasil ditambah');
    }

    function edit($id)
    {
        $data = ['title' => 'Edit Pengumuman'];
        $pg = Pengumuman::with('lokasi')->where('id', $id)->first();
        $lokasi = Lokasi::all();
        return view('admin.editpengumuman', compact('data', 'pg', 'lokasi'));
    }

    function update(Request $request, $id)
    {
        $pg =  Pengumuman::find($id);
        $pg->tgl_mulai = $request->tgl_mulai;
        $pg->tgl_selesai = $request->tgl_selesai;
        $pg->text = $request->text;
        $pg->id_lokasi = $request->lokasi;
        $pg->update();
        return redirect()->route('pengumuman')->with('success', 'Data berhasil diubah');
    }

    function delete($id)
    {
        $pg =  Pengumuman::find($id);
        $pg->delete();
    }
}

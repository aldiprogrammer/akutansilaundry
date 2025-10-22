<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Lokasi',
            'lokasi' => Lokasi::all()->groupBy('lokasi'),
        ];
        return view('admin.lokasi', compact('data'));
    }

    function tambahlokasi()
    {
        $data = ['title' => 'Tambah lokasi'];
        return view('admin.addlokasi', compact('data'));
    }

    function create(Request $request)
    {
        $wl = new Lokasi();

        $total = Lokasi::where('lokasi', $request->lokasi)->sum('investasi');
        if ($total == false) {
            $persentase = 100;
        } else {
            $persentase = 0;
        }

        $wl->nama_store = $request->nama_store;
        $wl->lokasi = $request->lokasi;
        $wl->nama_investor = $request->nama_investor;
        $wl->investasi = str_replace(['.', ','], '',  $request->investasi);
        $wl->persentase = number_format($persentase, 2);
        $wl->save();

        $cek = Lokasi::where('lokasi', $request->lokasi)->count();
        if ($cek > 1) {
            $wilayah = Lokasi::where('lokasi', $request->lokasi)->get();
            $total = Lokasi::where('lokasi', $request->lokasi)->sum('investasi');
            foreach ($wilayah as $data) {
                $investasi = $data->investasi;
                $persentase = ($investasi / $total) * 100;
                $update = Lokasi::find($data->id);
                $update->persentase = number_format($persentase, 2);
                $update->update();
            }
        }
        return redirect()->route('lokasi')->with('success', 'Data lokasi berhasil ditambah');
    }

    function delete($id)
    {

        $wl = Lokasi::find($id);
        $delete =  $wl->delete();
        if ($delete == true) {
            $wilayah = Lokasi::where('lokasi', $wl->lokasi)->get();
            $total = Lokasi::where('lokasi', $wl->lokasi)->sum('investasi');
            foreach ($wilayah as $data) {
                $investasi = $data->investasi;
                $persentase = ($investasi / $total) * 100;
                $update = Lokasi::find($data->id);
                $update->persentase = number_format($persentase, 2);
                $update->update();
            }
        }
    }

    function edit($id)
    {
        $data = [
            'title' => 'Edit lokasi',
            'lokasi' => Lokasi::find($id),
        ];
        return view('admin.editlokasi', compact('data'));
    }

    function update(Request $request, $id)
    {

        $wl = Lokasi::find($id);

        $wl->lokasi = $request->lokasi;
        $wl->nama_store = $request->nama_store;
        $wl->nama_investor = $request->nama_investor;
        $wl->investasi = str_replace(['.', ','], '',  $request->investasi);
        // $wl->persentase = number_format($persentase, 2);
        $up =  $wl->update();
        if ($up == true) {

            $wilayah = Lokasi::where('lokasi', $wl->lokasi)->get();
            $total = Lokasi::where('lokasi', $wl->lokasi)->sum('investasi');
            foreach ($wilayah as $data) {
                $investasi = $data->investasi;
                $persentase = ($investasi / $total) * 100;
                $update = lokasi::find($data->id);
                $update->persentase = number_format($persentase, 2);
                $update->update();
            }
        }

        return redirect()->route('lokasi')->with('success', 'Data  berhasil diubah');
    }
}

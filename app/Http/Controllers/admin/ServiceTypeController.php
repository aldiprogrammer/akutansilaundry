<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Service Type',
            'service' => ServiceType::all(),
        ];
        return view('admin/servicetype', compact('data'));
    }

    function tambahservicetype()
    {
        $data = [
            'title' => 'Tambah Service Type',
        ];
        return view('admin/addservicetype', compact('data'));
    }

    function create(Request $request)
    {

        $sv = new ServiceType();
        $sv->service = $request->service;
        $sv->keterangan = $request->keterangan;
        $sv->commision = str_replace(['.', ','], '',  $request->com);
        $sv->save();
        return redirect()->route('servicetype')->with('success', 'Data berhasil ditambah');
    }

    function edit($id)
    {

        $data = ['title' => 'Edit Service Type'];
        $sv = ServiceType::find($id);
        return view('admin/editservicetype', compact('data', 'sv'));
    }

    function update(Request $request, $id)
    {
        $sv = ServiceType::find($id);
        $sv->service = $request->service;
        $sv->keterangan = $request->keterangan;
        $sv->commision = str_replace(['.', ','], '',  $request->com);
        $sv->save();
        return redirect()->route('servicetype')->with('success', 'Data berhasil diubah');
    }

    function delete($id)
    {
        $sv = ServiceType::find($id);
        $sv->delete();
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Level',
            'level' => Level::all(),
        ];
        return view('admin.level', compact('data'));
    }

    function tambahlevel()
    {
        $data  = ['title' => 'Tambah Level'];
        return view('admin.addlevel', compact('data'));
    }

    function create(Request $request)
    {
        $lv = new Level();
        $lv->level = $request->level;
        $lv->keterangan = $request->keterangan;
        $lv->save();
        return redirect()->route('level')->with('success', 'Data berhasil ditambah');
    }

    function edit($id)
    {
        $data = ['title' => 'Edit level'];
        $level = Level::find($id);
        return view('admin.editlevel', compact('data', 'level'));
    }

    function update(Request $request, $id)
    {
        $lv = Level::find($id);
        $lv->level = $request->level;
        $lv->keterangan = $request->keterangan;
        $lv->update();
        return redirect()->route('level')->with('success', 'Data berhasil diubah');
    }

    function hapus($id)
    {
        $lv = Level::find($id);
        $lv->delete();
        // return redirect()->route('level')->with('success', 'Data berhasil dihapus');
    }
}

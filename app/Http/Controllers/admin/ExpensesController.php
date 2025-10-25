<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cost;
use App\Models\Expenses;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    function index()
    {

        $data = [
            'title' => 'Expenses',
            'ex' => Expenses::with('lokasito', 'costto')->get(),
        ];
        return view('admin/expenses', compact('data'));
    }

    function tambahexpenses()
    {
        $data = [
            'title' => 'Tambah Expenses',
        ];
        $lokasi = Lokasi::all();
        $cost = Cost::all();
        return view('admin/addexpenses', compact('data', 'cost', 'lokasi'));
    }

    function detailcost($id)
    {
        $cost = Cost::find($id);
        return response()->json(
            ['detail' => $cost->detail_of_cost]
        );
    }

    function create(Request $request)
    {
        $ex = new Expenses();
        $lokasi = Lokasi::find($request->lokasi);
        $ex->id_cost = $request->typecost;
        $ex->cost = str_replace(['.', ','], '',  $request->cost);
        $ex->id_lokasi = $request->lokasi;
        $ex->lokasi = $lokasi->lokasi;
        $ex->tanggal = $request->tanggal;
        $ex->save();
        return redirect()->route('expenses')->with('success', 'Data berhasil ditambah');
    }

    function edit($id)
    {
        $data = [
            'title' => 'Edit exspenses',
        ];
        $lokasi = Lokasi::all();
        $cost = Cost::all();
        $edit = Expenses::with('lokasito', 'costto')->where('id', $id)->first();

        return view('admin/editexpenses', compact('data', 'lokasi', 'cost', 'edit'));
    }

    function update(Request $request, $id)
    {
        $ex = Expenses::find($id);
        $lokasi = Lokasi::find($request->lokasi);
        $ex->id_cost = $request->typecost;
        $ex->cost = str_replace(['.', ','], '',  $request->cost);
        $ex->id_lokasi = $request->lokasi;
        $ex->lokasi = $lokasi->lokasi;
        $ex->tanggal = $request->tanggal;
        $ex->save();
        return redirect()->route('expenses')->with('success', 'Data berhasil diubah');
    }

    function delete($id)
    {
        $ex = Expenses::find($id);
        $ex->delete();
    }
}

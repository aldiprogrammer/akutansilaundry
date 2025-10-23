<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Cost',
            'cost' => Cost::all(),
        ];
        return view('admin/cost', compact('data'));
    }

    function tambahcost()
    {
        $data = [
            'title' => 'Tambah Cost',

        ];
        return view('admin/addcost', compact('data'));
    }

    function create(Request $request)
    {
        $cost = new Cost();
        $cost->type_of_cost = $request->type;
        $cost->detail_of_cost = $request->detail;
        $cost->save();
        return redirect()->route('cost')->with('success', 'Data berhasil ditambah');
    }

    function edit($id)
    {
        $data = ['title' => 'Edit Cost'];
        $cost = Cost::find($id);
        return view('admin.editcost', compact('data', 'cost'));
    }

    function update(Request $request, $id)
    {
        $cost = Cost::find($id);
        $cost->type_of_cost = $request->type;
        $cost->detail_of_cost = $request->detail;
        $cost->save();
        return redirect()->route('cost')->with('success', 'Data berhasil diubah');
    }

    function delete($id)
    {
        $cost = Cost::find($id);
        $cost->delete();
        // return redirect()->route('level')->with('success', 'Data berhasil dihapus');
    }
}

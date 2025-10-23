<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Level;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index()
    {

        $data = [
            'title' => 'Customer',
            'customer' => Customer::with('level')->get(),
        ];

        return view('admin/customer', compact('data'));
    }

    function tambahcustomer()
    {
        $data = ['title' => 'Tambah customer'];
        $level = Level::all();
        return view('admin/addcustomer', compact('data', 'level'));
    }

    function create(Request $request)
    {
        $cs = new Customer();
        $cs->customer = $request->customer;
        $cs->wa = $request->wa;
        $cs->jk = $request->jk;
        $cs->id_level = $request->level;
        $cs->saldo =  str_replace(['.', ','], '',  $request->saldo);
        $cs->save();
        return redirect()->route('customer')->with('success', 'Data berhasil ditambah');
    }

    function edit($id)
    {
        $data = ['title' => 'Edit customer'];
        $cs = Customer::find($id);
        $level = Level::all();
        return view('admin/editcustomer', compact('data', 'cs', 'level'));
    }

    function update(Request $request, $id)
    {
        $cs = Customer::find($id);
        $cs->customer = $request->customer;
        $cs->wa = $request->wa;
        $cs->jk = $request->jk;
        $cs->id_level = $request->level;
        $cs->saldo =  str_replace(['.', ','], '',  $request->saldo);
        $cs->save();
        return redirect()->route('customer')->with('success', 'Data berhasil ditambah');
    }

    function delete($id)
    {
        $cs = Customer::find($id);
        $cs->delete();
    }
}

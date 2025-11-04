<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DepositCustomer;
use Illuminate\Http\Request;

class DepositCustomerController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Deposit Customer',
            'depo' => DepositCustomer::all(),
        ];

        return view('admin/deposit', compact('data'));
    }

    function tambahdeposit()
    {
        $data = [
            'title' => 'Tambah Deposit',
        ];

        $cs = Customer::all();
        return view('admin/adddeposit', compact('data', 'cs'));
    }

    function create(Request $request)
    {
        $dp = new DepositCustomer();
        $cs = Customer::find($request->wa);
        $dp->tanggal = $request->tanggal;
        $dp->wa = $cs->wa;
        $dp->customer = $cs->customer;
        $dp->id_customer = $request->wa;
        $dp->saldo_awal = $cs->saldo;
        $dp->tambah_saldo =  str_replace(['.', ','], '',  $request->addsaldo);
        $dp->saldo_akhir =  str_replace(['.', ','], '',  $request->saldoakhir);
        $dp->payment = $request->payment;
        $dp->save();
        return redirect()->route('deposit')->with('success', 'Data berhasil ditambah');
    }

    function edit($id)
    {

        $data = ['title' => 'Edit Deposit'];
        $dp = DepositCustomer::find($id);
        $cs = Customer::all();
        return view('admin/editdeposit', compact('data', 'dp', 'cs'));
    }

    function update(Request $request, $id)
    {

        $dp = DepositCustomer::find($id);
        $cs = Customer::find($request->wa);

        $dp->tanggal = $request->tanggal;
        $dp->wa = $cs->wa;
        $dp->customer = $cs->customer;
        $dp->id_customer = $request->wa;
        $dp->saldo_awal = $cs->saldo;
        $dp->tambah_saldo =  str_replace(['.', ','], '',  $request->addsaldo);
        $dp->saldo_akhir =  str_replace(['.', ','], '',  $request->saldoakhir);
        $dp->payment = $request->payment;
        $dp->update();
        return redirect()->route('deposit')->with('success', 'Data berhasil diubah');
    }

    function delete($id)
    {
        $dp = DepositCustomer::find($id);
        $dp->delete();
    }
}

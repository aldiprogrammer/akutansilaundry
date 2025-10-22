<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Payment',
            'payment' => Payment::all(),
        ];
        return view('admin.payment', compact('data'));
    }

    function tambahpayment()
    {
        $data = [
            'title' => 'Tambah Payment',
        ];
        return view('admin/addpayment', compact('data'));
    }

    function create(Request $request)
    {
        $py = new Payment();
        $py->nama_payment = $request->nama_payment;
        $py->bank = $request->bank;
        $py->no_rekening = $request->no_rekening;
        $py->nama = $request->nama;
        $py->save();
        return redirect()->route('payment')->with('success', 'Data payment berhasil ditambah');
    }

    function edit($id)
    {
        $data = [
            'title' => 'Edit payment',
        ];
        $py = Payment::find($id);
        return view('admin.editpayment', compact('data', 'py'));
    }

    function update(Request $request, $id)
    {
        $py = Payment::find($id);
        $py->nama_payment = $request->nama_payment;
        $py->bank = $request->bank;
        $py->no_rekening = $request->no_rekening;
        $py->nama = $request->nama;
        $py->update();
        return redirect()->route('payment')->with('success', 'Data payment berhasil diubah');
    }

    function delete($id)
    {

        $py = Payment::find($id);
        $py->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Transaksi::with('kategori')->get();
        // dd($data);
        return view('transaksi-list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $datakategori = Kategori::all();
        return view('transaksi-add',compact('datakategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Transaksi::insert([
            'kategori_id' => $request->jeniskategori,
            'tanggal' => $request->tanggal,
            'amount' => $request->nominal
        ]);

        return redirect('transaksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        //
        $datakategori = Kategori::all();
        $data = Transaksi::findOrFail($id);
        return view('transaksi-edit',compact('data','datakategori'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        //
        // return $request;
        Transaksi::findOrFail($id)->update([
            'kategori_id' => $request->jeniskategori,
            'tanggal'=> $request->tanggal,
            'amount' =>$request->nominal
        ]);
        return redirect('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        //
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect('transaksi');
    }
}

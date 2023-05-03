<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Kategori::all();
        return view('kategori-list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kategori-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request;
        Kategori::insert([
            'jenis_kategori' => $request->jeniskategori,
            'kepentingan' => $request->kepentingan
        ]);

        return redirect('kategori');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Kategori::findOrFail($id);
        return view('kategori-edit',compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // $db = Kategori::findOrFail($id);

        $update = Kategori::findOrFail($id)->update([
            'jenis_kategori' => $request->jeniskategori,
            'kepentingan' => $request->kepentingan
        ]);

        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kategori = Kategori::findOrFail($id);

        $kategori->delete();
        
        return redirect('kategori');
    }
}

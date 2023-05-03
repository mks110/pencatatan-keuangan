<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    //
    public function index(){
        $data = Transaksi::with('kategori')->get();
        
        return view('rekap',compact('data'));
    }
}

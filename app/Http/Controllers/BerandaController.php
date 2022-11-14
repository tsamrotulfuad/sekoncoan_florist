<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produk;
use App\Models\Pembelian;
use App\Models\Testimoni;

class BerandaController extends Controller
{
    public function index()
    {
        // produk
        $produks = Produk::latest()->get();
        // pembelian
        $pembelians = Pembelian::latest()->limit(6)->get();
        // testimoni
        $testi1 = Testimoni::latest()->skip(0)->take(3)->get();
        $testi2 = Testimoni::latest()->skip(3)->take(6)->get();
        return view('welcome',
                compact('produks', 'pembelians', 'testi1', 'testi2'));
    }

    public function comingsoon()
    {
        return view('comingsoon');
    }


}

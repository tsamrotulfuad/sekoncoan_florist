<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProdukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::latest()->paginate(10);
        return view('admin.produk', compact('produks'))
        ->with('i', (request()->input('page', 1) -1) * 10);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdukRequest $request)
    {
        //Upload Gambar
        $gambar = $request->file('gambar_produk');
        $gambar->storeAs('public/produks/', $gambar->hashName());

        $produk = Produk::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'gambar_produk' => $gambar->hashName(),
        ]);

        if($produk){
            //redirect dengan pesan sukses
            return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('produk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        return view('admin.produk_show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('admin.produk_edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProdukRequest $request, Produk $produk)
    {
        $produk = Produk::findOrFail($produk->id);

        if($request->file('gambar_produk') == "") {
            $produk->update([
                'kode_produk' => $request->kode_produk,
                'nama_produk' => $request->nama_produk,
                'harga_produk' => $request->harga_produk,
                'deskripsi_produk' => $request->deskripsi_produk,
            ]);
        } else {
            //Hapus gambar lama
            Storage::disk('local')->delete('public/produks/'.$produk->gambar_produk);

            //upload gambar baru
            $gambar = $request->file('gambar_produk');
            $gambar->storeAs('public/produks', $gambar->hashName());

            $produk->update([
                'kode_produk' => $request->kode_produk,
                'nama_produk' => $request->nama_produk,
                'harga_produk' => $request->harga_produk,
                'deskripsi_produk' => $request->deskripsi_produk,
                'gambar_produk' => $gambar->hashName(),
            ]);
        }
        if($produk){
            //redirect dengan pesan sukses
            return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('produk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $del_produk = Produk::findOrFail($produk->id);
        Storage::disk('local')->delete('public/produks/'.$produk->gambar_produk);
        $del_produk->delete();

        return redirect()->route('produk.index');
    }
}

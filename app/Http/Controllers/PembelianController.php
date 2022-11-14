<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePembelianRequest;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelians = Pembelian::latest()->paginate(10);
        return view('admin.pembelian', compact('pembelians'))
        ->with('i', (request()->input('page', 1) -1) * 10);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pembelian_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePembelianRequest $request)
    {
        //Upload Gambar
        $gambar = $request->file('gambar_pembelian');
        $gambar->storeAs('public/pembelians/', $gambar->hashName());

        $pembelian = Pembelian::create([
            'nama_pembelian' => $request->nama_pembelian,
            'gambar_pembelian' => $gambar->hashName(),
        ]);

        if($pembelian){
            //redirect dengan pesan sukses
            return redirect()->route('pembelian.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pembelian.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelian $pembelian)
    {
        return view('admin.pembelian_show', compact('pembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelian $pembelian)
    {
        return view('admin.pembelian_edit', compact('pembelian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(StorePembelianRequest $request, Pembelian $pembelian)
    {
        $pembelian = Pembelian::findOrFail($pembelian->id);

        if($request->file('gambar_pembelian') == "") {
            $pembelian->update([
                'nama_pembelian' => $request->nama_pembelian,
            ]);
        } else {
            //Hapus gambar lama
            Storage::disk('local')->delete('public/pembelians/'.$pembelian->gambar_pembelian);

            //upload gambar baru
            $gambar = $request->file('gambar_pembelian');
            $gambar->storeAs('public/pembelians', $gambar->hashName());

            $pembelian->update([
                'nama_pembelian' => $request->nama_pembelian,
                'gambar_pembelian' => $gambar->hashName(),
            ]);
        }
        if($pembelian){
            //redirect dengan pesan sukses
            return redirect()->route('pembelian.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pembelian.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelian $pembelian)
    {
        $del_pembelian = Pembelian::findOrFail($pembelian->id);
        Storage::disk('local')->delete('public/pembelians/'.$pembelian->gambar_pembelian);
        $del_pembelian->delete();

        return redirect()->route('pembelian.index');
    }
}

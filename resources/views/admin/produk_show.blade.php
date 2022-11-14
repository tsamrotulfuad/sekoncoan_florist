@extends('admin.app')

@section('title', 'Testimoni')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">

                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah data</h6>
                        
                    </div>

                    <!-- Card Body -->
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="kode_produk" class="form-label">Kode Produk</label>
                                    <input type="text" class="form-control" name="kode_produk" id="kode_produk" value="{{ $produk->kode_produk }}">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="nama_produk" class="form-label">Asal Pelanggan</label>
                                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="{{ $produk->nama_produk }}">
                        
                                </div>
                                <div class="mb-3">
                                    <label for="harga_produk" class="form-label">Harga Produk</label>
                                    <input type="text" class="form-control" name="harga_produk" id="harga_produk" value="{{ $produk->harga_produk }}">
                        
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="deskripsi_produk" id="deskripsi_produk" style="height: 100px">{{ $produk->deskripsi_produk }}</textarea>

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar_produk" class="form-label">Gambar Produk</label>
                                    <img class="img-preview img-fluid mt-3 col-sm-5 d-block" src="{{ Storage::url('public/produks/').$produk->gambar_produk }}">
                                </div>
                                
                                <a class="btn btn-primary" href="{{ route('produk.index') }}">Kembali</a>
                            </form>
                        </div>
                </div>
            </div>
        </div>

            
    </div>
@endsection


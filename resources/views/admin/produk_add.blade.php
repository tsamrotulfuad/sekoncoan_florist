@extends('admin.app')

@section('title', 'Pelanggan')

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
                            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="kode_produk" class="form-label">Kode Produk</label>
                                    <input type="text" class="form-control" name="kode_produk" id="kode_produk" placeholder="Masukkan Kode Produk">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk">
                                </div>
                                <div class="mb-3">
                                    <label for="harga_produk" class="form-label">Harga Produk</label>
                                    <input type="text" class="form-control" name="harga_produk" id="harga_produk" placeholder="Masukkan Harga Produk">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="deskripsi_produk" placeholder="Deskripsi Produk" id="deskripsi_produk" style="height: 100px"></textarea>
                                        
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar_produk" class="form-label">Gambar Produk</label>
                                    <input type="file" class="form-control" name="gambar_produk" id="gambar_produk" placeholder="Masukkan Gambar Produk" onchange="previewImage()">
                                    <img class="img-preview img-fluid mt-3 col-sm-5">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>

            
    </div>

@endsection

 

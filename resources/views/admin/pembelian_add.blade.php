@extends('admin.app')

@section('title', 'Pembelian')

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
                            <form action="{{ route('pembelian.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="nama_pembelian" class="form-label">Nama Pembelian</label>
                                    <input type="text" class="form-control" name="nama_pembelian" id="nama_pembelian" placeholder="Masukkan Nama Pembelian">
                                </div>
                                <div class="mb-3">
                                    <label for="gambar_pembelian" class="form-label">Gambar Pembelian</label>
                                    <input type="file" class="form-control" name="gambar_pembelian" id="gambar_pembelian" placeholder="Masukkan Gambar Pembelian" onchange="previewGambar()">
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


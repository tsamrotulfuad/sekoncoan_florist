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
                                    <label for="nama_pembelian" class="form-label">Nama Pembelian</label>
                                    <input type="text" class="form-control" name="nama_pembelian" id="nama_pembelian" value="{{ $pembelian->nama_pembelian }}">
                                </div>
                                <div class="mb-3">
                                    <label for="gambar_pembelian" class="form-label">Gambar Produk</label>
                                    <img class="img-preview img-fluid mt-3 col-sm-5 d-block" src="{{ Storage::url('public/pembelians/').$pembelian->gambar_pembelian }}">
                                </div>
                                                               
                                <a class="btn btn-primary" href="{{ route('pembelian.index') }}">Kembali</a>
                            </form>
                        </div>
                </div>
            </div>
        </div>

            
    </div>
@endsection


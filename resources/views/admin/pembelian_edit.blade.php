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
                            <form action="{{ route('pembelian.update',$pembelian->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="nama_pembelian" class="form-label">Nama Pembelian</label>
                                    <input type="text" class="form-control @error('nama_pembelian') is-invalid @enderror" name="nama_pembelian" id="nama_pembelian" value="{{ $pembelian->nama_pembelian }}" required>
                                        @error('nama_pembelian')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="gambar_pembelian" class="form-label">Gambar Produk</label>
                                    <input type="file" class="form-control @error('gambar_pembelian') is-invalid @enderror" name="gambar_pembelian" id="gambar_pembelian" onchange="previewGambar()">
                                    @if ($pembelian->gambar_pembelian)
                                        <img class="img-preview img-fluid mt-3 col-sm-5 d-block" src="{{ Storage::url('public/pembelians/').$pembelian->gambar_pembelian }}">
                                    @else
                                        <img class="img-preview img-fluid mt-5 col-sm-5">
                                    @endif
                                        @error('gambar_pembelian')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                                                
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a class="btn btn-secondary" href="{{ route('pembelian.index') }}">Kembali</a>
                            </form>
                        </div>
                </div>
            </div>
        </div>

            
    </div>
@endsection


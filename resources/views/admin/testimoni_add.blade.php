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
                            <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                                    <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror" name="nama_pelanggan" id="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required>
                                        @error('nama_pelanggan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="asal_pelanggan" class="form-label">Asal Pelanggan</label>
                                    <input type="text" class="form-control @error('asal_pelanggan') is-invalid @enderror" name="asal_pelanggan" id="asal_pelanggan" placeholder="Masukkan Asal Pelanggan" required>
                                        @error('asal_pelanggan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="isi_testimoni" class="form-label">Isi Testimoni</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="isi_testimoni" placeholder="Masukkan Testimoni" id="isi_testimoni" required style="height: 100px"></textarea>
                                        @error('isi_testimoni')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>

            
    </div>
@endsection


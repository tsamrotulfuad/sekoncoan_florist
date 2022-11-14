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
                                    <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" value="{{ $testimoni->nama_pelanggan }}">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="asal_pelanggan" class="form-label">Asal Pelanggan</label>
                                    <input type="text" class="form-control" name="asal_pelanggan" id="asal_pelanggan" placeholder="Masukkan Asal Pelanggan" value="{{ $testimoni->asal_pelanggan }}">
                        
                                </div>
                                <div class="mb-3">
                                    <label for="isi_testimoni" class="form-label">Isi Testimoni</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="isi_testimoni" id="isi_testimoni" style="height: 100px">{{ $testimoni->isi_testimoni }}</textarea>

                                    </div>
                                </div>
                                
                                <a class="btn btn-primary" href="{{ route('testimoni.index') }}">Kembali</a>
                            </form>
                        </div>
                </div>
            </div>
        </div>

            
    </div>
@endsection


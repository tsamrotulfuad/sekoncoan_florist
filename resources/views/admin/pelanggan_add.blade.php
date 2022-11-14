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
                            <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="no_pelanggan" class="form-label">No. Pelanggan</label>
                                    <input type="text" class="form-control" name="no_pelanggan" id="no_pelanggan" placeholder="Masukkan No. Pelanggan">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                                    <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" placeholder="Masukkan Nama Pelanggan">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat_pelanggan" class="form-label">Alamat Pelanggan</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="alamat_pelanggan" placeholder="Masukkan Alamat" id="alamat_pelanggan" required style="height: 100px"></textarea>
                                        @error('alamat_pelanggan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">No. HP</label>
                                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan No. HP">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>

            
    </div>
@endsection


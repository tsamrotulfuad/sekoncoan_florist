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
                                    <label for="no_pelanggan" class="form-label">No. Pelanggan</label>
                                    <input type="text" class="form-control" name="no_pelanggan" id="no_pelanggan" value="{{ $pelanggan->no_pelanggan }}">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                                    <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="alamat_pelanggan" class="form-label">Alamat Testimoni</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="alamat_pelanggan" id="alamat_pelanggan" style="height: 100px">{{ $pelanggan->alamat_pelanggan }}</textarea>

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">No. Hp</label>
                                    <input type="text" class="form-control" name="no_hp" id="no_hp"  value="{{ $pelanggan->no_hp }}">
                        
                                </div>
                                
                                
                                <a class="btn btn-primary" href="{{ route('pelanggan.index') }}">Kembali</a>
                            </form>
                        </div>
                </div>
            </div>
        </div>

            
    </div>
@endsection


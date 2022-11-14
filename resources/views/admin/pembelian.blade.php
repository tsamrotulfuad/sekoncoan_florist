@extends('admin.app')

@section('title', 'Pembelian')

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Data Pembelian</h6>
                <a href="{{ route('pembelian.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah data
                </a>                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pembelian</th>
                                <th>Gambar</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                               <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot> -->
                        <tbody>
                            @forelse ($pembelians as $pembelian)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $pembelian->nama_pembelian }}</td>
                                <td><img src="{{ Storage::url('public/pembelians/').$pembelian->gambar_pembelian }}" class="rounded" style="height: 150px"></td>
                                <td>
                                <form action="{{ route('pembelian.destroy',$pembelian->id) }}" method="POST">

                                    <a class="btn btn-info btn-sm" href="{{ route('pembelian.show',$pembelian->id) }}">Show</a>

                                    <a class="btn btn-primary btn-sm" href="{{ route('pembelian.edit',$pembelian->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection


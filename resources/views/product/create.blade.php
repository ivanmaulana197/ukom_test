@extends('layout.master')

@section('namaPage', 'Create Product')

@section('content')
<section class="content">
    <div class="conteiner-fluid">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">

                        <h3 class="card-title">Create Product</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="Nama Barang">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_produk" id="nama_produk"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="Input Nama">Harga</label>
                                <input type="text" class="form-control" name="harga" id="harga" placeholder="Enter Nama">
                            </div>
                            <a href="{{ route('product.index') }}" class="btn btn-falcon-default me-2 mb-1"
                                type="button">Kembali
                            </a>
                            <button class="btn btn-primary me-2 mb-1" type="submit">
                                <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span> Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
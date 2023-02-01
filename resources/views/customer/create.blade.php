@extends('layout.master')

@section('namaPage', 'Create Customer')

@section('content')
<section class="content">
    <div class="conteiner-fluid">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">

                        <h3 class="card-title">Create Customer</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('customer.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="Input Email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="Input Nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Nama">
                            </div>
                            <div class="form-group">
                                <label for="Input Nama">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Enter Alamat">
                            </div>
                            <a href="{{ route('customer.index') }}" class="btn btn-falcon-default me-2 mb-1"
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
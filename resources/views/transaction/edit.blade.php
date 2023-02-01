@extends('layout.master')

@section('namaPage', 'Update Transaksi')

@section('content')
<section class="content">
    <div class="conteiner-fluid">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">

                        <h3 class="card-title">Update Transaksi</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('transaction.update', $transaction->id) }}" method="post">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="Input Email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Enter email"
                                    value="{{ $customers->where('id',$transaction->customer_id)->first()->email }}">
                            </div>
                            <div class="form-group">
                                <label>Pilih Produk</label>
                                <select class="custom-select" name="products_id">
                                    

                                    @foreach ($products as $product)
                                    @if ($product->id == $transaction->product_id)
                                    <option value="{{ $product->id }}" selected>{{ $product->nama_produk }}
                                        ({{ $product->harga }})</option>
                                    @else
                                    <option value="{{ $product->id }}">{{ $product->nama_produk }}
                                        ({{ $product->harga }})</option>
                                    @endif
                                    
                                    @endforeach
                                </select>
                            </div>

                            <a href="{{ route('transaction.index') }}" class="btn btn-falcon-default me-2 mb-1"
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
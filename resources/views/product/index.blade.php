@extends('layout.master')

@section('namaPage', 'Data Master Produk')
@section('content')

<div class="content">
    <div class="container-fluid">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">List Product</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ route('product.create') }}">
                                <button class="btn btn-primary" type="button">
                                    <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span> Tambah
                                    Product</button>
                            </a>
                        </div>
                        <table class="data-table table table-striped" id="table2">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->nama_produk }}</td>
                                    <td>{{ $product->harga }}</td>
                                    
                                    <td>
                                        <a href="{{route('product.edit', $product->id)}}"
                                            class="badge bg-warning text-decoration-none"><i class="fas fa-pen"></i>
                                            Edit</a>
                                        
                                        <form action="{{ route('customer.destroy', [$product->id]) }}" method="POST"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger"><span class="fas fa-trash"></span> Delete</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>


            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
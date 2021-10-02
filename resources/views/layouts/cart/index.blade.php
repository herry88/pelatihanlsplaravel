@extends('master')

@section('title')
    <title>Halaman Cart</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Transaksi Penjualan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Transaksi</a></div>
                <div class="breadcrumb-item">Transaksi Penjualan</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card card-primary">
                    <form method="POST" action="{{ route('transaksi.store') }}" enctype="multipart/form-data"
                        class="needs-validation" novalidate="">
                        @csrf
                        @method('POST')
                        <div class="card-header">
                            <h4>Pilih Produk</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <select id="produkSelect" class="form-control select2" name="product_id" required>
                                    <option value="">&mdash;</option>
                                    @foreach ($produks as $res)
                                        <option value="{{ $res->id }}">{{ $res->name_product }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Form Nama Produk harus diisi!
                                </div>
                            </div>

                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="row">
                                <div class="col-11">
                                    <input type="number" class="form-control" value="1" name="jumlah" required>
                                </div>
                            </div>
                            <button class="btn btn-primary" id="submit-btn">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="card card-primary">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Keranjang</h4>
                        {{-- @if ($totalCarts != 0)
                            <a class="btn btn-warning btn-sm" href="{{ route('transaksiClean') }}">Bersihkan Keranjang</a>
                        @endif --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>

                                        <th>Nama Produk</th>
                                        <th>Jumlah</th>
                                        <th colspan="2">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $res)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $res->produk->name_product }}</td>
                                            <td>{{ $res->jumlah }}</td>
                                            <td>
                                                {{ number_format($res->sub_total, 2, ',', '.') }}</td>
                                            <td>
                                                <a href="#" data-uri="{{ route('transaksi.destroy', $res->id) }}"
                                                    class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#modalDestroy"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="text-right">
                            <p class="h5">Total Harga : <b>IDR
                                    {{ number_format($totalCarts, 2, ',', '.') }}</b>
                            </p>
                        </div>
                        <hr>
                    </div>
                    <div class="card-footer text-right">
                        @if ($totalCarts != 0)
                            <a href="#"
                                class="btn btn-flat btn-icon icon-left btn-primary"><i class="fas fa-shopping-cart"></i>
                                Checkout</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

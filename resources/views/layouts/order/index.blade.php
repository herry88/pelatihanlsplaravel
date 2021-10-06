@extends('master')

@section('title')
    <title>Order Page</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Cart</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card card-primary">
                    <form action="#" method="post">
                        <div class="card-header">
                            <h4>Pilih Produk</h4>
                        </div>
                        <div class="card-body">
                            <label for="">Nama Produk</label>
                            <select name="nama_produk" class="form-control">
                                <option value="0">- Pilih Produk</option>
                                <option value="1">Test</option>
                            </select>
                            <div class="invalid-feedback">
                                form nama produk harus di isi
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="row">
                                <div class="col-11">
                                    <input type="number" class="form-control" name="jumlah" required>
                                </div>
                            </div>
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="card card-primary">
                    <div class="card card-header ">
                        <h4>Cart</h4>
                    </div>
                    <div class="card card-body">
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
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="text-right">
                            <h3>Total Harga</h3>
                        </div>
                        <hr>
                        <div class="card card-footer text-right">
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
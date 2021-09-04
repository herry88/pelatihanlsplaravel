@extends('master')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        @if (Auth::user()->level == 'admin')
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total User</h4>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-dolly-flatbed"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Produk</h4>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-dolly-flatbed"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Produk Kosong</h4>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Transaksi</h4>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif(Auth::user()->level == "kasir")
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Transaksi</h4>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="col-12 mb-4">
                    <div class="hero text-white hero-bg-image hero-bg-parallax"
                        style="background-image: url('stisla/img/unsplash/andre-benz-1214056-unsplash.jpg');">
                        <div class="hero-inner">
                            <h2>Selamat Datang, {{ Auth::user()->name }}!</h2>
                            <p class="lead">Hak Akses {{ Auth::user()->level }} telah diberikan kepada akun
                                Anda!. Selamat Menggunakan Aplikasi!</p>
                            <div class="mt-4">
                                <a href="#"
                                    class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>
                                    Profil Akun</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

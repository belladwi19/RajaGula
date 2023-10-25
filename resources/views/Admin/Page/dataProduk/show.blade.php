@extends('Admin.master')

@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Detail Produk</h3>
            <p class="text-subtitle text-muted">For user to check they list</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Data Produk</li>
                    <li class="breadcrumb-item active" aria-current="page">Data Detail Produk</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="card"  >
    <img src="{{ asset('fotoproduk/' . $produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 20rem;">
    <div class="card-body">
        <h2>{{$produk->nama_produk}}</h2>
        <p class="card-text">{{$produk->detail_produk}}</p>
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4">
                <p>Stok Produk</p>
                <p>Kategori Produk</p>
            </div>
            <div class="col-lg-8">
                <p>: {{$produk->stok_produk}} </p>
                <p>: {{$produk->kategori->kategori}}</p>
            </div>
        </div>
    </div>
</div>

@endsection
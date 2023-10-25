@extends('Admin.master')

@section('content')

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Penjualan</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Transaksi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">   
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                        <center><h3>Periode Bulan {{$bulan}} {{$tahun}}</h3></center>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Pesanan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Nomer Orderan</th>
                                        <th>Ongkir</th>
                                        <th>Total Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 0;
                                    ?>
                                    @foreach($order as $ts)
                                    <?php
                                        $no += 1;
                                    ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{date('d-m-Y', strtotime($ts->created_at));}}</td>
                                    <td>{{$ts->user->name}}</td>
                                    <td>{{$ts->no_order}}</td>
                                    <td>Rp {{$ts->ongkir}}</td>
                                    <td>Rp {{$ts->total}}</td>
                                </tr>
                            
                                @endforeach
                                <tr style="height: 100px">
                                    <td colspan="5" ><h4><b>Total Penjualan<b><h4></td>
                                    <td><h4><b>Rp {{$tot}}<b><h4></td>
                                </tr>

                                </tbody>
                            </table>
                            
                        </div>

                    </div>

                </section>
            </div>
            

@endsection
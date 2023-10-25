@extends('Admin.master')

@section('content')

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Transaksi</h3>
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
                        
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Pesanan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Nomer Orderan</th>
                                        <th>Total Transaksi</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 0;
                                    ?>
                                    @foreach($trans as $ts)
                                    <?php
                                        $no += 1;
                                    ?>
                                    <tr>
                                    <td>{{$no}}</td>
                                    <td>{{date('d-m-Y', strtotime($ts->created_at));}}</td>
                                    <td>{{$ts->user->name}}</td>
                                    <td>{{$ts->no_order}}</td>
                                    <td>Rp {{$ts->total}}</td>
                                    <td><img src="{{ asset('buktipembayaran/' . $ts->buktibayar) }}" alt="foto" class="img-fluid" style="height: 100px;"></td>
                                    
                                    <td>
                                        <a href="{{route('admintransaksi.view', $ts->no_order)}}" class="btn btn-info" ><i class="fa fa-info" aria-hidden="true" style="margin-right: 10px;"></i>Detail</a>
                                        @if($ts->status == 'Sudah Upload Bukti Pembayaran')
                                            <a href="{{route('admintransaksi.update', $ts->id)}}" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true" style="margin-right: 10px;"></i>Accept</a>
                                        @elseif($ts->status == 'Confirmed')
                                            <a href="{{route('admintransaksi.kirim', $ts->id)}}" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true" style="margin-right: 10px;"></i>Kirim Barang</a>
                                        @endif    
                                    </td>
                                </tr>
                                
                                @endforeach

                                </tbody>
                            </table>
                            
                            <div class="d-flex justify-content-center">
                                {!! $trans->links() !!}
                            </div>
                        </div>

                    </div>

                </section>
            </div>
            

@endsection
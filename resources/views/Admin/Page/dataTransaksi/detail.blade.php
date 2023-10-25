@extends('Admin.master')

@section('content')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Kategori</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
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
                                        <th scope="col"><center>No</center></th>
                                        <th scope="col"><center>Gambar</center></th>
                                        <th scope="col"><center>Nama Produk</center></th>
                                        <th scope="col"><center>Jumlah</center></th>
                                        <th scope="col"><center>Harga</center></th>
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
                                            <th scope="row" style="line-height: 8rem; text-align: center">{{$no}}</th>
                                            <td style="line-height: 8rem;text-align: center"><center><img src="{{ asset('fotoproduk/' . $ts->produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 8rem; padding-right: 0;"><center></td>
                                            <td style="line-height: 8rem;text-align: center">{{$ts->produk->nama_produk}}</td>
                                            <td style="line-height: 8rem;text-align: center"><input class="form-control" type="hidden" name="jumlah" value="{{$ts->jumlah}}"></input>{{$ts->jumlah}}</td>
                                            <td style="line-height: 8rem;text-align: center">Rp {{$ts->produk->harga * $ts->jumlah}}</td>
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
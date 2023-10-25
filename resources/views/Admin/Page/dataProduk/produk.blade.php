@extends('Admin.master')

@section('content')

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Produk</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Produk</li>
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
                        <a href="{{ route('produk.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px;"></i>Add Produk</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Stok</th>
                                        <th>Harga Produk</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 0;
                                    ?>
                                    @foreach($produk as $pr)
                                    <?php
                                        $no += 1;
                                    ?>
                                    <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$pr->nama_produk}}</td>
                                    <td>{{$pr->stok_produk}}</td>
                                    <td>{{$pr->harga}}</td>
                                    
                                    <td>
                                        <a href="{{route('produk.view', $pr->id)}}" class="btn btn-info" ><i class="fa fa-info" aria-hidden="true" style="margin-right: 10px;"></i>Detail</a>
                                        <a href="{{route('produk.update', $pr->id)}}" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true" style="margin-right: 10px;"></i>Ubah</a>
                                        <a href="{{route('produk.delete', $pr->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true" style="margin-right: 10px;"></i>Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center">
                                {!! $produk->links() !!}
                            </div>
                            
                        </div>

                    </div>

                </section>
            </div>

    
@endsection
@extends('Admin.master')

@section('content')

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Pelanggan</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Pelanggan</li>
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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 0;
                                    ?>
                                    @foreach($pelanggan as $pl)
                                    <?php
                                        $no += 1;
                                    ?>
                                    <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$pl->name}}</td>
                                    <td>{{$pl->email}}</td>
                                    <td>{{$pl->telepon}}</td>
                                    <td>
                                        <a href="{{route('pelanggan.delete', $pl->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true" style="margin-right: 10px;"></i>Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {!! $pelanggan->links() !!}
                            </div>
                        </div>
                    </div>

                </section>
            </div>
@endsection
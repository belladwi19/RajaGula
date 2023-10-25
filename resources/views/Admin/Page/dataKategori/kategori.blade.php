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
                        <a href="{{ route('kategori.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px;"></i>Add Kategori</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 0;
                                    ?>
                                    @foreach($kategori as $kt)
                                    <?php
                                        $no += 1;
                                    ?>
                                    <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$kt->kategori}}</td>
                                    <td>
                                        <a href="{{route('kategori.update', $kt->id)}}" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true" style="margin-right: 10px;"></i>Ubah</a>
                                        <a href="{{route('kategori.delete', $kt->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true" style="margin-right: 10px;"></i>Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center">
                                {!! $kategori->links() !!}
                            </div>
                        </div>
                    </div>

                </section>
            </div>
@endsection
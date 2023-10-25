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
                                    <li class="breadcrumb-item active" aria-current="page">Data Penjualan</li>
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
                        <form class="form form-horizontal" action="{{ route('omzet.search') }}" method="POST">
                        @csrf
                            <div class="form-group">
                            <label for="bulan">Bulan</label>
                            <select name="bulan" id="bulan" class="form-control">
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">Nopember</option>
                                <option value="12">Desember</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label for="tahun">Tahun</label><br>
                            <select name="tahun" id="tahun" class="form-control">
                                @for($a = 2019; $a <= 2050; $a++)
                                    <option value="{{$a}}">{{$a}}</option>
                                @endfor
                            </select>
                            </div>
                            <div class="d-grid gap-2" style="padding-left: 20%; padding-right: 20%; margin-top: 30px;">
                                <button class="btn btn-primary" type="submit" name="laporan">Buka Laporan</button>
                            </div>
                        </form>
                        </div>
                    </div>

                </section>
            </div>
@endsection
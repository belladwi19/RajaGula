@extends('Admin.master')

@section('content')
        <!-- Start Error -->
        @if(count($errors) > 0 )
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                
                <ul class="p-0 m-0" style="list-style: none;">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- End Error -->
        @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">   
                <strong>{{ $message }}</strong>
            </div>
        @endif
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
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Data Produk</h4>
                                </div>
                                <div class="card-content"> 
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="{{ route('pelanggan.create.process') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Nama</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Nama" id="first-name-icon" value="{{old('pelanggan_nama')}}" name="pelanggan_nama" id="pelanggan_nama" >
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Email" id="first-name-icon" value="{{old('pelanggan_email')}}" name="pelanggan_email" id="pelanggan_email">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envlope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Username</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Username" id="first-name-icon" value="{{old('pelanggan_username')}}" name="pelanggan_username" id="pelanggan_username">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password" value="{{old('pelanggan_password')}}" name="pelanggan_password" id="pelanggan_password">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Confirm Password</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Confirm Password" value="{{old('pelanggan_confpassword')}}" name="pelanggan_confpassword" id="pelanggan_confpassword">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Nomer HP</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="number" class="form-control"
                                                                    placeholder="Nomer HP" id="first-name-icon" value="{{old('pelanggan_nomor')}}" name="pelanggan_nomor" id="pelanggan_nomor">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-telephone"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Tanggal Lahir</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="date" class="form-control"
                                                                    placeholder="Tanggal Lahir" id="first-name-icon" value="{{old('pelanggan_lahir')}}" name="pelanggan_lahir" id="pelanggan_lahir">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-calendar-date"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Foto Profile</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <div class="position-relative">
                                                                <input type="file" class="form-control"  value="{{old('foto')}}" name="foto" onchange="loadFile(event)" >  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Alamat</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <div class="position-relative">
                                                                <div class="form-floating">
                                                                    <textarea class="form-control" placeholder="Leave a comment here"
                                                                        id="floatingTextarea" value="{{old('pelanggan_alamat')}}" name="pelanggan_alamat" id="pelanggan_alamat"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2" style="padding-left: 20%; padding-right: 20%; margin-top: 30px;">
                                                        <button class="btn btn-primary" type="submit" name="pelanggan">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->
            </div>

            <script>
                var urlPath;
                var loadFile = function(event) {
                    var output = document.getElementById('img-banner');
                    var container = document.getElementById('container-img-banner');
                    urlPath = URL.createObjectURL(event.target.files[0]);
                    output.src = urlPath;
                    output.onload = function() {
                        URL.revokeObjectURL(output.src)
                    }
                    container.classList.remove('d-none');
                    container.classList.add('d-block');
                };

            </script>
@endsection
@extends('Pelanggan.master')

<style>

    .file-upload{
        display: inline-block;
        padding: 0 12px;
        width: 180px;
        height: 40px;
        line-height: 40px;
        color: white;
        background-color: #7F9B6E;
        cursor: pointer;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
    }
    .file-upload2{
        display: inline-block;
        padding: 0 12px;
        height: 40px;
        line-height: 40px;
        color: white;
        background-color: #C7E7B4;
        cursor: pointer;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
    }
    .file-upload input[type="file"]{
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
</style>

@section('content')

        <div class="container">
            <h4 style="font-family: 'Montserrat'; margin-top:50px; margin-bottom:50px;"><b>Profil Saya</b></h4>
            <form action="{{route('account.update')}}" method="POST" id="logForm" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-4 border-end">
                    <center>
                        @if($account->foto == NULL)
                            <h5>Silahkan Upload foto</h5>
                        @else
                            <img src="{{ asset('fotouser/' . $account->foto) }}" alt="foto" class="img-circle " style="height: 12rem;">
                        @endif
                        <br>
                        <form action="{{route('account.updateimg')}}" method="POST" id="logForm" enctype="multipart/form-data"> 
                        {{ csrf_field() }}
                            <div class="file-upload" style="margin-top: 30px">
                                <input type="file" value="{{old('foto')}}" name="foto"> Choose File
                            </div>
                            <div class="file-upload2" style="margin-top: 30px">
                                <button type="submit" class="btn "  name="simpan">simpan</button>
                            </div>
                            
                        </form>
                    </center>
                </div>
                <div class="col-lg-8 ">
                        <div class="form-group row pb-3 pt-3">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control-plaintext" name="nama" value="{{$account->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="email" value="{{$account->email}}">
                            </div>
                        </div>
                        <div class="form-group row pt-4">
                            <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="no_hp" value="{{$account->telepon}}">
                            </div>
                        </div>
                        <div class="form-group row pt-4">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="alamat" rows="3" cols="30">{{$account->alamat}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center pt-5">
                            <button type="submit" class="btn btn-warning btn-block m-2" style="width:180px" name="update">Ubah</button>
                            <button type="submit" class="btn btn-danger btn-block m-2" style="width:180px" name="cancel">Cancel</button>
                        </div>
                    
                </div>
            </div>
            </form>
        </div>
@endsection
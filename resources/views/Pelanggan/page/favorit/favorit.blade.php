@extends('Pelanggan.master')

@section('content')
<div class="container">
<h4 style="font-family: 'Montserrat';margin-top:50px;"><b>Favorit Saya</b></h4>
</div>
<div class="container mt-5 justify-content-center" id="cont">
    <div class="cont">
    <div class="isitabel">
<table  class="table table-responsive table-bordered border-success">
    <thead class="table  table-success">
        <tr>
        <th scope="col"><center>No</center></th>
        <th scope="col"><center>Gambar</center></th>
        <th scope="col"><center>Nama Produk</center></th>
        <th scope="col"><center>Harga</center></th>
        <th scope="col"><center>Action</center></th>
        </tr>
    </thead>

    <tbody>
        {{-- jdjd --}}
        <?php
            $no = 0;
        ?>
            @foreach($favorit as $fav)
        <?php
            $no += 1;
        ?>
        <tr>  
            <th scope="row" style="line-height: 8rem; text-align: center">{{$no}}</th>
            <td style="line-height: 8rem;text-align: center"><center><img src="{{ asset('fotoproduk/' . $fav->produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 8rem; padding-right: 0;"><center></td>
            <td style="line-height: 8rem;text-align: center">{{$fav->produk->nama_produk}}</td>
            <td style="line-height: 8rem;text-align: center">Rp {{$fav->produk->harga}}</td>
            <td style="line-height: 8rem;text-align: center"><center>
                <a class="btn btn-outline-light" href="{{route('home.view', $fav->produk->id)}}" style="background-color:#7F9B6E;font-color:white;width:40%;border-radius:25px 25px 25px 25px">Detail</button>
                <a class="btn btn-danger" href="{{route('favorit.delete', $fav->id)}}" onclick="return confirm('Are you sure?')" style="font-color:white;width:40%;border-radius:25px 25px 25px 25px">Hapus</a>
            </center></td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
    </div>
</div>

@endsection
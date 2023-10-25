@extends('Pelanggan.master')
<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@section('content')

<div class="container mt-5 justify-content-center" id="cont">
    <h4 style="font-family: 'Montserrat'; margin-top:50px; margin-bottom:30px;"><b>Keranjang Saya</b></h4>

        <div class="d-grid gap-2" style="padding-left: 20%; padding-right: 20%; margin-top: 30px;margin-bottom:30px;">
            <a href="{{ route('home.index') }}" class="btn btn-outline-light" name="hapus" style="background-color:#7F9B6E;font-color:white;border-radius:25px 25px 25px 25px;">Belanja Lagi Yuk</a>
        </div>
    
        <div class="cont">
        <div class="isitabel">
    <table  class="table table-responsive table-bordered border-success">
        <thead class="table  table-success">
            <tr>
            <th scope="col"><center>No</center></th>
            <th scope="col"><center>Gambar</center></th>
            <th scope="col"><center>Nama Produk</center></th>
            <th scope="col"><center>Jumlah</center></th>
            <th scope="col"><center>Harga</center></th>
            <th scope="col"><center>Aksi</center></th>
            </tr>
        </thead>

        <tbody>
        {{-- jdjd --}}
        <?php
            $no = 0;
        ?>
            @foreach($cart as $cr)
        <?php
            $no += 1;
        ?>
            <tr>  
                <th scope="row" style="line-height: 8rem; text-align: center">{{$no}}</th>
                <td style="line-height: 8rem;text-align: center"><center><img src="{{ asset('fotoproduk/' . $cr->produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 8rem; padding-right: 0;"><center></td>
                <td style="line-height: 8rem;text-align: center">{{$cr->produk->nama_produk}}</td>
                <td style="line-height: 8rem;text-align: center">{{$cr->jumlah}}
                </td>
                <td style="line-height: 8rem;text-align: center">Rp {{$cr->produk->harga * $cr->jumlah}}</td>
                <td style="line-height: 8rem;text-align: center"><center>
                    <a class="btn btn-danger" href="{{route('cart.delete', $cr->id)}}" onclick="return confirm('Are you sure?')" style="font-color:white;width:80%;border-radius:25px 25px 25px 25px;margin-top: 3rem">Hapus</a>
                </center></td>
            </tr>
            @endforeach
            <tr>
                <th colspan="4" style="line-height: 2rem;">Total Belanja</th>
                <th style="line-height: 2rem;text-align: center">Rp {{$tot}}</th>
                <th><center><a href="{{ route('transaksi.checkout') }}" class="btn btn-outline-light" name="hapus" style="background-color:#7F9B6E;font-color:white;width:80%;border-radius:25px 25px 25px 25px;">Checkout</a></center></th>
            </tr>
       
        </tbody>
    </table>
        </div>
        </div>
    </div>

@endsection

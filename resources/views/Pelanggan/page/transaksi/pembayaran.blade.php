@extends('Pelanggan.master')

@section('content')
    <div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #7F9B6E;border-radius: 5px; padding:10px;">
        <div style="margin-left: 30px">
        
            
            <form class="form form-horizontal" action="{{ route('transaksi.updateimg', $bayar->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
            <center><h4>Nomor Order : {{$bayar->no_order}}</h4></center>
            <h6 class="mt-2 pb-4"><b>Upload Bukti Pembayaran</b></h6>
            <img src="https://drive.google.com/uc?export=view&id=10Yp9_5oSnFaXsitEkZXCRaT6d64l28J2" width="90" height="24" alt="">
            <p class="mt-3"><b>Bank Mandiri</b></p>
            <br>
            <p>No Rekening </p>
            <p style="color: red">896 0819 1017 5601</p>
            <br>
            <p style="font-size:14px">Pembayaran diberi waktu sampai 10 menit</p>
            <p style="color: blue; font-size:14px;">No. Rekening atas nama Mark Lee</p>
            <div class="mb-3">
                <input type="file" class="form-control" value="{{old('foto')}}" name="foto" >
            </div>
            <div class="mb-2 text-center mt-3">
                <button class="btn btn-outline-light m-3" name="submit" type="submit" style="background-color:#7F9B6E;font-color:white;width:50%;border-radius:25px 25px 25px 25px">Submit</button>
            </div>
        </form>
        </div>
    </div>
@endsection
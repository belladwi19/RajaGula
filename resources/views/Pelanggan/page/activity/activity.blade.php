@extends('Pelanggan.master')

@section('content')
    <h4 style="font-family: 'Montserrat'; margin-left:120px; margin-top:50px;"><b>Status Pemesanan</b></h4>

    <div class="container mt-5 justify-content-center" id="cont">
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
            <th scope="col"><center>Status</center></th>
            </tr>
        </thead>

        <tbody>
            {{-- jdjd --}}
            <?php
                $no = 0;
            ?>
            @foreach($order as $or)

            <tr>
                <th colspan="4" style="line-height: 3rem">Nomer Order : {{$or->no_order}} <b style="color: red">( {{$or->status}} )</b></th>
                <th style="line-height: 3rem"><center>Total : Rp {{$or->total}} </center></th>
                @if ($or->status == 'On Prosess')
                    <td style="line-height: 3rem"><center><a class="btn btn-outline-light" href="{{ route('transaksi.uploadview', $or->id) }}" style="background-color:#7F9B6E;font-color:white;border-radius:25px 25px 25px 25px">Bayar Sekarang</a></center></td>
                @elseif($or->status == 'Confirmed')
                    <td style="line-height: 3rem"><center><a class="btn btn-outline-light" href="{{ url('generate-pdf', $or->no_order) }}" style="background-color:#7F9B6E;font-color:white;border-radius:25px 25px 25px 25px">Cetak Nota</a></center></td>
                @elseif($or->status == 'Barang Kirim')
                    <td style="line-height: 3rem"><center><a class="btn btn-outline-light" href="{{ route('activity.update', $or->id) }}" style="background-color:#7F9B6E;font-color:white;border-radius:25px 25px 25px 25px">Barang Sampai</a></center></td>
                @elseif($or->status == 'Sudah Upload Bukti Pembayaran')
                    <td style="line-height: 3rem"><center><div class="btn btn-outline-light" style="background-color:#7F9B6E;font-color:white;border-radius:25px 25px 25px 25px">Waiting List</div></center></td>
                @elseif($or->status == 'Selesai')
                    <td style="line-height: 3rem"><center><a href="{{ route('review.index', $or->id) }}" class="btn btn-outline-light" style="background-color:#7F9B6E;font-color:white;border-radius:25px 25px 25px 25px">Review Product</a>
                    <a class="btn btn-outline-light" href="{{ url('generate-pdf', $or->no_order) }}" style="background-color:#7F9B6E;font-color:white;border-radius:25px 25px 25px 25px">Cetak Nota</a></center></td>
                @endif
            </tr>
            
            @foreach($trans as $ts)
                @if($ts -> no_order == $or -> no_order)
                <?php
                    $no += 1;
                ?>
                    <tr>
                        <th scope="row" style="line-height: 8rem; text-align: center">{{$no}}</th>
                        <td style="line-height: 8rem;text-align: center"><center><img src="{{ asset('fotoproduk/' . $ts->produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 8rem; padding-right: 0;"><center></td>
                        <td style="line-height: 8rem;text-align: center">{{$ts->produk->nama_produk}}</td>
                        <td style="line-height: 8rem;text-align: center">{{$ts->jumlah}}</td>
                        <td style="line-height: 8rem;text-align: center">Rp {{$ts->produk->harga * $ts->jumlah}}</td>
                        <td style="line-height: 8rem;text-align: center">{{$ts->status}}</td>
                    </tr>
                    @endif
                @endforeach
            @endforeach
        </tbody>
    </table>
        </div>
        </div>
    </div>

@endsection
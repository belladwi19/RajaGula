@extends('Pelanggan.master')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@section('content')
    <div class="container mt-5">
      <h4 style="font-family: 'Montserrat'; margin-top:50px;"><b>Checkout</b></h4>
    </div>

    <div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #7F9B6E;border-radius: 5px; padding:10px;">
        <div style="margin-left: 30px">
            <h6 class="mt-2 pb-4"><b>Detail Penerima</b></h6>
            @foreach($user as $us)
                <p>{{$us->name}}</p>
                <p>{{$us->telepon}}</p>
                <p>{{$us->alamat}}</p>
                <p class="pt-4" style="color: red; font-size:12px">*Pengiriman menggunakan jasa JNE</p>
            @endforeach
        </div>
    </div>

    <div class="container mt-4" style="padding:10px;">
        <div>
            <h5 class="mt-2 pb-4" style="font-family: 'Montserrat';"><b>Detail Barang</b></h5>
        </div>
        <div class="isitabel">
            <table  class="table table-responsive table-bordered border-success">
                <thead class="table table-success">
                    <tr>
                    <th scope="col"><center>No</center></th>
                    <th scope="col"><center>Gambar</center></th>
                    <th scope="col"><center>Nama Produk</center></th>
                    <th scope="col"><center>Jumlah</center></th>
                    <th scope="col"><center>Harga</center></th>
                    </tr>
                </thead>
        
                <tbody>
                {{-- jdjd --}}
                <?php
                    $no = 0;
                ?>
                
                    @foreach($trans as $ts)
                        <?php
                            $no += 1;
                        ?>
                        <form class="form form-horizontal" action="{{ route('transaksi.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <tr>
                                
                                <th scope="row" style="line-height: 8rem; text-align: center">{{$no}}</th>
                                <td style="line-height: 8rem;text-align: center"><center><img src="{{ asset('fotoproduk/' . $ts->produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 8rem; padding-right: 0;"><center></td>
                                <td style="line-height: 8rem;text-align: center">{{$ts->produk->nama_produk}}</td>
                                <td style="line-height: 8rem;text-align: center"><input class="form-control" type="hidden" name="jumlah" value="{{$ts->jumlah}}"></input>{{$ts->jumlah}}</td>
                                <td style="line-height: 8rem;text-align: center">Rp {{$ts->produk->harga * $ts->jumlah}}</td>
                            </tr>
                        @endforeach
                    
                    <tr>
                        <th colspan="4">Sub Total</th>
                        <th style="text-align: center">Rp {{$tot}}</th>
                    </tr>
                
                </tbody>
            </table>

            <div class="row">
                <div class="col-lg-4">
                    <h3 style="font-family: 'Montserrat'; margin-top:50px;"><b>Total Pembayaran</b></h3>
                </div>
                <div class="col-lg-8" style="font-family: 'Montserrat'; margin-top:8rem;">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5><b>Sub Total Pembelanjaan : </b></h5><br>
                            <h5><b>Biaya Ongkir : </b></h5><br>
                            <h4><b>Total Pembayaran : </b></h4>
                        </div>
                        <div class="col-lg-6" style="text-align: right; padding-right: 8%">
                            <h5><b>Rp {{$tot}} </b></h5><br>
                            <h5><b>Rp 15000</b></h5><br>
                            <h4><b>Rp {{$tot+15000}}  </b></h4>
                            <input type="hidden" name="total" value="{{$tot+15000}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2" style="margin-top: 30px;">
				<button class="btn" type="submit" style="background-color:#7F9B6E;padding:10px;font-size:20px;color:white;border-radius:25px 25px 25px 25px">Bayar Sekarang</button>
			</div>
            

            </form>
            
        </div>
    </div>

    
@endsection
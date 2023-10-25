<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nota</title>
    <style>
    table, th, td {

        line-height: 2rem;
    }
</style>
</head>
<body>

	<center><h1>NOTA PEMBELIAN </h1></center>
	<hr>
    
    @foreach($order as $o)
    <h4>Nama Pembeli : {{ $o->user->name }}</h4>
	<h4>Tanggal Pembelian : {{ $o->created_at }}</h4>
    <h4>Nomer Orderan : {{ $o->no_order }}</h4>
    @endforeach

	<hr>
	<h3>Detail Pemesanan</h3>
    
	<table style="width:100%;border:1px solid black;border-collapse: collapse; text-align: center;">

        
		  <thead>
		    <tr>
		      <th>No</th>
		      <th>Nama Produk</th>
		      <th>Jumlah</th>
		      <th>Harga</th>
		      <th>Subtotal</th>
		    </tr>
		  </thead>
		  <tbody>
          <?php
            $no = 0;
        ?>
          @foreach($trans as $a)
          <?php
            $no += 1;
        ?>
		    <tr>
		      <th>{{$no}}</th>
		      <td>{{$a->produk->nama_produk}}</td>
		      <td>{{$a->jumlah}}</td>
              <td>Rp {{$a->produk->harga}}</td>
              <td>Rp {{$a->produk->harga*$a->jumlah}}</td>
		    </tr>
            @endforeach
		  </tbody>
	</table>
    

	<h3>Detail Pembayaran</h3>
    
    @foreach($order as $o)
    <table style="width:100%;">
        <tr>
            <th style="text-align: left;">Sub Total Pembelanjaan </th>
            <td style="text-align: right;padding-right: 50px">Rp {{$o->total}}</td>
        </tr>
        <tr>
            <th style="text-align: left;">Ongkos Kirim</th>
            <td style="text-align: right;padding-right: 50px">Rp {{$o->ongkir}}</td>
        </tr>
        
        <tr>
            <th style="text-align: left;border-top: 1px solid black"><h2>Total Pembayaran</h2></th>
            <td style="text-align: right;padding-right: 50px;border-top: 1px solid black"><h2><b>Rp {{$o->total+$o->ongkir}}</b></h2></td>
        </tr>
    </table>
    @endforeach
</body>
</html>
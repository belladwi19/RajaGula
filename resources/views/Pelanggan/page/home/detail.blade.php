@extends('Pelanggan.master')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style>
.img-wrapper {
    display: inline-block;
    overflow: hidden;
}

.img-wrapper img {
    -webkit-transition: all .2s ease;
    -moz-transition: all .2s ease;
    -ms-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease;
    vertical-align: middle;
}

.img-wrapper img:hover {
    -webkit-transform:scale(1.5); /* Safari and Chrome */
    -moz-transform:scale(1.5); /* Firefox */
    -ms-transform:scale(1.5); /* IE 9 */
    -o-transform:scale(1.5); /* Opera */
    transform:scale(1.5);
}
</style>

@section('content')

    <div class="container mt-5">
      <h4 style="font-family: 'Montserrat'; margin-top:50px;"><b>Detail Produk</b></h4>
    </div>
    <div class="container mt-5">
        <div class="row g-0">
            <div class="col-md-4  ">
                <div class="img-wrapper" style="width: 80%">
                    <img
                        src="{{ asset('fotoproduk/' . $produk->foto_produk) }}"
                        alt="Sample photo"
                        class="img-fluid "
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                    />
                </div>
            </div>
            <div class="col-md-8">
                
                    <h3><b>{{$produk->nama_produk}}</b></h3>
                    <h5 style="color:red">Rp {{$produk->harga}}</h5>
                    <h6 style="margin-top: 5%"><b>Deskripsi Produk :</b></h6>
                    <p>{{$produk->detail_produk}}</p>
                    <h6 style="margin-top: 5%;margin-bottom: 2%"><b>Kuantitas :</b></h6>
                <form class="form form-horizontal" action="{{ route('cart.create', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="d-flex">
                                <button type="button" id="sub" class="sub btn btn-link px-2"><i class="fa fa-minus"></i></button>
                                <input type="number" id="jumlah" name="jumlah" value="1" min="1" max="100"  class="form-control text-center"/>
                                <button type="button" id="add" class="add btn btn-link px-2"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <p style="margin-top: 1%">Tersedia : <b>{{$produk->stok_produk}}</b></p>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-danger alert-block" style="margin-top: 10px">   
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                    </div>
                    <div class="pb-4">
                        <a href="{{route('favorit.create', $produk->id)}}" class="btn btn-outline-light md-2" style="background-color:#7F9B6E; border-radius:25px 25px 25px 25px; height: 40px; width:10%;"> <i class="fa fa-heart" size:9x aria-hidden="true" style="line-height: 30px"></i></a>
                        <button type="submit" class="btn btn-outline-light m-3 md-2" name="cart" style="background-color:#7F9B6E; font-color:white; width:50%; border-radius:25px 25px 25px 25px">Masukkan Keranjang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h5 style="font-family: 'Montserrat';" class="text-center"><b>Review</b></h5>
    </div>
    @foreach($review as $rev)
        <div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #7F9B6E;border-radius: 5px;">
            <p class="mt-3"> <img src="{{ asset('fotouser/' . $rev->user->foto) }}" width="50" height="50" alt="" style="margin-right: 2%; border-radius: 25px;" ><b>{{$rev->user->name}}</b></p>
            <p>{{$rev->komentar}}</p>
            <p style="text-align: right; color: #b3b3b3">{{date('d-m-Y', strtotime($rev->created_at));}}</p>
        </div>
    @endforeach


    <script>
	
    $('.add').click(function () {
        
        $(this).prev().val(+$(this).prev().val() + 1);
        
    });
    $('.sub').click(function () {
            if ($(this).next().val() > 1) {
            $(this).next().val(+$(this).next().val() - 1);
            }
    });
    
	</script>
@endsection
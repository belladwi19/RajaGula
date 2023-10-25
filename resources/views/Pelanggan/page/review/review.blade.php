@extends('Pelanggan.master')

@section('content')
    <div class="container mt-5">
        <h4 style="font-family: 'Montserrat'; margin-top:50px;"><b>Review Produk</b></h4>
    </div>
    <div class="container mt-5">

   
        <?php 
            $count=1;
        ;?>

        @foreach($trans as $ts)
        <form class="form form-horizontal" action="{{ route('review.create', $ts->produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="no_order" value="{{$ts->no_order}}" id="no_order">
        <div class="row g-0" style="margin-bottom: 50px">
            <div class="col-md-4  ">
                <div class="img-wrapper" style="width: 80%">
                    <img
                        src="{{ asset('fotoproduk/' . $ts->produk->foto_produk) }}"
                        alt="Sample photo"
                        class="img-fluid "
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                    />
                </div>
            </div>
            <div class="col-md-8">
                
                <h3><b>{{$ts->produk->nama_produk}}</b></h3>
                <input type="hidden" name="produk[{{$count}}]" value="{{$ts->produk->id}}" id="produk">
                
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Review Produk</label>
                        <textarea class="form-control" id="review" name="review[{{$count}}]" rows="5" value="{{old('review')}}"></textarea>
                    </div>

            </div>
        </div>
        <?php $count++; ?>
        @endforeach
        <div class="d-grid gap-2" style=" margin-top: 30px;margin-bottom:30px;">
            <button  class="btn btn-outline-light" name="hapus" style="background-color:#7F9B6E;font-color:white;border-radius:25px 25px 25px 25px;">Submit Review</a>
        </div>
        </form>
    </div>

@endsection
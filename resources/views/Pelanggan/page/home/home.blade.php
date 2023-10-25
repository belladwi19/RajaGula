@extends('Pelanggan.master')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
          $("#baru").click(function(){
            $("#produkbaru").fadeIn();
            $("#produkmurah").hide();
            $("#produkurut").hide();
            $("#produkasli").hide();
          });

          $("#harga").click(function(){
            $("#produkbaru").hide();
            $("#produkmurah").fadeIn();
            $("#produkurut").hide();
            $("#produkasli").hide();
          });

          $("#produk").click(function(){
            $("#produkbaru").hide();
            $("#produkmurah").hide();
            $("#produkurut").fadeIn();
            $("#produkasli").hide();
          });
        });

    </script>
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-danger alert-block" style="margin-top: 10px">   
            <strong>{{ $message }}</strong>
        </div>
    @endif
        <div>
            <img src="https://drive.google.com/uc?export=view&id=141hk3aox_grX3FWYaGFZU_HVKNE2qrPp" alt="banner" width="100%">
        </div>
        <div class="container">
            <div class="row pt-3">
                @foreach($produk as $pr)
                <div class="col-lg-3 justify-content-center pt-5">
                    <form>
                            <div class="card" style="width: 15rem; margin-bottom:20px">
                                <img src="{{ asset('fotoproduk/' . $pr->foto_produk) }}" class="card-img-top" height="200px">
                                <div class="card-body">
                                    <a href="{{route('home.view', $pr->id)}}" style="text-decoration: none; color: black;">
                                        <h5 class="card-title">{{$pr->nama_produk}}</h5>
                                    </a>
                                    <p class="card-text" style="color:red">Rp {{$pr->harga}}</p>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('home.view', $pr->id)}}" class="btn btn-outline-light" style="background-color:#7F9B6E;font-color:white;width:50%;border-radius:25px 25px 25px 25px" type="submit" name="submit"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px"></i> Beli</a>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
                @endforeach
                
            </div>
            <div class="pt-5">
                <img src="https://drive.google.com/uc?export=view&id=1tz3TASd2M3Jpu_m_t7G6dB7zFDPfMynr" alt="banner" width="100%">
            </div>
            <div class="row">
                <div class="col-md pt-5">
                    <h5>Urutkan :</h5>
                    <form>
                        <div class="form-check" data-filter=".baru" id='baru'>
                            <input class="form-check-input"  type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1" >
                                Produk Terbaru 
                            </label>
                        </div>
                        <div class="form-check" data-filter=".harga" id='harga'>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2" >
                                Harga Terendah - Harga Tertinggi
                            </label>
                        </div>
                        <div class="form-check" data-filter=".produk" id='produk'>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3" >
                                Produk A - Z
                            </label>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="row " id="produkasli">
                    @foreach($produk as $pr)
                        <div class="col-md pt-5">
                            <form>
                                <div class="card" style="width: 15rem; margin-bottom:20px">
                                    <img src="{{ asset('fotoproduk/' . $pr->foto_produk) }}" class="card-img-top" height="200px">
                                    <div class="card-body">
                                        <a href="{{route('home.view', $pr->id)}}" style="text-decoration: none; color: black;">
                                            <h5 class="card-title">{{$pr->nama_produk}}</h5>
                                        </a>
                                        <p class="card-text" style="color:red">Rp {{$pr->harga}}</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('home.view', $pr->id)}}" class="btn btn-outline-light" style="background-color:#7F9B6E;font-color:white;width:50%;border-radius:25px 25px 25px 25px" type="submit" name="submit" ><i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px"></i> Beli</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    </div>
                    <div class="row " id="produkbaru" style="display:none;">
                    @foreach($produk2 as $pr)
                        <div class="col-md pt-5">
                            <form>
                                <div class="card" style="width: 15rem; margin-bottom:20px">
                                    <img src="{{ asset('fotoproduk/' . $pr->foto_produk) }}" class="card-img-top" height="200px">
                                    <div class="card-body">
                                        <a href="{{route('home.view', $pr->id)}}" style="text-decoration: none; color: black;">
                                            <h5 class="card-title">{{$pr->nama_produk}}</h5>
                                        </a>
                                        <p class="card-text" style="color:red">Rp {{$pr->harga}}</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('home.view', $pr->id)}}" class="btn btn-outline-light" style="background-color:#7F9B6E;font-color:white;width:50%;border-radius:25px 25px 25px 25px" type="submit" name="submit" ><i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px"></i> Beli</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    </div>

                    <div class="row " id="produkmurah" style="display:none;">
                    @foreach($produk3 as $pr)
                        <div class="col-md pt-5">
                            <form>
                                <div class="card" style="width: 15rem; margin-bottom:20px">
                                    <img src="{{ asset('fotoproduk/' . $pr->foto_produk) }}" class="card-img-top" height="200px">
                                    <div class="card-body">
                                        <a href="{{route('home.view', $pr->id)}}" style="text-decoration: none; color: black;">
                                            <h5 class="card-title">{{$pr->nama_produk}}</h5>
                                        </a>
                                        <p class="card-text" style="color:red">Rp {{$pr->harga}}</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('home.view', $pr->id)}}" class="btn btn-outline-light" style="background-color:#7F9B6E;font-color:white;width:50%;border-radius:25px 25px 25px 25px" type="submit" name="submit" ><i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px"></i> Beli</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    </div>

                    <div class="row " id="produkurut" style="display:none;">
                    @foreach($produk4 as $pr)
                        <div class="col-md pt-5">
                            <form>
                                <div class="card" style="width: 15rem; margin-bottom:20px">
                                    <img src="{{ asset('fotoproduk/' . $pr->foto_produk) }}" class="card-img-top" height="200px">
                                    <div class="card-body">
                                        <a href="{{route('home.view', $pr->id)}}" style="text-decoration: none; color: black;">
                                            <h5 class="card-title">{{$pr->nama_produk}}</h5>
                                        </a>
                                        <p class="card-text" style="color:red">Rp {{$pr->harga}}</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('home.view', $pr->id)}}" class="btn btn-outline-light" style="background-color:#7F9B6E;font-color:white;width:50%;border-radius:25px 25px 25px 25px" type="submit" name="submit" ><i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px"></i> Beli</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

@endsection
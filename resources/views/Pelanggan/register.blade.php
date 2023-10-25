<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registrasi - RajaGula</title>

    <style>
        
    </style>
  </head>
  <body>

    <nav class="navbar center navbar-expand-sm navbar-light bg-light navbar-fixed" >
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item" >
                        <a class="navbar-brand mx-100" href="#">
                            <img src="{{asset('logo.png')}}" width="200" height="60" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100 mt-5">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5" style="font-family: 'Montserrat'; color: #5e8148; "><b>Daftar</b></h2>
  
                <form action="{{url('proses_registerpelanggan')}}" method="POST" id="logForm">
                {{ csrf_field() }}
  
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Nama</label>
                    <input class="form-control py-3" id="inputNameAddress" name="name" type="text" placeholder="Masukkan Nama"/>
                  </div>
  
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Email</label>
                    <input class="form-control py-3" id="inputEmailAddress" name="email" type="email" placeholder="Masukkan Email"/>
                  </div>
  
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input class="form-control py-3" id="inputPasswordAddress" name="password" type="password" placeholder="Masukkan Password"/>
                  </div>
  
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">No Telepon</label>
                    <input class="form-control py-3" id="inputTeleponAddress" name="telepon" type="number" placeholder="Masukkan Telepon"/>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="3" class="form-control py-3" ></textarea>
                  </div>

                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
  
  
                  <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-light" name="checkout" type="submit" style="background-color:#7F9B6E;font-color:white;width:100%;border-radius:25px 25px 25px 25px; font-size:18px"><b>Daftar</b></button>
                  </div>
  
                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{route('loginpelanggan')}}" class="fw-bold text-body"><u>Login here</u></a></p>
  
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    <br>

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted" style="margin-top: 120px; font-family: 'Montserrat';">
    <!-- Section: Social media -->
    <!-- Section: Links  -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="background-color: #C7E7B4;">
        <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-4 ">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
                <a class="navbar-brand mx-100" href="#">
                    <img src="{{asset('logo.png')}}" width="200" height="60" alt="">
                </a>
            </h6>
            <p>
                Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura, Kec. Dayeuhkolot, Kota Bandung, Jawa Barat 40257
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 ">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Ikuti Kami
            </h6>
            <p>
                <i class="fa fa-instagram" aria-hidden="true" style="margin-right: 20px"></i><a href="#!" class="text-reset" style="text-decoration:none;">Instagram</a>
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 ">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Hubungi Kami
            </h6>
            <p>
            <i class="fa fa-whatsapp" aria-hidden="true" style="margin-right: 20px"></i><a href="#!" class="text-reset" style="text-decoration:none;">Whatsapp</a>
            </p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: #C7E7B4;">
        © 2022 Copyright: <b>Kelompok 4</b>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


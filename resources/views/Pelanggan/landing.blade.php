<!doctype html>
<html lang="{{ str_replace('_','-',app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Landing Page</title>
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

        <div class="container-fluid">
            <div class="row d-flex justify-content-center pt-5">
                <div class="col-lg-4 col-md-12 m-auto">
                    <h5 style="text-align:center">Gula berkualitas tinggi, karena Raja Gula Rajanya para gula!</h5>
                    <div class="d-flex justify-content-center pt-4">
                        <a href="{{ route('home.index') }}" class="btn btn-outline-light" style="background-color:#7F9B6E;width:50%;border-radius:15px 15px 15px 15px" >AYO BELANJA</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="https://drive.google.com/uc?export=view&id=14aEPmRjwcti8jyBuhv6sEnR1rvFDIjys" style="width:70%;margin-left:100px;">
                </div>
            </div>
            <div class="row d-flex justify-content-center text-center pt-5 mt-4">
                <h2>ABOUT</h2>
                <div class="col-md-7 pt-4">
                    <p>Raja Gula merupakan sebuah e-commerce dibawah PT Pabrik Gula Rajawali I yang menjual produk berupa gula olahan maupun gula siap. </p>
                </div>
            <div>
            <div class="row pt-5 mt-4">
                <div class="col-5">
                    <div class="d-flex justify-content-center text-center" style="padding: 50px;background-color:#E2FDD3;width:500px;height:630px;border-radius:15px 15px 15px 15px">
                        <h3 class="m-auto">APA KATA MEREKA TENTANG KAMI ?</h3>
                    </div>
                </div>
                <div class="col-7 pt-4">
                    <div class="row">
                        <div class="col" style="text-align:right">
                            <img src="https://drive.google.com/uc?export=view&id=1WKXxH__U44EpkC_M8_3F6aauvaTiYS9z" style="width:60px">
                        </div>
                        <div class="col" style="text-align:left">
                            <p><b>Revya Quentya H</b><p>
                            <p style="font-size:13px">Ibu Rumah Tangga<p>
                            <p>Beli produk gula disini pokoknya mudah banget, alurnya mudah, pengiriman cepat dan gulanya juga mantul!<p>
                        </div>
                    </div>
                    <hr style="height:5px;color:green;width:64%;margin-left:286px">
                    <div class="row">
                        <div class="col" style="text-align:right">
                            <img src="https://drive.google.com/uc?export=view&id=12hVTLjYdr6qFaUeW5kQ2zx3Dbm67rviW" style="width:60px">
                        </div>
                        <div class="col" style="text-align:left">
                            <p><b>Thomas Sangster</b><p>
                            <p style="font-size:13px">Pemilik Toko Kelontong<p>
                            <p>Kalau soal mau mengisi stok di toko, emang gak salah kalau beli dari sini. Stoknya gaakan abis abis, ready selalu.<p>
                        </div>
                    </div>
                    <hr style="height:5px;color:green;width:64%;margin-left:286px">
                    <div class="row">
                        <div class="col" style="text-align:right">
                            <img src="https://drive.google.com/uc?export=view&id=17NGfdC8Sv9VY8s4a2EpvAvZpNaY4koAI" style="width:60px">
                        </div>
                        <div class="col" style="text-align:left">
                            <p><b>Chaterina H</b><p>
                            <p style="font-size:13px">Mahasiswa<p>
                            <p>Semenjak pandemi anak saya bilang dia kesulitan mencari materi belajar, teman diskusi, namun platform ini membantu anak saya<p>
                        </div>
                    </div>
                    <hr style="height:5px;color:green;width:64%;margin-left:286px">
                </div>
            <div>
        </div>

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
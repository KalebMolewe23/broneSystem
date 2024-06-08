<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - BRONE</title>
    <link rel="icon" href="{{ asset('assets/image/icon.png') }}" type="image/x-icon">

    <!-- css style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    
    <!-- bootstrap style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- boxicons style -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="#"><strong>BRONE</strong> <img src="{{ asset('assets/image/icon.png') }}" style="width:50px"></a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">BRONE</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home"><strong>Home</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang"><strong>Tentang</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#informasi"><strong>Informasi</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#layanan"><strong>Layanan</strong></a>
                </li>
            </ul>
        </div>
        </div>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    </nav>

    <!-- header content -->
    <section id="home">
        <div class="container">
            <div class="slide">

                <div class="item" style="background-image: url('{{ asset('assets/image/header/g1.jpg') }}'); background-size: cover;">
                    <div class="content">
                        <div class="name">Bhrone Robot</div>
                        <div class="des">Lorem ipsum dolor, sit anet consectetur adipisicing elit. Ab, eum!</div>
                        <button>Lihat Selengkapnya</button>
                    </div>
                </div>
                <div class="item" style="background-image: url('{{ asset('assets/image/header/g1.jpg') }}')">
                    <div class="content">
                        <div class="name">Bhrone Robot</div>
                        <div class="des">Lorem ipsum dolor, sit anet consectetur adipisicing elit. Ab, eum!</div>
                        <button>Lihat Selengkapnya</button>
                    </div>
                </div>
                <div class="item" style="background-image: url('{{ asset('assets/image/header/g2.jpg') }}')">
                    <div class="content">
                        <div class="name">Bhrone Robot</div>
                        <div class="des">Lorem ipsum dolor, sit anet consectetur adipisicing elit. Ab, eum!</div>
                        <button>Lihat Selengkapnya</button>
                    </div>
                </div>
                <div class="item" style="background-image: url('{{ asset('assets/image/header/g3.jpg') }}')">
                    <div class="content">
                        <div class="name">Bhrone Robot</div>
                        <div class="des">Lorem ipsum dolor, sit anet consectetur adipisicing elit. Ab, eum!</div>
                        <button>Lihat Selengkapnya</button>
                    </div>
                </div>
                <div class="item" style="background-image: url('{{ asset('assets/image/header/g4.jpg') }}')">
                    <div class="content">
                        <div class="name">Bhrone Robot</div>
                        <div class="des">Lorem ipsum dolor, sit anet consectetur adipisicing elit. Ab, eum!</div>
                        <button>Lihat Selengkapnya</button>
                    </div>
                </div>

            </div>

            <div class="button">
                <button class="prev"><i class='bx bx-left-arrow-alt'></i></button>
                <button class="next"><i class='bx bx-right-arrow-alt'></i></button>
            </div>
        </div>
    </section>

    <!-- menu 2 -->
    <section class="section-home" style="background-color:#222F3E">
        <div class="row">
            <div class="col">
                <div class="icon">
                    <center>
                        <i class='bx bx-home' style='font-size: 40px; color: white;'></i><br>
                        Home         
                    </center>
                </div>
            </div>
            <div class="col">
                <div class="icon">
                    <center>
                    <i class='bx bx-cog' style='font-size: 40px; color: white;'></i><br>
                        Tentang         
                    </center>
                </div>
            </div>
            <div class="col">
                <div class="icon">
                    <center>
                    <i class='bx bxs-info-circle' style='font-size: 40px; color: white;'></i><br>
                        Informasi         
                    </center>
                </div>
            </div>
            <div class="col">
                <div class="icon">
                    <center>
                    <i class='bx bxs-user-voice' style='font-size: 40px; color: white;'></i></i><br>
                        Layanan         
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section style="text-align: center;" id="tentang">
        <h4 class="text-center">Tentang <i class='bx bx-cog' style='font-size: 20px; color: black'></i></h4>
        <br><br>
        <a href="" class="signup-button">Sejarah/Profil</a><br><br><br>
        <a href="" class="login-button">Visi, Misi, dan Tujuan</a><br><br><br>
        <div class="row">
            <h4 class="text-center">Lagi Viral <i class='bx bxs-hot' style='font-size: 20px; color: red'></i></h4>
            <h7>Lihat Artikel <i class='bx bx-right-arrow-circle'></i></h7><br><br> 
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/image/artikel/artikel1.jpg') }}" class="card-img-top" alt="Gambar 1">
                        <div class="card-body">
                            <p>04 Juni 2024</p>
                            <h5>Belajar dari Kegagalan, Perusahaan Happy Asmara Gandeng UB Kembangkan Inovasi</h5>
                            <a href=""><p style="font-size:13px">Baca Selengkapnya</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/image/artikel/artikel2.jpg') }}" class="card-img-top" alt="Gambar 2">
                        <div class="card-body">
                            <p>04 Juni 2024</p>
                            <h5>Dianka Harissandy, Mahasiswi Ilmu Komunikasi UB Top 10 MMBI</h5>
                            <a href=""><p style="font-size:13px">Baca Selengkapnya</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/image/artikel/artikel3.jpeg') }}" class="card-img-top" alt="Gambar 3">
                        <div class="card-body">
                            <p>04 Juni 2024</p>
                            <h5>Sejak 5 Tahun Belajar Tilawah, Mahasiswi FT Juara 1 Tartilil MTQ UB</h5>
                            <a href=""><p style="font-size:13px">Baca Selengkapnya</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url('{{ asset('assets/image/work.jpg') }}'); background-size: cover; background-position: center; min-height: 0vh;">
        <div class="row">
            <div class="col text-left">
                <h4 style="color:white">BRONE</h4><br>
                <h5 style="color:white">
                    Maskot UB bernama BRONE, yang merupakan singkatan dari <span style="color:orange">"Brawijaya Number One"</span>. BRONE memiliki konsep sebagai robot pendamping yang menjadi pemandu informasi. Dia mampu belajar dan terus berkembang.
                </h5><br><br>
                <p style="color:blue"><strong>"Building Up Noble Future"</strong></p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/image/icon.png') }}" style="width:220px">
            </div>
        </div>
    </section>

    <section id="informasi">
        
        <center>
        <h4 style="color:blue">Informasi <i class='bx bxs-info-circle' style='font-size: 20px; color: black;color:blue;'></i></h4><br>
        <a href="" class="signup-button">Berita</a>
        <a href="" class="login-button">Pengumuman</a>
        </center><br><br><br>   
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4 text-center">
                <div class="circle">
                    <p><strong>12</strong></p>
                    <p>February</p>
                    <p>2024</p>
                </div>
            </div>
            <div class="col-md-4 text-left">
                <a href="" class="login-button">Berita</a><br><br>
                <h5>Cek Fakta : Cek Fakta : Apa Weh Terserah Bebas Asal Sopan!</h5><br>
                <a href=""><h7>Baca Selengkapnya</h7></a>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/image/contoh1.jpg') }}" style="width:100px">
            </div>
        </div>
        <hr>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4 text-center">
                <div class="circle">
                    <p><strong>12</strong></p>
                    <p>February</p>
                    <p>2024</p>
                </div>
            </div>
            <div class="col-md-4 text-left">
                <a href="" class="login-button">Berita</a><br><br>
                <h5>Cek Fakta : Cek Fakta : Apa Weh Terserah Bebas Asal Sopan!</h5><br>
                <a href=""><h7>Baca Selengkapnya</h7></a>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/image/contoh1.jpg') }}" style="width:100px">
            </div>
        </div>
        <hr>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4 text-center">
                <div class="circle">
                    <p><strong>12</strong></p>
                    <p>February</p>
                    <p>2024</p>
                </div>
            </div>
            <div class="col-md-4 text-left">
                <a href="" class="login-button">Berita</a><br><br>
                <h5>Cek Fakta : Cek Fakta : Apa Weh Terserah Bebas Asal Sopan!</h5><br>
                <a href=""><h7>Baca Selengkapnya</h7></a>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/image/contoh1.jpg') }}" style="width:100px">
            </div>
        </div>
        <hr>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4 text-center">
                <div class="circle">
                    <p><strong>12</strong></p>
                    <p>February</p>
                    <p>2024</p>
                </div>
            </div>
            <div class="col-md-4 text-left">
                <a href="" class="login-button">Berita</a><br><br>
                <h5>Cek Fakta : Cek Fakta : Apa Weh Terserah Bebas Asal Sopan!</h5><br>
                <a href=""><h7>Baca Selengkapnya</h7></a>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/image/contoh1.jpg') }}" style="width:100px">
            </div>
        </div>
        <hr><br><br>
        <center>
            <p>Lihat Semua Artikel . . .</p>
        </center>

    </section>

    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
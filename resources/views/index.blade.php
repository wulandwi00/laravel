<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantai Ora</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- slick -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">


</head>
<body>
    

    <!-- header -->
    <section class="header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="navbar-icon">
                    <div class="media">
                        
                        <img src="{{ asset('img/') }}" alt="" class="mr-2" alt="..." class="img-fluid" style="width: 60px;">
                        <div class="media-body mt-3">
                          <h5>Pantai Ora<br><span>MALUKU</span></h5>
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mt-3">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/index') }}">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pariwisata') }}">pariwisata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/objek') }}">objek</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="hero">
                <h2>Pantai Ora Maluku </h2>
                <p>Merupakan salah satu pantai di indonesia yang menyajikan keindahan alam sekitar dan sekaligus keindahan alam bawah lautnya.</p>
            </div>
        </div>
    </section>


    <!-- discover -->
    <section class="discover" id="discover">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img src="{{ asset('img/22.jpg') }}" alt="" style="height: 300px; width: 1000pxpx;" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 desc">
                    <h2>Discover</h2>
                    <h3>Keindahan Pantai Ora</h3>
                    <p>Pantai Ora memiliki taman bawah laut yang sangat indah, pantai yang bersih dan air laut yang jernih,Pantai Ora adalah pasir yang putih bersih, air laut yang berwarna biru kehijauan dan jernih, serta kekayaan terumbu karang dan biota laut,Pantai Ora memang terkenal dengan keindahan bawah laut, bahkan saking indah banyak wisatawan menyebut Pantai Ora mirip dengan pantai yang ada di Maladewa.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="event bg-light" id="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 desc">
                    <h2>Perjalanan</h2>
                    <p>Dari kota Ambon, pintu menuju Pantai Ora adalah Pelabuhan Hulnara, Tulehu. Di pelabuhan ini terdapat ferry menuju Amahi dengan jadwal 2 (dua) kali pada setiap harinya. Tulehu – Amahai,Alternatif transportasi darat dari Pelabuhan Amahai menuju desa Saleman adalah melalui sewa kendaraan,Setelah mencapai pelabuhan Desa Saleman, perahu bermesin kecil sekitar 15 menit akan mengantarkan pengunjung menguak keindahan pantai Ora yang tersembunyi</p>
                   </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                    <div class="col-md-6 col-sm-12">
                            <img src="{{ asset('img/12.jpg') }}" alt="" style="height: 350px; width: 250px;" >
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img src="{{ asset('img/7a.jpg') }}" alt="" style="height: 350px; width: 250px;" >
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="discover" id="discover">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img src="{{ asset('img/4.jpg') }}" alt="" style="height: 300px; width: 1000pxpx;" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 desc">
                    <h2>Tiket</h2>
                    <p>pengelola pantai mewajibkan pengunjung membayar sejumlah uang untuk dapat masuk ke pantai. Namun itu tidak ada di pantai ini. Biaya tiket untuk masuk pun tanpa berbayar alias gratis. Selain tiket gratis, kelebihan lain Pantai ini buka 24 jam,Namun ada kompensasi dari bebas biaya masuk ini, yakni biaya transport yang relatif mahal.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- pantai -->
    <section class="pantai bg-light" id="pantai">
        <div class="container">
            <h2>Pantai lainnya</h2>
            <h3>pantai-pantai yang ada di indonesia</h3>
            <p>Tak hanya Pantai ora saja yang memiliki keindahan alam yang menajupkan <br>didawah ini termasuk pantai-pantai dengan keindahan alamnya yang ada di indonesia</p>

            <div class="slider-card">
                <div class="card mb-3">
                    <img src="{{ asset('img/17.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Pulau weh</h4>
                        <h5 class="price">Aceh</h5>
                        <div class="rat">
                          <a href="#">100 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('img/pink.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>pantai pink pulau komodo</h4>
                        <h5 class="price">Nusa Tenggata Timur</h5>
                        <div class="rat">
                           <a href="#">100 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('img/raja ampat.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Raja Ampat</h4>
                        <h5 class="price">Papua Barat</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('img/tomini.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Pantai Tomini Bay</h4>
                        <h5 class="price">Sulawesi Utara</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('img/18.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Pulau Morotai</h4>
                        <h5 class="price">Maluku utara</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('img/19.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Gili Trawangan</h4>
                        <h5 class="price">Nusa Tenggara Barat</h5>
                        <div class="rat">
                           <a href="#">100 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('img/20.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Pulau Belitung</h4>
                        <h5 class="price">Bangka Belitung</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('img/21.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Pantai Sawarna</h4>
                        <h5 class="price">Banten</h5>
                        <div class="rat">
                           <a href="#">100 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('img/22.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Pantai Nihiwatu</h4>
                        <h5 class="price">Nusa Tenggara Timur</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('img/23.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Karimun Jawa</h4>
                        <h5 class="price">Jawa Tengah</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('img/24.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Pantai 3 Warna</h4>
                        <h5 class="price">Malang,jawa timur</h5>
                        <div class="rat">
                           <a href="#">100 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- lokasi -->
    <section class="lokasi" id="lokasi">
        <div class="container">
            <h2>LOKASI </h2>
            <h3>PANTAI ORA</h3>
            <p>. Pantai yang berlokasi di ujung barat teluk Sawai ini berada di sebelah desa Saleman dan desa Sawai, di tepi hutan Taman Nasional Manusela.<br/>pulau Seram, kecamatan Seram Utara, Maluku Tengah, Maluku, Indonesia</p>
        </div>
    </section>


 <!-- parralax -->
    
        <div class="parralax">

            </div>



    <!-- footer -->
    <section class="footer" id="footer">
        <div class="container">
            <div class="media">
                <img src="" class="img-fluid">
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <p>Alamat : pulau Seram, kecamatan Seram Utara, Maluku Tengah, Maluku, Indonesia.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <p>Sen-min : 24 jam</p>
                </div>
                <div class="col-md-4 col-sm-12"><p>Kontak Informasi : <br> 12345678910</p></div>
            </div>
            <div class="copyright">
                <div class="icon text-center">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                </div>
                <div class="copyright-text text-center">
                    <p>2020-2021 Pantai Ora Maluku.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script type="text/javascript">
        $(".my-slider").slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]

        });
    </script>

    <script type="text/javascript">
        $(".slider-card").slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]

        });
    </script>


</body>
</html>
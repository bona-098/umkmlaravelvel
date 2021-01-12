<x-app-layout>
    <x-slot name="header"> 
    <h1 align="center">Selamat Datang di SI-UMKM</h1>
    </x-slot>
    <head>
	<title>Hyperlink CSS</title>
	<link rel="stylesheet" type="text/css" href="masster.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- <div class="container mx-auto"> -->
<main role="main">
        <!-- Carousel -->
        <!-- <<div class="d-inline-flex p-2 bd-highlight img-fluid mr-auto"> -->
	<!-- <div class="col-md-12 col-md-offset-6"> -->
  <div class="container w-100 h-50">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img class="first-slide d-block w-100" src="assets/slide1.jpeg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Toko Makmur Abadi</h1>
                <p>Menjual segala alat bangunan | Alamat Jl. Pembangunan No.51</p>
                <p><a href="https://chat.whatsapp.com/Ivd8jk3WkzeIa4mynurLec"><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" 
				data-whatever="@getbootstrap">Hubungi Penjual</button></a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide d-block w-100" src="assets/slide2.jpeg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Toko Tri Jaya</h1>
                <p>Menjual Pakaian dan Bahan Pakaian | Alamat jl. Sudirman</p>
                <p><a href="https://chat.whatsapp.com/Ivd8jk3WkzeIa4mynurLec"><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" 
                data-toggle="modal" data-whatever="@getbootstrap">Hubungi Penjual</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide d-block w-100" src="assets/slide3.jpeg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Toko Tri Jaya</h1>
                <p>Menjual oleh-oleh khas balikpapan | Alamat Gunung sari</p>
                <p><a href="https://chat.whatsapp.com/Ivd8jk3WkzeIa4mynurLec"><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" 
                data-toggle="modal" data-whatever="@getbootstrap">Hubungi Penjual</button></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- Carousel -->
    
    <!-- <figure class="figure">
        <img src="{{url('/assets/bantuan.jpeg.jpeg')}}" class="figure-img img-fluid rounded" alt="ini bantuan">
        <figcaption class="figure-caption">A caption for the above image.</figcaption>
    </figure> -->
	</div>
	</div>
</div>
</div>
</body>
</x-app-layout>
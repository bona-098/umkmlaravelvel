<x-app-layout>
    <x-slot name="header">
<html>
<head>
    <meta>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <meta>
</head>
<body>
    <td>
    <h1><p class="text-center">Silahkan Masukan Data UMKM anda Untuk diPromosikan</p></h1>
        <form action="{{route('pawb_store')}}"method="POST">
    </td>
    @csrf
    @csrf
    <div class="container">
        <div class="row text-center">
            <div class="col-6 text-right">
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <input type="text" name="jenis" class="form-control" id="jenis" aria-describedby="emailHelp">
                </div>
                
                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="contact">Kontak</label>
                    <input type="text" name="kontak" class="form-control" id="contact">
                </div>
                
                <!-- <div class="card my-2">
                    <div class="card-body">
                        <h5 class="card-title">
                        <a href="{{route}}">
                            {{ $pawb->titl}}
                        </h5>
                    </div>
                </div> -->
                <input button class="btn btn-primary" type="submit" value="Submit"></button>
                <input button class="btn btn-secondary" type="reset" value="reset"></button>
            </div>
        </div>  
        </form>
    </div>
	</div>
</body>
</html>
</x-slot>
</x-app-layout>
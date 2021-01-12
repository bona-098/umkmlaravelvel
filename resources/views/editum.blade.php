@extends('layout.master')
@section('title', 'Si-UMKM')
@section('content')
<html>
<head>
    <meta>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <meta>
</head>
<body>
    <td>
       
        <form method="POST" action="{{route('tumkm_update',$tuma->id)}}">
    </td>
    @csrf
    <h1><p class="text-center">Silahkan Ubah data UMKM yang benar</p></h1>

    <div class="container">
        <div class="row text-center">
            <div class="col-6 text-right">
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <input type="text"  value="{{$tuma->jenis}}" name="jenis" class="form-control" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" value="{{$tuma->nama}}" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" value="{{$tuma->alamat}}" name="alamat" id="alamat" rows="3"></textarea>
                </div>
            
                <div class="form-group">
                    <label for="contact">Kontak</label>
                    <input type="text" value="{{$tuma->kontak}}" name="kontak" class="form-control" id="contact">
                </div>
            
                    <input button class="btn btn-primary" type="submit" value="Submit"></button>
                    <input button class="btn btn-secondary" type="submit" value="Reset"></button>
            </div>
        </div>
        </table>
    </form> 
	</div>
</body>
</html>
@endsection
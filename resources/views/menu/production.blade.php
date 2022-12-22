@extends('main')
@section('content')
    {{-- <div class="d-flex flex-column mb-3">
        <div class="p-2"> --}}
    <div class="main-content d-flex flex-column">
        <header>
            <div class="">
                <div class="row ">
                    <div class="col-4 mt-4">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                {{-- <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li> --}}
                                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-4 d-flex justify-content-center mt-3">
                        <h2>Production Menu</h2>
                    </div>
                </div>
            </div>
        </header>
        {{-- </div> --}}
        {{-- <div class="p-2"> --}}

        <div class="row content">
            <div class="col-6 mt-4 prod-menu">
                {{-- <div class="wrapper"> --}}
                <div class="card">
                    <img src="{{ url('/img/melting.jpg') }}" alt="">
                    <div class="descriptions">
                        <h1>Melting</h1>
                        <p>

                        </p>
                        <button>
                            <i class="fab fa-youtube"></i>
                            Play trailer on YouTube
                        </button>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
            <div class="col-6 mt-4">
                {{-- <div class="card card-gambar-utama rounded"> --}}
                <div class="d-flex justify-content-center">
                    <img class="imgProduction mt-2 rounded" src="{{ url('/img/casting.jpg') }}" alt=""
                        srcset="">
                </div>
                {{-- </div> --}}
            </div>
            <div class="col-6 mt-4">
                {{-- <div class="card  card-gambar-utama rounded"> --}}
                <div class="d-flex justify-content-center">
                    <img class="imgProduction mt-2 rounded" src="{{ url('/img/machining.jpg') }}" alt=""
                        srcset="">
                </div>
            </div>
            {{-- </div> --}}
            <div class="col-6 mt-4">
                {{-- <div class="card  card-gambar-utama rounded"> --}}
                <div class="d-flex justify-content-center">
                    <img class="imgProduction mt-2" src="{{ url('/img/painting.jpg') }}" alt="" srcset="">
                </div>
            </div>
            {{-- </div> --}}
            <div class="col-6 mt-4 mb-4">
                {{-- <div class="card  card-gambar-utama"rounded-5> --}}
                <div class="d-flex justify-content-center">
                    <img class="imgProduction mt-2" src="{{ url('/img/assembling.jpg') }}" alt="" srcset="">
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    {{-- <div class="p-2"> --}}

    {{-- </div> --}}
@endsection

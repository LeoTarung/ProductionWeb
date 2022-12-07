@extends('main')
@section('content')
    {{-- <div class="d-flex flex-column mb-3">
        <div class="p-2"> --}}
    <div class="main-content d-flex flex-column">
        <header>
            <div class="">
                <div class="row">
                    <div class="col-6">
                        <h1>
                            {{ $title }}
                        </h1>
                    </div>
                    <div class="col-6 d-flex justify-content-end mt-3">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                {{-- <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li> --}}
                                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        {{-- </div> --}}
        {{-- <div class="p-2"> --}}

        <div class="row content">
            <div class="col-4 mt-4">
                <a href="#">
                    <div class="card card-gambar-utama rounded mb-3">
                        <div class="d-flex justify-content-center">
                            <img class="imgProduction mt-2 d-flex" src="{{ url('/img/melting.jpg') }}" alt=""
                                srcset="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4">
                <div class="card card-gambar-utama rounded">
                    <div class="d-flex justify-content-center">
                        <img class="imgProduction mt-2 rounded" src="{{ url('/img/machining.jpg') }}" alt=""
                            srcset="">
                    </div>
                </div>
            </div>
            <div class="col-4 mt-4">
                <div class="card  card-gambar-utama rounded">
                    <div class="d-flex justify-content-center">
                        <img class="imgProduction mt-2" src="{{ url('/img/casting.jpg') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="col-4 mt-4">
                <div class="card  card-gambar-utama rounded">
                    <div class="d-flex justify-content-center">
                        <img class="imgProduction mt-2" src="{{ url('/img/painting.jpg') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="col-4 mt-4">
                <div class="card  card-gambar-utama"rounded-5>
                    <div class="d-flex justify-content-center">
                        <img class="imgProduction mt-2" src="{{ url('/img/assembling.jpg') }}" alt=""
                            srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="p-2"> --}}
    @include('partial.footer')
    {{-- </div> --}}
@endsection

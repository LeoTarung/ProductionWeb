@extends('main')
@section('content')
    {{-- <div class="d-flex flex-column mb-3">
        <div class="p-2"> --}}
    <div class="main-content d-flex flex-column">
        <header>
            <div class="">
                <div class="row border-bottom">
                    <div class="col-4 mt-4">
                        <h2>Production Menu</h2>
                        {{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb"> --}}
                        {{-- <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li> --}}
                        {{-- <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </nav> --}}
                    </div>
                    <div class="col-4 d-flex justify-content-center mt-3">

                    </div>
                </div>
            </div>
        </header>
        {{-- </div> --}}
        {{-- <div class="p-2"> --}}

        <div class="row content mt-4">
            <div class="col-4 mt-4 prod-menu ">
                {{-- <div class="col-12 d-flex justify-content-center"> --}}
                {{-- <div class="wrapper"> --}}
                <a href="production/melting/">
                    <div class="card ms-5 ">
                        <img src="{{ url('/img/melting.jpg') }}" alt="">
                        <div class="descriptions text-center">
                            <div class="font-white font-desc  fs-2 "> MELTING </div>
                        </div>
                        {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4 prod-menu ">
                {{-- <div class="col-12 d-flex justify-content-center"> --}}
                {{-- <div class="wrapper"> --}}

                <div class="card ms-5 ">
                    <img src="{{ url('/img/casting.jpg') }}" alt="">
                    <div class="descriptions text-center">
                        <div class="font-white font-desc fs-2">CASTING</div>
                    </div>
                    {{-- </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
            <div class="col-4 mt-4 prod-menu ">
                {{-- <div class="col-12 d-flex justify-content-center"> --}}
                {{-- <div class="wrapper"> --}}

                <div class="card ms-5 ">
                    <img src="{{ url('/img/machining.jpg') }}" alt="">
                    <div class="descriptions text-center">
                        <div class="font-white font-desc fs-2">MACHINING</div>
                    </div>
                    {{-- </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="col-6 mt-4 prod-menu text-center">
                    {{-- <div class="col-12 d-flex justify-content-center"> --}}
                    {{-- <div class="wrapper"> --}}
                    <div class="card mx-auto">
                        <img src="{{ url('/img/painting.jpg') }}" alt="">
                        <div class="descriptions text-center">
                            <div class="font-white font-desc fs-2">PAINTING</div>
                        </div>
                        {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="col-6 mt-4 prod-menu  ">
                    {{-- <div class="col-12 d-flex justify-content-center"> --}}
                    {{-- <div class="wrapper"> --}}

                    <div class="card mx-auto">
                        <img src="{{ url('/img/assembling.jpg') }}" alt="">
                        <div class="descriptions text-center">
                            <div class="font-white font-desc fs-2">ASSEMBLING</div>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="p-2"> --}}

    {{-- </div> --}}
@endsection

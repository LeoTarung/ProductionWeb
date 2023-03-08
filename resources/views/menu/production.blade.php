@extends('main')
@section('content')
    <div class="main-content d-flex flex-column">

        <header>
            <div class="">
                <div class="row border-bottom">
                    <div class="col-4 mt-4">
                        <h2>Production Menu</h2>
                    </div>
                    <div class="col-4 d-flex justify-content-center mt-3">
                    </div>
                </div>
            </div>
        </header>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 prod-menu nopadding mt-2 px-1">
                <a href="production/melting/">
                    <div class="card text-center">
                        <img src="{{ url('/img/melting.jpg') }}" alt="">
                        <div class="descriptions text-center">
                            <div class="font-white font-desc fs-1">MELTING</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 prod-menu nopadding mt-2 px-1">
                <a href="production/casting">
                    <div class="card ">
                        <img src="{{ url('/img/casting.jpg') }}" alt="">
                        <div class="descriptions text-center">
                            <div class="font-white font-desc fs-2">CASTING</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 prod-menu nopadding mt-2 px-1">
                <a href="http://10.14.20.212:3333/">
                    <div class="card ">
                        <img src="{{ url('/img/machining.jpg') }}" alt="">
                        <div class="descriptions text-center">
                            <div class="font-white font-desc fs-2">MACHINING</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 prod-menu nopadding mt-2 px-1">
                <a href="">
                    <div class="card ">
                        <img src="{{ url('/img/painting.jpg') }}" alt="">
                        <div class="descriptions text-center">
                            <div class="font-white font-desc fs-2">PAINTING</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 prod-menu nopadding mt-2 px-1">
                <a href="">
                    <div class="card ">
                        <img src="{{ url('/img/assembling.jpg') }}" alt="">
                        <div class="descriptions text-center">
                            <div class="font-white font-desc fs-2">ASSEMBLING</div>
                        </div>
                    </div>
                </a>
            </div>
            {{-- <div class="col-12 col-md-6 col-lg-4 prod-menu nopadding mt-2 px-1">
                <a href="">
                    <div class="card ">
                        <img src="{{ url('/img/machining.jpg') }}" alt="">
                        <div class="descriptions text-center">
                            <div class="font-white font-desc fs-2">MACHINING</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 prod-menu nopadding mt-2 px-1">
                <a href="">
                    <div class="card ">
                        <img src="{{ url('/img/machining.jpg') }}" alt="">
                        <div class="descriptions text-center">
                            <div class="font-white font-desc fs-2">MACHINING</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 prod-menu nopadding mt-2 px-1">
                <a href="">
                    <div class="card ">
                        <img src="{{ url('/img/machining.jpg') }}" alt="">
                        <div class="descriptions text-center">
                            <div class="font-white font-desc fs-2">MACHINING</div>
                        </div>
                    </div>
                </a>
            </div> --}}
        </div>
    </div>
@endsection

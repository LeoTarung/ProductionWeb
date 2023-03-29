@extends('mainLHP')
@section('content')
    {{-- -------------------------------- CSS ------------------------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/gokil.css') }}">
    {{-- --------------------------------      ------------------------------ --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 mt-2">
                <div class="card card-left1 ms-2 shadow-sm">
                    <div class="row">
                        <div class="col-9 mt-2 ps-4 fw-bold fs-4 "> {{ $idCasting->nama_part }} </div>
                        <div class="col-3 d-flex align-items-center parent">
                            <div class="child fw-bold fs-4 pt-2 text-center align-items-center">
                                {{ $idCasting->mesincasting->cycle_time }}</div>
                        </div>
                    </div>
                </div>
                <div class="card card-left5 mt-3 ms-2 shadow-sm">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">TARGET<br><span class="fs-2">{{ $idCasting->target }}
                                part</span>
                        </div>
                    </div>
                </div>
                <div class="card card-left2 mt-3 ms-2 shadow-sm">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">TOTAL PRODUKSI <br><span class="fs-2">
                                <span class="" id="totalProduksi"></span>
                                part
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card card-left3 mt-3 ms-2 shadow-sm" onclick="getReject()">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">REJECTION <br><span class="fs-2">
                                <span class="" id="totalReject"></span>
                                part
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card card-left4 mt-3 ms-2 shadow-sm" onclick="getDowntime()">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">DOWNTIME<br><span
                                class="fs-2">{{ \Carbon\Carbon::parse($idCasting->total_downtime)->format('i') }} menit
                            </span>
                        </div>
                    </div>
                </div>
                {{-- <div class="card card-left6 mt-3 ms-2 shadow-sm">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">COVER L<br><span class="fs-2">3000
                                part</span>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-9 mb-2" id="reject">
                <div class="card main-card">
                    <div class="row row-card-i mt-3 ">
                        @for ($i = 0; $i < $jumlahReject; $i++)
                            <div class="col-3 mt-2">
                                <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                    <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[$i] }}')">
                                        <div class="card-inside1 float-start text-center">
                                            <div class="font-ci1" id="jenisReject{{ $i }}"></div>
                                        </div>

                                        <div class="card-inside2 float-end  d-flex align-items-center">
                                            <div class="font-ci2 ">{{ $rejectforView[$i] }}</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                {{-- <div class="card main-card" id="downtime">
                    <div class="row row-card-i">
                        @foreach ($downtime as $d)
                            <div class="col-3 mt-2">
                                <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                    <a onclick="ModalGambar()">
                                        <div class="card-inside1 float-start text-center">
                                            <div class="font-ci1" id="jenisReject"></div>
                                        </div>
                                        <div class="card-inside2 float-end  d-flex align-items-center">
                                            <div class="font-ci2 ">{{ $d->nama_downtime }}</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div> --}}
            </div>
            <div class="col-9 mb-2" id="downtime">
                <div class="card main-card">
                    <div class="warpper">
                        <input class="radio" id="one" name="group" type="radio" checked>
                        <input class="radio" id="two" name="group" type="radio">
                        <input class="radio" id="three" name="group" type="radio">
                        <input class="radio" id="four" name="group" type="radio">
                        <input class="radio" id="five" name="group" type="radio">
                        <div class="tabs">
                            <label class="tab" id="one-tab" for="one">Material</label>
                            <label class="tab" id="two-tab" for="two">Mesin</label>
                            <label class="tab" id="three-tab" for="three">Dies</label>
                            <label class="tab" id="four-tab" for="four">Proses</label>
                            <label class="tab" id="five-tab" for="five">Terencana</label>
                        </div>
                        <div class="panels">

                            <div class="panel" id="one-panel">
                                <div class="row row-card-i">
                                    @foreach ($downtime->where('kategori', 'material') as $d)
                                        <div class="col-3 mt-2">
                                            <div
                                                class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                                <a onclick="ModalGambar()">
                                                    <div class="card-inside1 float-start text-center">
                                                        <div class="font-ci1" id="jenisReject"></div>
                                                    </div>
                                                    <div class="card-inside2 float-end  d-flex align-items-center">
                                                        <div class="font-ci2 ">{{ $d->nama_downtime }}</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>


                            <div class="panel" id="two-panel">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="panel-title font-blue text-center">Daily Report Striko-2</div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end mb-3"> <a class="btn btn-primary"
                                            href="">Lihat Data</a>
                                    </div>
                                    <div class="chartdiv" id="chartdiv1"></div>
                                </div>
                            </div>

                            <div class="panel" id="three-panel">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="panel-title font-blue text-center">Daily Report Striko-3</div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end mb-3"> <a class="btn btn-primary"
                                            href="">Lihat Data</a>
                                    </div>
                                    <div class="chartdiv" id="chartdiv2"></div>
                                </div>

                            </div>

                            <div class="panel" id="four-panel">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="panel-title font-blue text-center">Daily Report Swif Asia</div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end mb-3"> <a class="btn btn-primary"
                                            href="{{ url('/production/melting/Swift_Asia') }}">Lihat Data</a>
                                    </div>
                                    <div class="chartdiv" id="chartdiv3"></div>
                                </div>
                            </div>
                            <div class="panel" id="five-panel">
                                <div class="row row-card-i">
                                    @foreach ($downtime->where('kategori', 'terplanning') as $d)
                                        <div class="col-3 mt-2">
                                            <div
                                                class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                                <a onclick="ModalGambar()">
                                                    <div class="card-inside1 float-start text-center">
                                                        <div class="font-ci1" id="jenisReject"></div>
                                                    </div>
                                                    <div class="card-inside2 float-end  d-flex align-items-center">
                                                        <div class="font-ci2 ">{{ $d->nama_downtime }}</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalGambar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="ModalGambarLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="page" class="p-2"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalDowntime" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="ModalGambarLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="page_downtime" class="p-2"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @php
        $reject = $idCasting->id;
    @endphp

    <script>
        let reject = document.getElementById('reject');
        let downtime = document.getElementById('downtime');
        downtime.hidden = true;

        function getDowntime(id) {
            reject.hidden = true;
            downtime.hidden = false;
        }

        function getReject(id) {
            reject.hidden = false;
            downtime.hidden = true;
        }

        $(function() {
            let ip_node = location.hostname;
            let socket_port = '1553';
            let socket = io(ip_node + ':' + socket_port);
            socket.on('connection');
            socket.on("levelMolten_settings", (data) => {
                //Define Urutan Mesin Casting
                let for_mc = {{ $mcfordata }} - 1;
                console.log(data[for_mc].total_ng);
                //Total Produksi
                let totalProduksi = data[for_mc].total_produksi;
                // let totalReject = data[for_mc].total_ng;
                document.getElementById("totalProduksi").innerHTML = totalProduksi;
                // document.getElementById("totalReject").innerHTML = totalReject;
            })
        });

        let id_lhp = {!! json_encode($reject) !!};

        function getTotalReject() {
            $.ajax({
                url: "/dtRjtcasting" + "/" + id_lhp,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    document.getElementById("totalReject").innerHTML = data[0];
                    for (let i = 1; i <= {{ $jumlahReject }}; i++) {
                        document.getElementById('jenisReject' + (i - 1)).innerHTML = data[i];
                    }
                },
                error: function() {
                    console.log('Error data sat mengambil total Reject');
                }
            });
        }

        $(document).ready(function() {
            setInterval(function() {
                getTotalReject();
            }, 3000);
        });
    </script>
@endsection

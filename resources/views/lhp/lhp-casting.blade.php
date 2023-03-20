@extends('mainLHP')
@section('content')
    {{-- -------------------------------- CSS  ------------------------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/gokil.css') }}">
    {{-- --------------------------------      ------------------------------ --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 mt-2">
                <div class="card card-left1 ms-2 shadow-sm">
                    <div class="row">
                        {{-- <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">COVER L K1ZG <br><span class="fs-2">3000 part</span>
                        </div> --}}
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
                <div class="card card-left3 mt-3 ms-2 shadow-sm">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">REJECTION <br><span
                                class="fs-2">{{ $idCasting->total_ng }}
                                part</span>
                        </div>
                    </div>
                </div>
                <div class="card card-left4 mt-3 ms-2 shadow-sm">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">DOWNTIME<br><span
                                class="fs-2">{{ $idCasting->total_downtime }}
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
            <div class="col-9 mb-2">
                <div class="card main-card ">
                    <div class="row row-card-i mt-3 ">
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[0] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">999</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2 ">BERCAK HTM</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[1] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">BLISTER</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[2] }}')">
                                    <div class="card-inside1 float-start text-center text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">BUSHING</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[3] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-with-enter">CACAT <br> CASTING</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-card-i mt-3 ">
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[4] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">CRACK</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[5] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">DEKOK</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[6] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">DENT</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[7] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-with-enter">EJECTOR <br> PATAH</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-card-i mt-3 ">
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[8] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">FLOWLINE</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[9] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">GATE NG</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[10] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2 ">GELOMBANG</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[11] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">GOMPAL</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-card-i mt-3 ">
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[12] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">INSERT PIN</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[13] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">KEROPOS</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[14] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2 ">PART NEMPEL</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[15] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">RETAK</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-card-i mt-3 ">
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[16] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">STEP</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[17] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">UNDERCUT</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[18] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">KULIT JERUK</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[19] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2 ">MELENGKUNG</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-card-i mt-3 ">
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[20] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">OVERHEAT</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[21] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2">PART JATUH</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[22] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2 ">PARTINGLINE</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[23] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-with-enter">SLEEVEING MIRING</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-card-i mt-3 mb-2">
                        <div class="col-3 mt-2">
                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                <a onclick="ModalGambar('{{ $idCasting->id }}', '{{ $reject[24] }}')">
                                    <div class="card-inside1 float-start text-center">
                                        <div class="font-ci1">0</div>
                                    </div>

                                    <div class="card-inside2 float-end">
                                        <div class="font-ci2 ">WARMING UP</div>
                                    </div>
                                </a>
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

    <script>
        $(function() {
            let ip_node = location.hostname;
            let socket_port = '1553';
            let socket = io(ip_node + ':' + socket_port);
            socket.on('connection');
            socket.on("levelMolten_settings", (data) => {

                //Define Urutan Mesin Casting
                let for_mc = {{ $mcfordata }} - 1;

                //Total Produksi
                let totalProduksi = data[for_mc].total_produksi;
                document.getElementById("totalProduksi").innerHTML = totalProduksi;



            })
        });
    </script>
@endsection

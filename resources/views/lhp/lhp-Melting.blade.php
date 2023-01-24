@extends('mainLHP')
@section('content')
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>
    <div class="container-fluid">
        <form action="{{ url('/lhp-melting/' . $mesin . '/' . $id . '/simpan') }}" method="POST">
            @csrf
            {{-- BAGIAN ATAS --}}
            <div class="row mt-3">
                <div class="col-8">
                    <div class="card card_form_input">
                        <div class="card-body">
                            <input type="number" class="fw-bold text-end input_berat" name="berat" id="berat"
                                placeholder="Masukan angka..." autofocus required>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card text-center card_stok-molten">
                                <div class="card-header bg-info ">STOK MOLTEN</div>
                                <div class="card-body">
                                    {{-- <p class="fw-bold stok_molten" id="stok_molten">@FormatRibu($ntah->stok_molten) KG</p> --}}
                                    <p class="fw-bold stok_molten" id="stok_molten"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- BAGIAN BAWAH --}}
            <div class="row">
                <div class="col-8 mt-3">
                    <div class="card card-material">
                        <div class="card-body">
                            <p class="fs-1 fw-bold">Material :</p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="ingot" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;"
                                                onclick="return Confirm('INGOT')">INGOT</button>
                                        </div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="exgate" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;" onclick="return Confirm('EXGATE')">EX
                                                GATE</button></div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="reject_parts" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;"
                                                onclick="return Confirm('PARTS NG')">PARTS
                                                NG</button></div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="tapping" class="btn btn-warning shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;"
                                                onclick="return Confirm('TAPPING')">TAPPING</button>
                                        </div>
                                        {{-- <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="basemetal" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;"
                                                onclick="return Confirm('BASEMETAL')">BASEMETAL</button>
                                        </div> --}}
                                        <div class="col-xl-3 col-4 mb-3"> <button type="submit" name="item"
                                                value="alm_treat" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;"
                                                onclick="return Confirm('ALM TREAT')">ALM
                                                TREAT</button>
                                        </div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="fluxing" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;"
                                                onclick="return Confirm('FLUXING')">FLUXING</button>
                                        </div>

                                        {{-- <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="oil_scrap" class="btn btn-primary shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;"
                                                onclick="return Confirm('OIL SCRAP')">OIL
                                                SCRAP</button>
                                        </div> --}}
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="dross" class="btn btn-warning shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;"
                                                onclick="return Confirm('DROSS')">DROSS</button>
                                        </div>
                                        <div class="col-xl-3 col-4 mb-3"><button type="submit" name="item"
                                                value="gas_akhir" class="btn btn-warning shadow fs-5 ms-3"
                                                style="width: 160px; height: 60px;"
                                                onclick="return Confirm('GAS AKHIR')">GAS
                                                AKHIR</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card text-center card_total-chg">
                                <div class="card-header bg-info ">TOTAL CHARGING</div>
                                <div class="card-body">
                                    <p class="fw-bold total_charging">@FormatRibu($ntah->total_charging) KG</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="card-group">
                                <div class="card text-center card-ingot">
                                    <h5 class="card-header fs-2 fw-bold bg-info">INGOT</h5>
                                    <div class="card-body card-ingot">
                                        <p class="fw-bold">{{ $ntah->persen_ingot }}%</p>
                                    </div>
                                </div>
                                <div class="card text-center card-scrap">
                                    <h5 class="card-header fs-2 fw-bold bg-info">SCRAP</h5>
                                    <div class="card-body card-ingot">
                                        <p class="fw-bold">{{ $ntah->persen_rs }}%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(function() {
            let ip_node = '127.0.0.1';
            let socket_port = '3000';
            let socket = io(ip_node + ':' + socket_port);
            socket.on('connection');

            socket.on("stok_molten_Striko1", (datasql) => {

                document.getElementById("stok_molten").innerHTML = datasql[0].stok_molten;
                console.log(datasql[0].stok_molten);

            })
        });
    </script>
@endsection

@extends('mainLHP')
@section('content')
    {{-- -------------------------------- CSS ------------------------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/casting_css.css') }}">
    {{-- --------------------------------      ------------------------------ --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 ">
                <div class="card card-left5 mt-3 ms-2 shadow-sm">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">TARGET<br><span class="fs-2"
                                id="target">{{ $idCasting->target }}</span>
                            <span> pieces</span>
                        </div>
                    </div>
                </div>
                <div class="card card-left2 mt-3 ms-2 shadow-sm">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">TOTAL PRODUKSI <br>
                            <span class="fs-2" id="totalProduksi"></span>
                            <span> pieces</span>
                        </div>
                    </div>
                </div>
                <div class="card card-left5 mt-3 ms-2 shadow-sm">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">TOTAL OK<br><span class="fs-2" id="totalOk"></span>
                            <span> pieces</span>
                        </div>
                    </div>
                </div>
                <div class="card card-left3 mt-3 ms-2 shadow-sm" id="cardReject" onclick="getReject()">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">REJECTION <br>
                            <span class="fs-2" id="totalReject"></span><span> pieces</span>
                        </div>
                    </div>
                </div>
                <div class="card card-left4 mt-3 ms-2 shadow-sm" id="cardDT" onclick="getDowntime()">
                    <div class="row">
                        <div class="col-auto "></div>
                        <div class="col-11 text-center mt-2 fw-bold">DOWNTIME<br><span class="fs-2"
                                id="totalDt">{{ \Carbon\Carbon::parse($idCasting->total_downtime)->format('i') }}
                            </span><span> menit
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 mb-2">
                <div class="card upper mt-3 mb-1 shadow-sm">
                    <div class="row parent">
                        <div class="col-9 mt-2 ps-4 fw-bold fs-4  "> {{ $idCasting->nama_part }} </div>
                        <div class="col-3 d-flex align-items-center">
                            <div class="child fw-bold fs-4  text-center d-flex align-items-center">
                                <div class="dies">
                                    DIES :
                                    {{ $idCasting->mesincasting->nomor_dies }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card main-card"id="reject">
                    <div class="row row-card-i mt-3 ms-2">
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
                <div class="card main-card" id="downtime">
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
                            <label class="tab-time" id="dt1" for="dtMaterial">{{ $sumDtMat }}
                                Detik</label>
                            <label class="tab-time" id="dt2" for="dtMesin">{{ $sumDtMsn }}
                                Detik</label>
                            <label class="tab-time" id="dt3" for="dtDies">{{ $sumDtPro }}
                                Detik</label>
                            <label class="tab-time" id="dt4" for="dtProses">{{ $sumDtDies }}
                                Detik</label>
                            <label class="tab-time" id="dt5" for="dtTerencana">{{ $sumDtPlan * 60 }}
                                Detik</label>
                        </div>
                        <div class="panels">
                            <div class="panel" id="one-panel">
                                <div class="row row-card-i">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($downtime->where('kategori', 'material') as $d)
                                        <div class="col-3 mt-2">
                                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#popUp">
                                                <a
                                                    onclick="Modaldowntime('{{ $idCasting->id }}', '{{ $d->nama_downtime }}','{{ $i }}','1')">
                                                    <div class="card-inside1  float-start text-center">
                                                        <div class="font-ci1" id="timer{{ $i }}">
                                                        </div>
                                                    </div>
                                                    <div class="card-inside2 float-end d-flex align-items-center">
                                                        <div class="font-ci2">{{ $d->nama_downtime }}</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                            <div class="panel" id="two-panel">
                                <div class="row row-card-i">
                                    @php
                                        $i = $countDtMat + 1;
                                    @endphp
                                    @foreach ($downtime->where('kategori', 'mesin') as $d)
                                        <div class="col-3 mt-2">
                                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#popUp">
                                                <a
                                                    onclick="Modaldowntime('{{ $idCasting->id }}', '{{ $d->nama_downtime }}','{{ $i }}','2')">
                                                    <div class="card-inside1  float-start text-center">
                                                        <div class="font-ci1" id="timer{{ $i }}">
                                                        </div>
                                                    </div>
                                                    <div class="card-inside2 float-end d-flex align-items-center">
                                                        <div class="font-ci2">{{ $d->nama_downtime }}</div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                            <div class="panel" id="three-panel">
                                <div class="row row-card-i">
                                    @php
                                        $i = $countDtMat + $countDtMsn + 1;
                                    @endphp
                                    @foreach ($downtime->where('kategori', 'dies') as $d)
                                        <div class="col-3 mt-2">
                                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#popUp">
                                                <a
                                                    onclick="Modaldowntime('{{ $idCasting->id }}', '{{ $d->nama_downtime }}','{{ $i }}','3')">
                                                    <div class="card-inside1  float-start text-center">
                                                        <div class="font-ci1" id="timer{{ $i }}">
                                                        </div>
                                                    </div>
                                                    <div class="card-inside2 float-end d-flex align-items-center">
                                                        <div class="font-ci2">{{ $d->nama_downtime }}</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                            <div class="panel" id="four-panel">
                                <div class="row row-card-i">
                                    @php
                                        $i = $countDtMat + $countDtMsn + $countDtDies + 1;
                                    @endphp
                                    @foreach ($downtime->where('kategori', 'proses') as $d)
                                        <div class="col-3 mt-2">
                                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#popUp">
                                                <a
                                                    onclick="Modaldowntime('{{ $idCasting->id }}', '{{ $d->nama_downtime }}','{{ $i }}','4')">
                                                    <div class="card-inside1  float-start text-center">
                                                        <div class="font-ci1" id="timer{{ $i }}">
                                                        </div>
                                                    </div>
                                                    <div class="card-inside2 float-end d-flex align-items-center">
                                                        <div class="font-ci2">{{ $d->nama_downtime }}</div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                            <div class="panel" id="five-panel">
                                <div class="row row-card-i">
                                    @php
                                        $i = $countDtMat + $countDtMsn + $countDtDies + $countDtPro + 1;
                                    @endphp
                                    @foreach ($downtime->where('kategori', 'terplanning') as $d)
                                        <div class="col-3 mt-2">
                                            <div class="card-inside shadow-lg border border-2 border border-dark align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#popUp">
                                                <a
                                                    onclick="Modaldowntime('{{ $idCasting->id }}', '{{ $d->nama_downtime }}','{{ $i }}','5')">
                                                    <div class="card-inside1  float-start text-center">
                                                        <div class="font-ci1" id="timer{{ $i }}">
                                                        </div>
                                                    </div>
                                                    <div class="card-inside2 float-end d-flex align-items-center">
                                                        <div class="font-ci2">{{ $d->nama_downtime }}</div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <div class="modal fade" id="popUp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content" id="popUp-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h5 class="font-white">DOWNTIME </h5>
                                <h5 class="font-white" id="titleDt"></h5>
                                <div class="card" style="height: 110px">
                                    <span class="text-center" style="font-size:110px; margin-top: -30px"
                                        id="modalMinute">0</span>
                                </div>
                                <div class=" text-center font-white" id="totalModalMinute">Downtime terplanning : 00
                                    Detik
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @php
            $reject = $idCasting->id;
        @endphp

        <script>
            let cardReject = document.getElementById('cardReject');
            let cardDT = document.getElementById('cardDT');
            // cdreject.style.backgroundColor = '#A555EC';

            let reject = document.getElementById('reject');
            let downtime = document.getElementById('downtime');
            downtime.hidden = true;

            let dtMaterial = document.getElementById('dt1');
            let dtMesin = document.getElementById('dt2');
            let dtDies = document.getElementById('dt3');
            let dtProses = document.getElementById('dt4');
            let dtTerencana = document.getElementById('dt5');


            function getDowntime(id) {
                reject.hidden = true;

                cardReject.style.backgroundColor = 'white';
                cardReject.style.color = 'black';

                cardDT.style.backgroundColor = '#ff6a00';
                cardDT.style.color= 'white';

                downtime.hidden = false;
                dtMaterial.hidden = false;
                dtMesin.hidden = true;
                dtDies.hidden = true;
                dtProses.hidden = true;
                dtTerencana.hidden = true;

                document.getElementById('one').addEventListener("click", () => {
                    dtMaterial.hidden = false;
                    dtMesin.hidden = true;
                    dtDies.hidden = true;
                    dtProses.hidden = true;
                    dtTerencana.hidden = true;
                    // console.log("test");
                });

                document.getElementById('two').addEventListener("click", () => {
                    dtMaterial.hidden = true;
                    dtDies.hidden = true;
                    dtProses.hidden = true;
                    dtTerencana.hidden = true;
                    dtMesin.hidden = false;
                    // console.log("test");
                });

                document.getElementById('three').addEventListener("click", () => {
                    dtMaterial.hidden = true;
                    dtMesin.hidden = true;
                    dtDies.hidden = false;
                    dtProses.hidden = true;
                    dtTerencana.hidden = true;
                    //  console.log("test");
                });

                document.getElementById('four').addEventListener("click", () => {
                    dtMaterial.hidden = true;
                    dtMesin.hidden = true;
                    dtDies.hidden = true;
                    dtProses.hidden = false;
                    dtTerencana.hidden = true;
                });

                document.getElementById('five').addEventListener("click", () => {
                    dtMaterial.hidden = true;
                    dtMesin.hidden = true;
                    dtDies.hidden = true;
                    dtProses.hidden = true;
                    dtTerencana.hidden = false;
                });

            }

            function getReject(id) {
                reject.hidden = false;
                downtime.hidden = true;

                cardReject.style.backgroundColor = '#b20606';
                cardReject.style.color = 'white';

                cardDT.style.backgroundColor = 'white';
                cardDT.style.color= 'black';


            }

            let totalReject = 0;
            let id_lhp = {!! json_encode($reject) !!};

            function getTotalReject() {
                $.ajax({
                    url: "/dtRjtcasting" + "/" + id_lhp,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        totalReject = data[0];
                        document.getElementById("totalReject").innerHTML = totalReject;
                        for (let i = 1; i <= {{ $jumlahReject }}; i++) {
                            document.getElementById('jenisReject' + (i - 1)).innerHTML = data[i];
                        }
                    },
                    error: function() {
                        console.log('Error data sat mengambil total Reject');
                    }
                });
            }

            function getTotalDowntime() {
                $.ajax({
                    url: "/dtDowntime" + "/" + id_lhp,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        // Total Downtime Downtime
                        document.getElementById("totalDt").innerHTML = data[0] + data[1] + data[2] + data[3] + data[
                            4];
                        // Total downtime perKategori
                        for (let i = 1; i <= 5; i++) {
                            document.getElementById('dt' + i).innerHTML = 'Total ' +
                                data[i - 1] * 60 + ' Detik';
                        }
                        // Perdowntime
                        for (let i = 1, j = 5; i <= {{ $countdt }}, j <= {{ $countdt }} + 5; i++, j++) {
                            document.getElementById('timer' + i).innerHTML = data[j];
                        }
                    }
                });
            }

            // -------------- Socket IO -------------- // 
            $(function() {
                let ip_node = location.hostname;
                let socket_port = '5631';
                let socket = io(ip_node + ':' + socket_port);
                socket.on('connection');
                socket.on("levelMolten_settings", (data) => {
                    //Define Urutan Mesin Casting
                    getTotalReject();
                    getTotalDowntime();
                    let for_mc = {{ $mcfordata }} - 1;

                    //Total Produksi
                    let totalProduksi = data[for_mc].total_produksi;
                    let totalOk = totalProduksi - totalReject;
                    document.getElementById("totalProduksi").innerHTML = totalProduksi;
                    document.getElementById("totalOk").innerHTML = totalOk;


                    //----------- Get target -----------------//
                    $.ajax({
                        url: "/casting/target" + "/" + id_lhp,
                        type: "GET",
                        dataType: "json",
                        success: function(target) {
                            document.getElementById('target').innerHTML = target;
                        }
                    });

                    // //----------- Get Total Produksi -----------------//
                    $.ajax({
                        url: "/casting/updateTotalProd" + "/" + {{ $idCasting->id }},
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            console.log(response); // handle the response from the server
                        },
                        error: function(xhr, status, error) {
                            console.log(error); // handle any errors that occur
                        }
                    });
                })
            });

            // -------------- Downtime -------------- //

            var Totaltime = 0;
            var minute = 0;

            function Modaldowntime(id, dt, urutan, kategori) {
                urutan = parseInt(urutan, 10);

                let UrutanKategori;
                if (kategori == 1) {
                    UrutanKategori = "Material"
                } else if (kategori == 2) {
                    UrutanKategori = "Mesin"
                } else if (kategori == 3) {
                    UrutanKategori = "Dies"
                } else if (kategori == 4) {
                    UrutanKategori = "Proses"
                } else if (kategori == 5) {
                    UrutanKategori = "Terencana"
                }
                $.ajax({
                    url: "/dtDowntime" + "/" + id_lhp,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        minute = data[urutan + 4];
                        Totaltime = data[kategori - 1] * 60;
                        // console.log(Totaltime);
                        document.getElementById('modalMinute').innerHTML = minute;

                        function saveDowntimeCasting() {
                            var url = "/lhp-casting" + "/" + id + "/" + dt + "/" + minute;
                            // replace with your desired URL
                            var token = $('meta[name="csrf-token"]').attr('content');
                            $.ajax({
                                url: url,
                                type: 'POST',
                                data: {
                                    _token: token
                                },
                                success: function(response) {

                                    console.log('DATA BERHASIL DITAMBAHKAN');

                                },
                                error: function(xhr) {
                                    console.log('DATA GAGAL DITAMBAHKAN');
                                }
                            });
                        };
                        var timer = setInterval(function() {
                            minute++;
                            document.getElementById('modalMinute').innerHTML =
                                minute;
                        }, 60000);
                        var Totaltimer = setInterval(function() {
                            Totaltime++;

                            document.getElementById('totalModalMinute').innerHTML =
                                'Downtime ' + UrutanKategori + ': ' + Totaltime +
                                ' detik';
                        }, 1000);
                        var save = setInterval(function() {
                            saveDowntimeCasting();
                            // console.log(test);
                        }, 60000);
                        var popUp = document.getElementById('popUp');

                        function formatTime(time) {
                            var Totalminutes = Math.floor(Totaltime / 60);
                            var Totalseconds = Totaltime % 60;
                            // return (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
                            return +Totalminutes + Totalseconds;
                        }
                        document.getElementById("titleDt").innerHTML = dt;
                        document.getElementById("popUp-content").onclick = function() {
                            if (confirm('Apakah anda akan menghentikan waktu donwtime saat ini ? ')) {
                                clearInterval(Totaltimer);
                                clearInterval(timer);
                                clearInterval(save);
                                $("#popUp").modal("hide");

                            }

                        };
                    }
                });
            }



            let cycleTime = {{ $datamc->cycle_time }} * 1000;

            const postTarget = setInterval(function() {
                function stopTarget() {
                    const now = new Date();
                    const hour = now.getHours();
                    const minute = now.getMinutes();

                    // Define the time ranges when the interval should stop
                    const ranges = [
                        // Istirahat SHIFT 1
                        {
                            startHour: 4,
                            startMinute: 30,
                            endHour: 5,
                            endMinute: 0
                        },
                        // P5M & 5R SHIFT 1
                        {
                            startHour: 06,
                            startMinute: 55,
                            endHour: 07,
                            endMinute: 10
                        },


                        // Istirahat SHIFT 2
                        {
                            startHour: 11,
                            startMinute: 40,
                            endHour: 12,
                            endMinute: 40
                        },
                        // P5M & 5R SHIFT 2
                        {
                            startHour: 15,
                            startMinute: 45,
                            endHour: 16,
                            endMinute: 00
                        },

                        // Istirahat SHIFT 3
                        {
                            startHour: 18,
                            startMinute: 0,
                            endHour: 18,
                            endMinute: 15
                        },
                        {
                            startHour: 19,
                            startMinute: 20,
                            endHour: 20,
                            endMinute: 00
                        },
                        // P5M & 5R SHIFT 3
                        {
                            startHour: 23,
                            startMinute: 45,
                            endHour: 00,
                            endMinute: 00
                        },
                        // For testing
                        // {
                        //     startHour: 11,
                        //     startMinute: 39,
                        //     endHour: 11,
                        //     endMinute: 39
                        // },
                    ];

                    // Check if the current time is within any of the time ranges
                    const shouldStop = ranges.some(({
                        startHour,
                        startMinute,
                        endHour,
                        endMinute
                    }) => {
                        return (hour === startHour && minute >= startMinute) || (hour > startHour && hour <
                            endHour) || (
                            hour === endHour && minute <= endMinute);
                    });

                    if (shouldStop) {
                        console.log('Interval should stop...');
                        // clearInterval(postTarget);
                        return;
                    }

                    console.log('Performing some action...');
                    $.ajax({
                        url: "/casting/setTarget" + "/" + {{ $idCasting->id }},
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            console.log(response); // handle the response from the server
                        },
                        error: function(xhr, status, error) {
                            console.log(error); // handle any errors that occur
                        }
                    });
                }

                stopTarget();
                console.log(cycleTime)

            }, cycleTime);
        </script>
    @endsection

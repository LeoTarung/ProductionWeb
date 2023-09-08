@extends('main')
@section('content')
    <link rel="stylesheet" type="text/css" href="css/quality.css">
    <style>
        .font-button {
            font-size: 100%;
            text-align: center;
        }

        @media (min-width: 1920px) {
            .font-button {
                font-size: 200%;
            }
        }

        @media (min-width: 1500px) {
            .font-button {
                font-size: 175%;
            }
        }

        @media (max-width: 1280px) {
            .font-button {
                font-size: 75%;
            }
        }

        @media (max-width: 480px) {
            .font-button {
                font-size: 25%;
            }
        }
    </style>
    <div class="main-content d-flex flex-column"style="margin-bottom: -4%;">
        <h1>Monitoring Casting</h1>
        <div class="tanggal text-center">
            <h4 id="date-2"></h4>
        </div>
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12  mb-5 mt-2" style=" position: relative;">
                <img class="img shadow-lg border border-5 border-secondary-subtle" src="img/mapping.jpg" alt="Image">
                @for ($x = 0; $x < 6; $x++)
                    <div id="lingkaran{{ $noMesin[$x] }}" class="lingkaran " onclick="ModalTable({{ $noMesin[$x] }})">
                        <div class="text-center ms-1 font-button">0{{ $noMesin[$x] }}</div>
                    </div>
                @endfor
                @for ($x = 6; $x < count($noMesin); $x++)
                    <div id="lingkaran{{ $noMesin[$x] }}" class="lingkaran " onclick="ModalTable({{ $noMesin[$x] }})">
                        <div class="text-center ms-1 font-button">{{ $noMesin[$x] }}</div>
                    </div>
                @endfor
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 wrapper1 justify-content-center" style="margin-left: -0.5%;">
                <div class="wrapper">

                    <div class="card">
                        <div class="card-header text-center fs-5">Legend</div>
                        <div class="card-body">
                            <table class="table table-legend">
                                <tr>
                                    <td>
                                        <div class="bulet1"></div>
                                    </td>
                                    <td>
                                        <div class="fs-7">Problem Kualitas</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="bulet2"></div>
                                    </td>
                                    <td>
                                        <div class="fs-7">Produksi</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="bulet3"></div>
                                    </td>
                                    <td>
                                        <div class="fs-7">Verifikasi OQC</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="bulet4"></div>
                                    </td>
                                    <td>
                                        <div class="fs-7">Off</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="bulet5"></div>
                                    </td>
                                    <td>
                                        <div class="fs-7">Trial Eng</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="bulet6"></div>
                                    </td>
                                    <td>
                                        <div class="fs-7">Overhaul</div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="btnHistory"><a href="/QualityHistory"> <button type="button"
                                class="btn btn-primary w-100">History</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalTable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="ModalTableLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="page" class="p-2"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" onclick="ModalInput()">Input</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalInput" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="ModalInputLabel">Input</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="page" class="p-2">
                        <form action="/inputProblem" method="post">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <td>No</td>
                                    <td><input class="w-100" type="text" name="no" id="number"></td>
                                </tr>
                                <tr>
                                    <td>Nama Part</td>
                                    <td>
                                        <input class="w-100" type="text" name="nama_part" id="nama_part">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Problem</td>
                                    <td><input class="w-100" type="text" name="problem"></td>
                                </tr>

                                <tr>
                                    <td>Aktivitas</td>
                                    <td><input class="w-100" type="text" name="aktivitas"></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><input type="radio" name="status" value="open" class="m-2">OPEN <input
                                            class="m-2" type="radio" name="status" value="close">CLOSE</td>
                                </tr>
                            </table>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" value="submit" name="submit" class="btn btn-success"
                                data-bs-dismiss="modal">Save
                                changes</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        function ModalTable(id) {
            $.get(
                "/partial/modalTable" + "/" + id,
                function(data) {
                    $("#ModalTableLabel").html("Mesin " + id); //Untuk kasih judul di modal
                    //  $("#page").load('/partial/modal-sementara'); //menampilkan view create di dalam id page
                    $("#ModalTable").modal("show"); //kalo ID pake "#" kalo class pake "."
                    $('#ModalTable .modal-body').load('/partial/modalTable' + '/' + id);
                    document.getElementById("number").value = id;
                    console.log(id);
                }
            );
        }

        function ModalInput(id) {
            $("#ModalInput").modal("show"); //kalo ID pake "#" kalo class pake "."
            $("#ModalTable").modal("hide");
        }

        $(function() {
            let ip_node = location.hostname;
            let socket_port = '5322';
            let socket = io(ip_node + ':' + socket_port);
            socket.on('connection');
            socket.on("status_quality", (data) => {
                for (let i = 0; i < {{ count($mesin) }}; i++) {
                    let lingkaran = []
                    lingkaran[i] = document.getElementById('lingkaran' + data[i].id);
                    switch (data[i].warna) {
                        case 'red':
                            warna = 'red';
                            break;
                        case 'green':
                            warna = '#00ff00';
                            break;
                        case 'yellow':
                            warna = 'yellow';
                            break;
                        case 'blue':
                            warna = '#189fff';
                            break;
                        case 'white':
                            warna = 'white';
                            break;
                        case 'purple':
                            warna = '#800080';
                            break;
                        default:
                            warna = 'yellow';
                    }
                    lingkaran[i].style.backgroundColor = warna;
                }
            })
        });

        function executeAtSpecificTimes() {
            setInterval(function() {
                var currentTime = new Date();
                var hours = currentTime.getHours();
                var minutes = currentTime.getMinutes();

                // Pad single-digit minutes with a leading zero
                if (minutes < 10) {
                    minutes = '0' + minutes;
                }

                var formattedTime = hours + ':' + minutes;

                // Check if the current time matches any of the specified times
                if (formattedTime === '16:00') {
                    var url = "/defaultStatus/3/";
                    var token = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            _token: token
                        },
                        success: function(response) {
                            console.log('success');
                        },
                        error: function(xhr) {
                            console.log('gagal');
                        }
                    });
                    console.log('Function executed at ' + formattedTime);
                } else if (formattedTime === '07:10') {
                    var url = "/defaultStatus/2/";
                    var token = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            _token: token
                        },
                        success: function(response) {
                            console.log('success');
                        },
                        error: function(xhr) {
                            console.log('gagal');
                        }
                    });
                } else if (formattedTime === '00:00') {
                    var url = "/defaultStatus/1/";
                    var token = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            _token: token
                        },
                        success: function(response) {
                            console.log('success');
                        },
                        error: function(xhr) {
                            console.log('gagal');
                        }
                    });
                } else {}
            }, 60000); // Check every minute (adjust as needed)
        }

        // Call the function to start checking the time
        executeAtSpecificTimes();
    </script>
@endsection

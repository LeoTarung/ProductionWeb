<!DOCTYPE html>
<html lang="en" class="notranslate">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NM | TV CASTING</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/tvCasting.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css"> --}}
    <link rel="stylesheet" type="text/css" href="/js/datatable/datatables.min.css" />
    {{-- //============[ JS IN HERE ]============// --}}
    <script src="/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/363jquery.min.js"></script>
    {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script> --}}
    {{-- <script type="text/javascript" src="/js/datatable/datatables.min.js"></script> --}}
</head>

<body class="body">

    <div class="container-fluid conflu" id="run">
        <div class="row mt-3">
            <div class="col-9 mt-3 mb-3 nama">
                <span class="mesin"> {{ $mecin }}</span>
                <br>
                <span class="part">{{ $namaPart }}</span>
            </div>

            @if ($urgent != null)
                <div class="col-3 ">
                    <div class="d-flex align-items-center status box">
                        URGENT
                    </div>
                </div>
            @else
            @endif

        </div>

        <div class="row atas mt-4 mb-1">
            <div class="col-4 aktual">
                <div class="text-center rounded-0">
                    <div class="penjelasan box">AKTUAL</div>
                    <div id="aktual" class="angka"></div>
                </div>
            </div>
            <div class="col-4 target">
                <div class="text-center rounded-0">
                    <div class="penjelasan box">TARGET</div>
                    <!-- <div id="aktual" class="angka"></div> -->
                    <div class="angka" id="target"></div>
                </div>
            </div>

            <div class="col-4 text-center parent ">
                <div class="parallelogram boxperform child">
                    <h1 class="pperform"> PERFORMANCE </h1>
                    <h1 style="font-size: 30px; margin-top: -40px">
                        <span id="persen" class="persen1"></span>
                        <span class="symbol">%</span>
                    </h1>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="row mt-3 mb-3">
                    <div class="col-3 text-center m-auto availa"> AVAILABILITY </div>
                    <div class="col-9">
                        <div class="progress rounded-3 border border-3" style="height: 60px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">100</div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mb-3">
                    <div class="col-3 text-center m-auto qurate"> QUALITY RATE </div>
                    <div class="col-9">
                        <div class="progress rounded-3 border border-3" style="height: 60px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">100</div>
                        </div>
                    </div>
                </div>

                @if ($shift == 1)
                    <div class="row mt-4 mb-3">
                        <div class="col-3 text-center m-auto shift"> SHIFT 1</div>
                        <div class="col-9">
                            <div class="row ms-1">
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">00</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">01</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">02</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">03</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">04</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">05</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">06</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">07</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($shift == 2)
                    <div class="row mt-4 mb-3">
                        <div class="col-3 text-center m-auto shift"> SHIFT 2</div>
                        <div class="col-9">
                            <div class="row ms-1">
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">07</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">08</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">09</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">10</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">11</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">12</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">13</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">14</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">15</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">16</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($shift == 3)
                    <div class="row mt-4 mb-3">
                        <div class="col-3 text-center m-auto shift"> SHIFT 3</div>
                        <div class="col-9">
                            <div class="row ms-1">
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">16</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">17</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">18</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">19</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">20</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">21</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">22</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">23</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>

    <div class="container-fluid dtproduksi" id="downtime">
        <div class="row mt-3">
            <div class="col-9 mt-3 mb-3 nama">
                <span class="mesin"> {{ $mecin }}</span>
                <br>
                <span class="part">{{ $namaPart }}</span>
            </div>

            {{-- perubahan urgent --}}
            @if ($urgent != null)
                <div class="col-3 ">
                    <div class="d-flex align-items-center status box">
                        URGENT
                    </div>
                </div>
            @else
            @endif

        </div>

        <div class="row atas mt-4 mb-1">
            <div class="col-4 aktual">
                <div class="text-center rounded-0">
                    <div class="penjelasan box">AKTUAL</div>
                    <div id="aktual" class="angka"></div>
                </div>
            </div>
            <div class="col-4 target">
                <div class="text-center rounded-0">
                    <div class="penjelasan box">TARGET</div>
                    <div class="angka" id="target"></div>
                </div>
            </div>

            <div class="col-4 text-center parent ">
                <div class="paradt boxperform child">
                    <h1 class="pperform"> PERFORMANCE </h1>
                    <h1 style="font-size: 30px; margin-top: -40px">
                        <span id="persen" class="persen1"></span>
                        <span class="symbol">%</span>
                    </h1>


                </div>
            </div>
        </div>

        <div class="row mt-5 mb-3">
            <div class="downtime box mt-2 "> DOWNTIME - {{ $downtime }} </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="row mt-3 mb-3">
                    <div class="col-3 text-center m-auto availa"> AVAILABILITY </div>
                    <div class="col-9">
                        <div class="progress rounded-3 border border-3" style="height: 60px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">100</div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mb-3">
                    <div class="col-3 text-center m-auto qurate"> QUALITY RATE </div>
                    <div class="col-9">
                        <div class="progress rounded-3 border border-3" style="height: 60px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">100</div>
                        </div>
                    </div>
                </div>

                @if ($shift == 1)
                    <div class="row mt-4 mb-3">
                        <div class="col-3 text-center m-auto shift"> SHIFT 1</div>
                        <div class="col-9">
                            <div class="row ms-1">
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">00</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">01</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">02</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">03</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">04</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">05</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">06</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">07</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($shift == 2)
                    <div class="row mt-4 mb-3">
                        <div class="col-3 text-center m-auto shift"> SHIFT 2</div>
                        <div class="col-9">
                            <div class="row ms-1">
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">07</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">08</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">09</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">10</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">11</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">12</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">13</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">14</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">15</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">16</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($shift == 3)
                    <div class="row mt-4 mb-3">
                        <div class="col-3 text-center m-auto shift"> SHIFT 3</div>
                        <div class="col-9">
                            <div class="row ms-1">
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">16</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">17</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">18</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">19</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">20</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">21</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">22</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">23</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>



            {{-- @endif --}}
        </div>
    </div>

    <div class="container-fluid layoff" id="layoff">
        <div class="row mt-3">
            <div class="col-9 mt-3 mb-3 nama">
                <span class="mesin"> {{ $mecin }}</span>
                <br>
                <span class="part">{{ $namaPart }}</span>
            </div>

            {{-- perubahan urgent --}}
            @if ($urgent != null)
                <div class="col-3 ">
                    <div class="d-flex align-items-center status box">
                        URGENT
                    </div>
                </div>
            @else
            @endif

        </div>

        <div class="row atas mt-4 mb-1">
            <div class="col-4 aktual">
                <div class="text-center rounded-0">
                    <div class="penjelasan box">AKTUAL</div>
                    <div id="aktual" class="angka"></div>
                </div>
            </div>
            <div class="col-4 target">
                <div class="text-center rounded-0">
                    <div class="penjelasan box">TARGET</div>
                    <div class="angka" id="target"></div>
                </div>
            </div>
            <div class="col-4 text-center parent ">
                <div class="paralayoff boxperform child">
                    <h1 class="pperform"> PERFORMANCE </h1>
                    <h1 style="font-size: 30px; margin-top: -40px">
                        <span id="persen" class="persen1"></span>
                        <span class="symbol">%</span>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-center mt-5"
                style="font-size: 230px; font-weight: 600; color:white; letter-spacing:1px">
                LAY OFF PRODUKSI
            </div>
        </div>
    </div>

    <div class="container-fluid conflu" id="noPrep">
        <div class="row mt-3">
            <div class="col-9 mt-3 mb-3 nama">
                <span class="mesin"> BELUM PREPARATION!</span>
                <br>
                <span class="mesin">SEGERA LAKUKAN PREPARATION</span>
            </div>

            @if ($urgent != null)
                <div class="col-3 ">
                    <div class="d-flex align-items-center status box">
                        URGENT
                    </div>
                </div>
            @else
            @endif

        </div>

        <div class="row atas mt-4 mb-1">
            <div class="col-4 aktual">
                <div class="text-center rounded-0">
                    <div class="penjelasan box">AKTUAL</div>
                    <div id="aktual" class="angka"></div>
                </div>
            </div>
            <div class="col-4 target">
                <div class="text-center rounded-0">
                    <div class="penjelasan box">TARGET</div>
                    <!-- <div id="aktual" class="angka"></div> -->
                    <div class="angka" id="target"></div>
                </div>
            </div>

            <div class="col-4 text-center parent ">
                <div class="parallelogram boxperform child">
                    <h1 class="pperform"> PERFORMANCE </h1>
                    <h1 style="font-size: 30px; margin-top: -40px">
                        <span id="persen" class="persen1"></span>
                        <span class="symbol">%</span>
                    </h1>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="row mt-3 mb-3">
                    <div class="col-3 text-center m-auto availa"> AVAILABILITY </div>
                    <div class="col-9">
                        <div class="progress rounded-3 border border-3" style="height: 60px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">100</div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mb-3">
                    <div class="col-3 text-center m-auto qurate"> QUALITY RATE </div>
                    <div class="col-9">
                        <div class="progress rounded-3 border border-3" style="height: 60px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">100</div>
                        </div>
                    </div>
                </div>

                @if ($shift == 1)
                    <div class="row mt-4 mb-3">
                        <div class="col-3 text-center m-auto shift"> SHIFT 1</div>
                        <div class="col-9">
                            <div class="row ms-1">
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">00</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">01</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">02</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">03</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">04</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">05</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">06</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">07</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($shift == 2)
                    <div class="row mt-4 mb-3">
                        <div class="col-3 text-center m-auto shift"> SHIFT 2</div>
                        <div class="col-9">
                            <div class="row ms-1">
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">07</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">08</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">09</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">10</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">11</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">12</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">13</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">14</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">15</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">16</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($shift == 3)
                    <div class="row mt-4 mb-3">
                        <div class="col-3 text-center m-auto shift"> SHIFT 3</div>
                        <div class="col-9">
                            <div class="row ms-1">
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">16</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">17</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">18</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">19</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">20</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">21</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">22</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">23</p>
                                </div>
                                <div class="col-1 text-center border border-light">
                                    <p class="jam" style="margin-top: 10px;">00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>



    <footer class="container-fluid d-flex align-self-center ">
        <marquee>
            <p>REALTIME MONITORING HIGH PRESSURE DIE CASTING</p>
        </marquee>
    </footer>
    <script>
        const element = document.getElementById("target");
        let run = document.getElementById("run");
        let dt = document.getElementById("downtime");
        let layoff = document.getElementById("layoff");
        let noPrep = document.getElementById("noPrep");
        dt.hidden = true;
        layoff.hidden = true;
        noPrep.hidden = true;
        run.hidden = false;
        $(function() {
            let ip_node = location.hostname;
            let socket_port = '5631';
            let socket = io(ip_node + ':' + socket_port);
            socket.on('connection');
            socket.on("lhp_casting", (data) => {

                if (data[0] == null) {
                    dt.hidden = true;
                    layoff.hidden = true;
                    run.hidden = true;
                    noPrep.hidden = false;

                } else {
                    //===== [ Untuk refresh warna Produksi ] ====//
                    let production = data[0].status_dt;
                    console.log(production);


                    if (production == 0) {
                        dt.hidden = true;
                        layoff.hidden = true;
                        noPrep.hidden = true;
                        run.hidden = false;
                        console.log('testproduksi');
                        // run.style.backgroundColor = '#00af50';
                    } else if (production == 7) {
                        run.hidden = true;
                        dt.hidden = true;
                        noPrep.hidden = true;
                        layoff.hidden = false;
                        console.log(layoff);
                        console.log('test layoff');
                        // layoff.style.backgroundColor = 'grey';
                    } else if (production != 0) {
                        layoff.hidden = true;
                        run.hidden = true;
                        noPrep.hidden = true;
                        dt.hidden = false;
                        console.log('t');
                        // dt.style.backgroundColor = '#ac1111';
                    }


                    //===== [ Jumlah Aktual Part ] ====//
                    let for_mc = {{ $mcfordata }} - 1;
                    let aktual = data[0].total_produksi;
                    document.getElementById("aktual").innerHTML = aktual;
                    element.innerHTML = data[0].target;
                    //Persentase
                    let target = data[0].target;
                    var ValPersen = ((aktual / target) * 100);

                    pembulatan = ValPersen.toFixed(0);
                    // var persen = 96;

                    let persen = document.getElementById("persen");
                    // persen.innerHTML = 100;
                    if (pembulatan >= 100) {
                        persen.innerHTML = 100;
                        persen.style.marginTop = '-20px';
                        persen.style.marginLeft = '-20px';
                        persen.style.fontSize = '220px';
                        persen.style.color = '#ffffff';

                    } else if (pembulatan >= 95) {
                        persen.innerHTML = pembulatan;
                        persen.style.marginTop = '-20px';
                        persen.style.marginLeft = '-20px';
                        persen.style.fontSize = '220px';
                        persen.style.color = '#ffffff';

                    } else {
                        persen.innerHTML = pembulatan;
                        persen.style.fontSize = '250px';
                        persen.style.marginTop = '-40px';
                        persen.style.textShadow = '0 10px 19px #000000';
                        persen.style.animation = 'animate 2.0s linear infinite';
                        persen.style.color = '#ff0000';
                    }
                }

            })
            @if ($lhp == null)
                {
                    socket.emit("lhp_casting", 0);
                }
            @else
                {
                    socket.emit("lhp_casting", {{ $lhp->id_mesincasting }});
                }
            @endif
        });
    </script>

    <script src="{{ asset('/js/Socketio454.js') }}"></script>
    {{-- <script src="{{ asset('/js/JSforPRODUCTION.js') }}"></script> --}}
    <script src="{{ asset('/js/moment.js') }}"></script>
    @include('sweetalert::alert')
    {{-- <script src="/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script> --}}

</body>

</html>

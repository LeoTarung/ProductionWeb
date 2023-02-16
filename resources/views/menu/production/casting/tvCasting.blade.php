<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/tvCasting.css" media="all"> 
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-5.1.3-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src=/css/bootstrap-5.1.3-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css></script>

    <title>Dashboard</title>

  </head>

  <body class="body">
    <div class="container-fluid conflu">
        <div class="row mt-3">
            <div class="col-9 mt-3 mb-3 nama"> 
                <span class="ket"> NM.FR.AH091 </span>
                <br>
                <span class="part"> PIPE SUB-ASSY WATER BY-PASS 60U020 (FG)</span>
            </div>

            {{-- perubahan urgent --}}
            @if($urgent != null) 
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
                        <div class="angka">50</div>
                    </div>
                </div>
                <div class="col-4 target">
                    <div class="text-center rounded-0">
                        <div class="penjelasan box">TARGET</div>
                        <div class="angka">2</div>
                    </div>
                </div>

                <div class="col-4 text-center parent ">
                    <div class="parallelogram boxperform child">
                        <h1 class="pperform"> PERFORMANCE   </h1>
                        @if ($persen == 100)
                            <h1 style="font-size: 30px; margin-top: -40px">
                            <span class="persen1">{{ $persen }}</span>
                            <span class="symbol">%</span>
                            </h1>
                        @else
                            <h1 style="font-size: 30px; margin-top: -50px">
                                <span class="persen2">{{ $persen }}</span>
                                <span class="symbol">%</span>
                            </h1>
                        @endif

                    </div>
                </div>

                {{-- <div class="col-1"></div> --}}
        
                {{-- <div class="row mt-4 mb-3"> 
                    <div class="col-12 d-flex justify-content-center">
                        <div class="rounded-0 henkaten">
                            HENKATEN MAN POWER
                        </div>
                    </div>
                </div> --}}  
        </div>
        
        @if($running != null) 
            <div class="row mt-5 mb-3"> 
                <div class="downtime box mt-3 "> DOWNTIME - {{$downtime}}</div>
            </div>
        @else 
            <div class="row mt-5 mb-3"> 
                <div class="running box mt-3 "> RUNNING </div>
            </div>
        @endif

        
        {{-- jika henkaten 0 --}}
        @if($preparation != null) 
        <div class="row ">
            <div class="col-4 mt-2 mb-3 d-flex">
              <div class="col-2 bg-warning henkaten">
                <p class="henka">HENKATEN</p>
              </div>
               <div class="col-10 manpower">MAN  <br> POWER</div>
            </div>

            <div class="col-8">
                <div class="row mt-4 mb-1"> 
                    <div class="col-3 mt-2 text-center m-auto availa"> AVAILABILITY </div>
                    <div class="col-9 mt-2">
                        <div class="progress rounded-3 border border-3" style="height: 50px;">
                            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45</div>
                        </div>
                    </div>
                </div>
        
                <div class="row mt-4 mb-1">
                    <div class="col-3 text-center m-auto qurate"> QUALITY RATE </div>
                    <div class="col-9">
                        <div class="progress rounded-3 border border-3" style="height: 50px;">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60</div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mb-1">
                    <div class="col-3 text-center m-auto shift"> SHIFT 2</div>
                    <div class="col-9">
                        <div class="row ms-1">
                            <div class="col-1 text-center border border-light">
                                <p class="jam"   style="margin-top: 10px;">07</p>
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
            </div>
        </div>

        @else

        {{-- jika henkaten tidak ada --}}
        <div class="row">
            <div class="col-12">
                <div class="row mt-4 mb-3"> 
                    <div class="col-3 text-center m-auto availa"> AVAILABILITY </div>
                    <div class="col-9">
                        <div class="progress rounded-3 border border-3" style="height: 60px;">
                            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45</div>
                        </div>
                    </div>
                </div>
        
                <div class="row mt-4 mb-3">
                    <div class="col-3 text-center m-auto qurate"> QUALITY RATE </div>
                    <div class="col-9">
                        <div class="progress rounded-3 border border-3" style="height: 60px;">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60</div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mb-1">
                    <div class="col-3 text-center m-auto shift"> SHIFT 2</div>
                    <div class="col-9">
                        <div class="row ms-1">
                            <div class="col-1 text-center border border-light">
                                <p class="jam"   style="margin-top: 10px;">07</p>
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
            </div>
        </div>
        @endif
    </div>

    <footer class="container-fluid d-flex align-self-center ">
       <marquee >
        <p>REALTIME MONITORING MACHINING</p>
        </marquee> 
    </footer>

  </body>

</html>
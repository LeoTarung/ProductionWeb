<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NM | TV CASTING</title>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/castingTV.css') }}">
    <link rel="stylesheet" type="text/css"href="{{ asset('/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/fontawesome-free-6.4.0-web/css/all.min.css') }}">
    <script src="/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/363jquery.min.js"></script>
    
</head>
<body>
    @if($produksi != null)
        
    <div class="container-fluid bg-dark" style="height:100%">
        {{-- mesin & tulisan urgent --}}
        <div class="row bg-dark">
            <div class="col-8 bg-dark text-light fw-semibold" style="font-size: 2.5vw;"> MA HN 001</div>
            @if($urgent != null)
                <div class="col-4 text-light text-end fw-semibold" 
                style="background: linear-gradient( 30deg, transparent 120px, #149c3a 0); letter-spacing: 5px; font-size:2.5vw; padding:0px 250px 0px 0px">
                    NORMAL
                </div>
            @else
                <div class="col-4 text-light text-end fw-semibold" 
                    style="background: linear-gradient( 30deg, transparent 120px, #ff0026 0); letter-spacing: 5px; font-size:2.5vw; padding:0px 250px 0px 0px">URGENT</div>
            @endif
            
        </div>
        
        {{-- part --}}
        <div class="row"> 
            <div class="col bg-dark text-light fw-bold" style="font-size: 3.8vw;">PIPE SUB ASSY WATER PB1122332432</div>
        </div>
        
        {{-- henkaten, target, dll  --}}
        <div class="row bg-dark" style="height:40vh" >
            {{-- henkaten --}}
            <div class="col-4 col-xl-3 text-center text-light " style="font-size: 2vw;">
                <p class="fw-semibold" style="font-size: 1.8vw"> HENKATEN </p>
                <div class="row row-cols-2 text-center flex-wrap">
                    <div class="col">
                        <div class="h-100 pt-5" style="background-color: red">
                            <i class="fa-solid fa-user-gear fa-2xl"  style="color: #ffffff; background-color:red"></i> 
                            <p class="fs-1 fw-semibold mt-4">MAN</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100 pt-5" style="background-color: rgb(251, 205, 0)">
                            <i class="fa-solid fa-screwdriver-wrench fa-2xl" style="color: #ffffff;"></i>    
                            <p class="fs-1 fw-semibold mt-4">MACHINE</p>   
                        </div>                     
                    </div>   
                    <div class="col mt-3">
                        <div class="h-100 pt-5" style="background-color: rgb(29, 108, 218)">
                            <i class="fa-solid fa-list-check fa-2xl" style="color: #ffffff;"></i>
                            <p class="fs-1 fw-semibold mt-4">METHOD</p>
                        </div>
                    </div>                        
                    <div class="col mt-3">
                        <div class="h-100 pt-5" style="background-color: rgb(182, 5, 182)">
                            <i class="fa-solid fa-boxes-stacked fa-2xl " style="color: #ffffff;"></i>
                            <p class="fs-1 fw-semibold mt-4">MATERIAL</p>
                        </div>
                    </div>      
                </div>                       
                        {{-- <div class="row text-center mt-2">
                            <div class="col-6">
                                <i class="fa-solid fa-list-check fa-2xl" style="color: #ffffff;"></i>
                                <p class="fs-5 mt-2">METHOD</p>
                            </div>                        
                            <div class="col-6">
                                <i class="fa-solid fa-boxes-stacked fa-2xl " style="color: #ffffff;"></i>
                                <p class="fs-5 mt-2">MATERIAL</p>
                            </div>
                        </div> --}}
            </div>

            {{-- target, ok, reject --}}
            <div class="col-4" style="padding: 3.8rem 0rem 0rem 5rem">
                <div class="row text-light ">
                    <div class="col-4 align-self-center" style="font-size:2vw">TARGET</div>
                    <div class="col-7 text-end fw-semibold" style="font-size:3.5vw"> 1234</div>
                    <div class="col-1 text-start align-self-center pt-5" style="font-size:1.8vw"> pcs </div>
                </div>
                <div class="row text-light" style="padding: 2rem 0rem 4rem 0rem"> 
                    <div class="col-4 align-self-center" style="font-size:2vw">OK</div>
                    <div class="col-7 text-end fw-semibold" style="font-size:3.5vw"> 12345</div>
                    <div class="col-1 text-start align-self-center pt-5" style="font-size:1.8vw"> pcs</div>
                </div>
                <div class="row text-light "> 
                    <div class="col-4 align-self-center" style="font-size:2vw">REJECTION</div>
                    <div class="col-7 text-end fw-semibold" style="font-size:3.5vw"> 12345</div>
                    <div class="col-1 text-start align-self-center pt-5" style="font-size:1.8vw"> pcs</div>
                </div>

                {{-- <table class="text-light" >
                    <tr>
                        <td> TARGET</td>
                        <td style="font-size:3vw"> 123 </td>
                        <td> PCS</td>
                    </tr> 
                    <tr>
                        <td> OK</td>
                        <td style="font-size:3vw"> 4567</td>
                        <td> PCS</td>
                    </tr>
                    <tr>
                        <td> REJECTION</td>
                        <td> 89101 </td>
                        <td> PCS</td>
                    </tr>
                </table> --}}
            </div>

            {{-- achievement--}}
            <div class="col-4 col-xl-5 text-light text-center "> 
                <div class="row">
                    <div class="col-12 text-light text-center fw-semibold" style="font-size: 1.8vw;">
                        ACHIEVEMENT
                    </div>
                    <div class="col-12 text-light text-end fw-semibold" style="font-size: 30vh; margin:-5rem 0rem 0rem 0rem;"> 100 
                        <sub class="text-light fw-semibold" style="font-size: 5vh; margin:0px 0px 0px 0px"> %</sub>
                    </div>
                </div>
            </div>
        </div>

        {{-- running / downtime --}}
        <div class="row" style="height:9vh">
            @if($runing != null)
                <div class="col bg-success text-light text-center fw-semibold" style="font-size:3vw; letter-spacing:5px;">RUNNING</div>
            @else
                <div class="col text-light text-center fw-semibold" style="font-size:3vw; letter-spacing:5px; background-color:red"> DOWNTIME - {{ $downtime }}</div>
            @endif
        </div>
        
        {{-- availability --}}
        {{-- <div class="row my-2 py-3" style="height:22vh; background-color:rgb(117, 117, 117)">
            <div class="col-3 text-center fs-4 fw-semibold ">
                <span class="d-block fs-1 fw-semibold">PERFORMANCE</span>
                <span class="d-block text-center" style="font-size: 6vw;"> 100
                    <sub class="fs-1 fw-semibold">%</sub>
                </span>
            </div>
            <div class="col-3 text-center fs-4 fw-semibold">
                <span class="d-block fs-1 fw-semibold">AVAILABILITY</span>
                <span class="d-block text-center" style="font-size: 6vw;">100
                    <sub class="fs-1 fw-semibold">%</sub>
                </span>
            </div>
            <div class="col-3 text-center fs-4 fw-semibold">
                <span class="d-block fs-1 fw-semibold">QUALITY RATE</span>
                <span class="d-block text-center" style="font-size: 6vw;">100
                    <sub class="fs-1 fw-semibold">%</sub>
                </span>
            </div>
            <div class="col-3 text-center fs-4 fw-semibold">
                <span class="d-block fs-1 fw-semibold">LINE STOP</span>
                <span class="d-block text-center" style="font-size: 6vw;">10
                    <sub class="fs-1 fw-semibold">menit</sub>
                </span>
            </div>        
        </div> --}}

        <div class="row mt-4 mb-2 pt-3 text-light" style="height:25vh; background-color:rgb(117, 117, 117)">
            <div class="col-lg-6 col-xl-12">
                <div class="row text-center" style="font-size: 3.2rem">
                    <div class="col-3 fw-semibold">PERFORMANCE</div>
                    <div class="col-3 fw-semibold"> AVAILABILITY</div>
                    <div class="col-3 fw-semibold"> QUALITY RATE</div>
                    <div class="col-3 fw-semibold"> LINE STOP</div>
                </div>
                <div class="row text-center fw-semibold " style="font-size:16vh; margin:-3rem 0rem 0rem 0rem">
                    <div class="col-3" >100
                        <sub class="fw-semibold" style="font-size:5rem; margin:0px 0px 0px -20px">%</sub>
                    </div>
                    <div class="col-3">100
                        <sub class="fw-semibold" style="font-size:5rem; margin:0px 0px 0px -20px">%</sub> 
                    </div>
                    <div class="col-3"> 100
                        <sub class="fw-semibold" style="font-size:5rem; margin:0px 0px 0px -20px">%</sub>
                    </div>
                    <div class="col-3">10
                        <sub class="fw-semibold" style="font-size:5rem; margin:0px 0px 0px -20px">menit</sub>
                    </div>
                </div>
            </div>
        </div>

        {{-- <footer> --}}
            <div class="row d-flex pt-1 bg-dark" style="font-size: 3rem; height: 7vh;">
                <div class="col-2 text-light text-start ps-2" style="background: linear-gradient( 220deg, transparent 100px, #ff0026 0);">TOP REJECT</div>
                <marquee class="col-4 bg-dark text-light" scrolldelay="150"> KEROPOS, DENT, BOCOR </marquee>
                <div class="col-3 text-light text-start ps-5" style="background: linear-gradient( 220deg, transparent 100px, #ff0026 0);">TOP DOWNTIME</div>
                <marquee class="col-3 bg-dark text-light" scrolldelay="250"> INSTOCKER TROUBLE, ROBOT ERROR </marquee>
            </div>
        {{-- </footer> --}}
    </div>

    @else
    <div class="container-fluid bg-dark" style="height: 100vh">
        <div class="row bg-dark">
            <div class="col-8 bg-dark text-light fw-semibold" style="font-size: 2.5vw;"> MA HN 001</div>
            <div class="col-4 fw-1 text-light text-end fw-semibold" style= "background: linear-gradient( 30deg, transparent 120px, #8c8c8c 0); letter-spacing: 5px; font-size:2.5vw; padding:0px 250px 0px 0px">LAY OFF</div>  
        </div>
        
        <div class="row"> 
            <div class="col bg-dark text-light fw-bold" style="font-size: 3vw;">PIPE SUB ASSY WATER PB1122332432</div>
        </div>
        
        <div class="row bg-dark text-light text-center">
            <div class="col justify-content-center mt-3 fw-bold" style="font-size: 25vw;"> LAY OFF </div>
        </div>
    </div>

    @endif

</body>
</html>
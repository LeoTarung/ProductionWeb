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
            <div class="col-9 bg-dark text-light fw-semibold fs-1" > MA HN 001</div>
            @if($urgent != null)
                <div class="col-3 text-light text-center fw-semibold fs-1 ps-5" 
                style="background: linear-gradient( 60deg, transparent 45px, #198754 0); letter-spacing: 5px;">
                    NORMAL
                </div>
            @else
                <div class="col-3 text-light text-center fw-semibold fs-1 ps-5" 
                    style="background: linear-gradient( 50deg, transparent 45px, #ff0026 0); letter-spacing: 5px;">URGENT</div>
            @endif
            
        </div>
        
        {{-- part --}}
        <div class="row"> 
            <div class="col bg-dark text-light fw-bold display-5">PIPE SUB ASSY WATER PB1122332432</div>
        </div>
        
        {{-- henkaten, target, dll  --}}
        <div class="row bg-dark mt-1" >
            {{-- henkaten --}}
            <div class="col-4 col-xl-3 text-center text-light">
                <p class="fw-semibold fs-3"> HENKATEN </p>
                <div class="row row-cols-2 text-center flex-wrap fs-5 ps-2">
                    <div class="col">
                        @if($man != null)
                            <div class="h-100 pt-4" style="background-color: red">
                                <i class="fa-solid fa-user-gear fa-2xl"  style="color: #ffffff; background-color:red"></i> 
                                <p class="fs-4 fw-semibold mt-2" style="padding: 10px 0px -10px 0px">MAN</p>
                            </div>
                        @else
                            <div class="h-100 pt-4" style="background-color: rgb(117, 117, 117)">
                                <i class="fa-solid fa-user-gear fa-2xl"  style="color: #ffffff; "></i> 
                                <p class="fs-4 fw-semibold mt-2" style="padding: 10px 0px -10px 0px">MAN</p>
                            </div>
                        @endif    
                    </div>
                    <div class="col">
                        @if($machine != null)
                            <div class="h-100 pt-4" style="background-color: rgb(251, 205, 0)">
                                <i class="fa-solid fa-screwdriver-wrench fa-2xl" style="color: #ffffff;"></i>    
                                <p class="fs-4 fw-semibold mt-2" style="padding: 10px 0px -10px 0px">MACHINE</p>   
                            </div> 
                        @else
                            <div class="h-100 pt-4" style="background-color: rgb(117, 117, 117)">
                                <i class="fa-solid fa-screwdriver-wrench fa-2xl" style="color: #ffffff;"></i>    
                                <p class="fs-4 fw-semibold mt-2" style="padding: 10px 0px -10px 0px">MACHINE</p>   
                            </div>  
                        @endif                   
                    </div>   
                    <div class="col mt-3">
                        @if($method != null)
                            <div class="h-100 pt-4" style="background-color: rgb(29, 108, 218)">
                                <i class="fa-solid fa-list-check fa-2xl" style="color: #ffffff;"></i>
                                <p class="fs-4 fw-semibold mt-2" style="padding: 10px 0px -10px 0px">METHOD</p>
                            </div>
                        @else
                            <div class="h-100 pt-4" style="background-color: rgb(117, 117, 117)">
                                <i class="fa-solid fa-screwdriver-wrench fa-2xl" style="color: #ffffff;"></i>    
                                <p class="fs-4 fw-semibold mt-2" style="padding: 10px 0px -10px 0px">METHOD</p>   
                            </div>  
                        @endif           
                    </div>                        
                    <div class="col mt-3">
                        @if($material != null)
                            <div class="h-100 pt-4" style="background-color: rgb(182, 5, 182)">
                                <i class="fa-solid fa-boxes-stacked fa-2xl " style="color: #ffffff;"></i>
                                <p class="fs-4 fw-semibold mt-2" style="padding: 10px 0px -10px 0px">MATERIAL</p>
                            </div>
                        @else
                            <div class="h-100 pt-4" style="background-color: rgb(117, 117, 117)">
                                <i class="fa-solid fa-screwdriver-wrench fa-2xl" style="color: #ffffff;"></i>    
                                <p class="fs-4 fw-semibold mt-2" style="padding: 10px 0px -10px 0px">MATERIAL</p>   
                            </div>  
                        @endif 
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
            <div class="col-4" style="padding: 90px 0px 0px 0px">
                <div class="row text-light  ms-2">
                    <div class="col-7 fs-1 fw-semibold align-self-center" >TARGET</div>
                    <div class="col-4 fs-1 align-self-center text-end fw-semibold"> 1234</div>
                    <div class="col-1 fs-2 text-start align-self-center pt-2"> pcs </div>
                </div>
                <div class="row text-light ms-2"> 
                    <div class="col-7 fs-1 fw-semibold align-self-center" >OK</div>
                    <div class="col-4 fs-1 align-self-center text-end fw-semibold"> 12345</div>
                    <div class="col-1 fs-2 text-start align-self-center pt-2"> pcs</div>
                </div>
                <div class="row text-light ms-2"> 
                    <div class="col-7 fs-1 fw-semibold align-self-center" >REJECTION</div>
                    <div class="col-4 fs-1 align-self-center text-end fw-semibold"> 12345</div>
                    <div class="col-1 fs-2 text-start align-self-center pt-2"> pcs</div>
                </div>
            </div>

            {{-- achievement--}}
            <div class="col-4 col-xl-5 text-light text-center "> 
                <div class="row">
                    <div class="col-12 text-light text-center fw-semibold fs-3">
                        ACHIEVEMENT
                    </div>
                    <div class="col-12 text-light fw-semibold" style="font-size: 14rem; margin:-2rem 0rem -4.5rem 0rem" > 100 
                        <sub class="text-light fw-semibold display-5" style="margin: 0px 0px 0px -40px"> %</sub>
                    </div>
                </div>
            </div>
        </div>

        {{-- running / downtime --}}
        <div class="row mt-3">
            @if($runing != null)
                <div class="col bg-success fs-1 text-light text-center fw-semibold" style="letter-spacing:5px;">RUNNING</div>
            @else
                <div class="col fs-1 text-light text-center fw-semibold" style="letter-spacing:5px; background-color:red"> DOWNTIME - {{ $downtime }}</div>
            @endif
        </div>
        
        {{-- availability --}}
        <div class="row mt-3 mb-2 pt-1 text-light" style="background-color:rgb(117, 117, 117)">
            <div class="col-lg-6 col-xl-12">
                <div class="row text-center fs-3">
                    <div class="col-3 fw-semibold">PERFORMANCE</div>
                    <div class="col-3 fw-semibold"> AVAILABILITY</div>
                    <div class="col-3 fw-semibold"> QUALITY RATE</div>
                    <div class="col-3 fw-semibold"> LINE STOP</div>
                </div>
                <div class="row text-center fw-semibold h-100" style="font-size:7.1rem; margin: -2.5rem 0rem -1rem 0rem">
                    <div class="col-3" >10
                        <sub class="fw-semibold display-5" style="margin:0px 0px 0px -20px">%</sub>
                    </div>
                    <div class="col-3">100
                        <sub class="fw-semibold display-5" style="margin:0px 0px 0px -20px">%</sub> 
                    </div>
                    <div class="col-3"> 100
                        <sub class="fw-semibold display-5" style="margin:0px 0px 0px -20px">%</sub>
                    </div>
                    <div class="col-3">10
                        <sub class="fw-semibold display-5" style="margin:0px 0px 0px -20px">menit</sub>
                    </div>
                </div>
            </div>
        </div>

        {{-- <footer> --}}
            <div class="row d-flex fs-4">
                <div class="col-2 text-light text-start ps-4" style="background: linear-gradient( 230deg, transparent 50px, #ff0026 0);">TOP REJECT</div>
                <marquee class="col-4 bg-dark text-light" scrolldelay="150"> KEROPOS, DENT, BOCOR </marquee>
                <div class="col-2 text-light text-start " style="background: linear-gradient( 230deg, transparent 25px, #ff0026 0);">TOP DOWNTIME</div>
                <marquee class="col-4 bg-dark text-light" scrolldelay="250"> INSTOCKER TROUBLE, ROBOT ERROR </marquee>
            </div>
        {{-- </footer> --}}
    </div>

    @else
    <div class="container-fluid bg-dark" style="height: 100%">
        <div class="row bg-dark">
            <div class="col-9 bg-dark text-light fw-semibold fs-1"> MA HN 001</div>
            <div class="col-3 fs-1 text-light text-center ps-5 fw-semibold" style= "background: linear-gradient( 60deg, transparent 45px, #8c8c8c 0); letter-spacing: 5px;">LAY OFF</div>  
        </div>
        
        <div class="row"> 
            <div class="col bg-dark text-light fw-bold display-5">PIPE SUB ASSY WATER PB1122332432</div>
        </div>
        
        <div class="row bg-dark text-light text-center">
            <div class="col justify-content-center mt-3 fw-bold" style="font-size: 25.15vw;"> LAY OFF </div>
        </div>
    </div>

    @endif

</body>
</html>
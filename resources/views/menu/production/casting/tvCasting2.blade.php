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

    <title>NM | TV CASTING</title>

</head>

<body class="kkbody">
    <div class="container-fluid kkconflu">
        <div class="row">
    {{-- kiri --}}
        @if( $id1 == 1)
            <div class="col-6 kkka" >
                <div class="row mt-3">
                    <div class="col-9 mt-3 mb-2 kknama"> 
                        <span class="kkline"> {{$kaline}} </span>
                        <br>
                        <span class="kkpart"> {{ $kapart }}</span>
                    </div>
    
                    {{-- perubahan urgent --}}
                    @if($urgent != null) 
                        <div class="col-3 "> 
                            <div class="d-flex align-items-center kkstatus box">
                                URGENT
                            </div>
                        </div>
                    @else
                    @endif
    
                </div>
    
                <div class="row kkatas mt-4 mb-1">
                        <div class="col-4 kkaktual">
                            <div class="text-center rounded-0">
                                <div class="kkpenjelasan box" id="aktual">AKTUAL</div>
                                <div class="kkangka"></div>
                            </div>
                        </div>
                        <div class="col-4 kktarget">
                            <div class="text-center rounded-0">
                                <div class="kkpenjelasan box">TARGET</div>
                                {{-- <div class="kkangka" id="target1"></div>x --}}
                                @foreach ($input as $item)
                                    <div class="kkangka" id="target1">{{ $item->cycle_time }}</div>
                                @endforeach

                            </div>
                        </div>
    
                        <div class="col-4 text-center kkparent ">
                            <div class="parallelogram boxperform kkchild">
                                <h1 class="kkpperform"> PERFORMANCE   </h1>
                                @if ($persen >= 95)
                                    <h1 style="font-size: 30px; margin-top: 40px">
                                    <span class="kkpersen1" id="persen"></span>
                                    <span class="kksymbol">%</span>
                                    </h1>
                                @else
                                    <h1 style="font-size: 30px; margin-top: -50px">
                                        <span class="kkpersen2" id="persen"></span>
                                        <span class="kksymbol">%</span>
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
                    <div class="row mt-5 mb-2"> 
                        <div class="kkdowntime shadow mt-3 "> DOWNTIME - {{$downtime}}</div>
                    </div>
                @else 
                    <div class="row mt-5 mb-2"> 
                        <div class="kkrunning  mt-3 "> RUNNING </div>
                    </div>
                @endif
    
                
                {{-- jika henkaten ada --}}
                @if($preparation != null) 
                <div class="row mb-4">
    
                    @if($prep == 1 )
                        <div class="col-4 mt-4 d-flex">
                            <div class="col-2 kkhenkaten1">
                                <p class="kkhenka1">HENKATEN</p>
                            </div>
    
                            <div id="henkaten1" class="col-10 kkmanpower1">{{ $isi }} </div>
    
                        </div>
    
                    @elseif($prep == 2)
                        <div class="col-4 mt-4 d-flex ">
                             <div class="col-2 kkhenkaten2">
                                <p class="kkhenka2">HENKATEN</p>
                            </div>
    
                                <div class="row kkprep2">
                                    <div id="henkaten2a" class="col-10 kkmanpower2">{{ $isi2a }}</div>
                                    <div id="henkaten2b" class="col-10 mb-4 kkmethod2">{{ $isi2b }}</div>
                                </div>
                        </div>
    
                    @elseif($prep == 3)
                        <div class="col-4 mt-4 d-flex ">
                                
                            <div class="col-2 kkhenkaten3" >
                                <p class="kkhenka3">HENKATEN</p>
                            </div>
                        
                            <div class="row kkprep3">
                                <div id="henkaten3a" class="col-10 kkmanpower3">{{ $isi3a }}</div>
                                <div id="henkaten3b" class="col-10 kkmethod3 ">{{ $isi3b }}</div>
                                <div id="henkaten3c" class="col-10 mb-4 kkmachine3 ">{{ $isi3c }}</div>
                            </div>
                        </div>
    
                    @elseif($prep == 4)
                        <div class="col-4 mt-3 d-flex ">
                                    
                            <div class="col-2 kkhenkaten4">
                                <p class="kkhenka4"> HENKATEN</p>
                            </div>
                        
                            <div class="row">
                                <div class="col-10 kkmanpower4 ">{{ $isi4a }}</div>
                                <div class="col-10 kkmethod4 ">{{ $isi4b }}</div>
                                <div class="col-10 kkmachine4 ">{{ $isi4c }}</div>
                                <div class="col-10 kkmaterial4 ">{{ $isi4d }}</div>
                            </div>
                        </div>
                    
                    @endif
    
    
                    <div class="col-8 mb-2">
                        <div class="row mt-4 mb-1"> 
                            <div class="col-3 mt-2 pt-2 text-center m-auto kkavaila"> AVA</div>
                            <div class="col-9 mt-1">
                                <div class="progress rounded-3 border border-3" style="height: 50px;">
                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45</div>
                                </div>
                            </div>
                        </div>
                
                        <div class="row mt-4 mb-1">
                            <div class="col-3 text-center m-auto kkqurate"> QUA </div>
                            <div class="col-9">
                                <div class="progress rounded-3 border border-3" style="height: 50px;">
                                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60</div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row mt-4 mb-1">
                            <div class="col-3 text-center m-auto kkshift"> SHIFT 2</div>
                            <div class="col-9">
                                <div class="row ms-1">
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam"   style="margin-top: 10px;">07</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">08</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">09</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">10</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">11</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">12</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">13</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">14</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">15</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">16</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                @else
    
                {{-- jika henkaten tidak ada --}}
                <div class="row mb-4">
                    <div class="col-12 mb-4">
                        <div class="row mt-4 mb-3"> 
                            <div class="col-3 text-center m-auto kkavaila"> AVAILABILITY </div>
                            <div class="col-9">
                                <div class="progress rounded-3 border border-3" style="height: 60px;">
                                    <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45</div>
                                </div>
                            </div>
                        </div>
                
                        <div class="row mt-4 mb-3">
                            <div class="col-3 text-center m-autokk qurate"> QUALITY RATE </div>
                            <div class="col-9">
                                <div class="progress rounded-3 border border-3" style="height: 60px;">
                                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60</div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row mt-4 mb-3">
                            <div class="col-3 text-center m-auto kkshift"> SHIFT 2</div>
                            <div class="col-9">
                                <div class="row ms-1">
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam"   style="margin-top: 10px;">07</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">08</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">09</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">10</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">11</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">12</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">13</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">14</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">15</p>
                                    </div>
                                    <div class="col-1 text-center border border-light">
                                        <p class="kkjam" style="margin-top: 10px;">16</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        @elseif($id1 != 1)
        <div class="col-6 kkcomingsoon border">
            <div class="row mt-3">
                <div class="col-11 text-light">
                    <h2>BELUM PREPARATION</h2>
                    <h2>SEGERA LAKUKAN PREPARATION</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-0">
                    <div class="container-fluid p-0">
                        <img class="img-fluid" src="/asset/img/cms.png" alt="coming soon">
                    </div>
                </div>
            </div>
        </div>
        @endif
    {{-- kanan --}}
        @if($id2 == 2)
            <div class="col-6 kkki">
                <div class="row mt-3">
                    <div class="col-9 mt-3 mb-2 kknama"> 
                        <span class="kkline"> NM.FR.AH091 </span>
                        <br>
                        <span class="kkpart"> BRKT PCS (SFG)</span>
                    </div>
    
                    {{-- perubahan urgent --}}
                    @if($urgent2 != null) 
                        <div class="col-3 "> 
                            <div class="d-flex align-items-center kkstatus box">
                                URGENT
                            </div>
                        </div>
                    @else
                    @endif
    
                </div>
    
                <div class="row kkatas mt-4 mb-1">
                        <div class="col-4 kkaktual">
                            <div class="text-center rounded-0">
                                <div class="kkpenjelasan box">AKTUAL</div>
                                <div class="kkangka">{{ $aktual2 }}</div>
                            </div>
                        </div>
                        <div class="col-4 kktarget">
                            <div class="text-center rounded-0">
                                <div class="kkpenjelasan box">TARGET</div>
                                <div class="kkangka" id="target2"></div>
                            </div>
                        </div>
    
                        <div class="col-4 text-center kkparent ">
                            <div class="parallelogram boxperform kkchild">
                                <h1 class="kkpperform"> PERFORMANCE   </h1>
                                @if ($persen2 >= 95)
                                    <h1 style="font-size: 30px; margin-top: -40px">
                                    <span class="kkpersen1" id="target"></span>
                                    <span class="kksymbol">%</span>
                                    </h1>
                                @else
                                    <h1 style="font-size: 30px; margin-top: -50px">
                                        <span class="kkpersen2"></span>
                                        <span class="kksymbol">%</span>
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
                
                @if($running2 != null) 
                    <div class="row mt-5 mb-2"> 
                        <div class="kkdowntime shadow mt-3 "> DOWNTIME - {{$downtime2}}</div>
                    </div>
                @else 
                    <div class="row mt-5 mb-2"> 
                        <div class="kkrunning  mt-3 "> RUNNING </div>
                    </div>
                @endif
    
                
                {{-- jika henkaten ad --}}
                @if($preparation2 != null) 
                <div class="row mb-4">
    
                    @if($prep2 == 1 )
                        <div class="col-4 mt-4 d-flex">
                            <div class="col-2 kkhenkaten1">
                                <p class="kkhenka1">HENKATEN</p>
                            </div>
    
                            <div id="henkaten5" class="col-10 kkmanpower1">{{ $isi5 }} </div>
    
                        </div>
    
                    @elseif($prep2 == 2)
                        <div class="col-4 mt-4 d-flex ">
                             <div class="col-2 kkhenkaten2">
                                <p class="kkhenka2">HENKATEN</p>
                            </div>
    
                                <div class="row kkprep2">
                                    <div id="henkaten6a" class="col-10 kkmanpower2">{{ $isi6a }}</div>
                                    <div id="henkaten6b" class="col-10 mb-4 kkmethod2">{{ $isi6b }}</div>
                                </div>
                        </div>
    
                    @elseif($prep2 == 3)
                        <div class="col-4 mt-4 d-flex ">
                                
                            <div class="col-2 kkhenkaten3" >
                                <p class="kkhenka3">HENKATEN</p>
                            </div>
                        
                            <div class="row kkprep3">
                                <div id="henkaten7a" class="col-10 kkmanpower3 ">{{ $isi7a }}</div>
                                <div id="henkaten7b" class="col-10 kkmethod3 ">{{ $isi7b }}</div>
                                <div id="henkaten7c" class="col-10 mb-4 kkmachine3 ">{{ $isi7c }}</div>
                            </div>
                        </div>
    
                    @elseif($prep2 == 4)
                        <div class="col-4 mt-3 d-flex ">
                                    
                            <div class="col-2 kkhenkaten4">
                                <p class="kkhenka4"> HENKATEN</p>
                            </div>
                        
                            <div class="row">
                                <div class="col-10 kkmanpower4 ">{{ $isi8a }}</div>
                                <div class="col-10 kkmethod4 ">{{ $isi8b }}</div>
                                <div class="col-10 kkmachine4 ">{{ $isi8c }}</div>
                                <div class="col-10 kkmaterial4">{{ $isi8d }}</div>
                            </div>
                        </div>
                    
                    @endif
    
    
                    <div class="col-8 mb-2">
                        <div class="row mt-4 mb-1"> 
                            <div class="col-3 mt-2 pt-2 text-center m-auto kkavaila"> AVA</div>
                            <div class="col-9 mt-1">
                                <div class="progress rounded-3 border border-3" style="height: 50px;">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100</div>
                                </div>
                            </div>
                        </div>
                
                        <div class="row mt-4 mb-1">
                            <div class="col-3 text-center m-auto kkqurate"> QUA </div>
                            <div class="col-9">
                                <div class="progress rounded-3 border border-3" style="height: 50px;">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100</div>
                                </div>
                            </div>
                        </div>
    
                        @if($shift == 1)
                            <div class="row mt-4 mb-1">
                                <div class="col-3 text-center m-auto kkshift"> SHIFT 1</div>
                                <div class="col-9">
                                    <div class="row ms-1">
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">00</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">01</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">02</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">03</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">04</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">05</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">06</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">07</p>
                                            {{-- kkjam 7.10 --}}
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
            
                            @elseif($shift == 2)
                            <div class="row mt-4 mb-1">
                                <div class="col-3 text-center m-auto kkshift"> SHIFT 2</div>
                                <div class="col-9">
                                    <div class="row ms-1">
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam"   style="margin-top: 10px;">07</p>
                                            {{-- kkjam 7.10 --}}
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">08</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">09</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">10</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">11</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">12</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">13</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">14</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">15</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">16</p>
                                    </div>
                                </div>
                                </div>
                            </div>
            
                            @elseif($shift == 3)
                            <div class="row mt-4 mb-1">
                                <div class="col-3 text-center m-auto kkshift"> SHIFT 3</div>
                                <div class="col-9">
                                    <div class="row ms-1">
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam"   style="margin-top: 10px;">16</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">17</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">18</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">19</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">20</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">21</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">22</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">23</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">00</p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
            
                            @endif
                        
                    </div>
                </div>
    
                @else
    
                {{-- jika henkaten tidak ada --}}
                <div class="row mb-4">
                    <div class="col-12 mb-4">
                        <div class="row mt-4 mb-3"> 
                            <div class="col-3 text-center m-auto availa"> AVAILABILITY </div>
                            <div class="col-9">
                                <div class="progress rounded-3 border border-3" style="height: 60px;">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100</div>
                                </div>
                            </div>
                        </div>
                
                        <div class="row mt-4 mb-3">
                            <div class="col-3 text-center m-auto qurate"> QUALITY RATE </div>
                            <div class="col-9">
                                <div class="progress rounded-3 border border-3" style="height: 60px;">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100</div>
                                </div>
                            </div>
                        </div>
    
                        
                            @if($shift == 1)
                            <div class="row mt-4 mb-1">
                                <div class="col-3 text-center m-auto kkshift"> SHIFT 1</div>
                                <div class="col-9">
                                    <div class="row ms-1">
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">00</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">01</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">02</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">03</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">04</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">05</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">06</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">07</p>
                                            {{-- kkjam 7.10 --}}
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
            
                            @elseif($shift == 2)
                            <div class="row mt-4 mb-1">
                                <div class="col-3 text-center m-auto kkshift"> SHIFT 2</div>
                                <div class="col-9">
                                    <div class="row ms-1">
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam"   style="margin-top: 10px;">07</p>
                                            {{-- kkjam 7.10 --}}
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">08</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">09</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">10</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">11</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">12</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">13</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">14</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">15</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">16</p>
                                    </div>
                                </div>
                                </div>
                            </div>
            
                            @elseif($shift == 3)
                            <div class="row mt-4 mb-1">
                                <div class="col-3 text-center m-auto kkshift"> SHIFT 3</div>
                                <div class="col-9">
                                    <div class="row ms-1">
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam"   style="margin-top: 10px;">16</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">17</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">18</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">19</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">20</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">21</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">22</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">23</p>
                                        </div>
                                        <div class="col-1 text-center border border-light">
                                            <p class="kkjam" style="margin-top: 10px;">00</p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
            
                            @endif
                        
                    </div>
                </div>
                @endif
            </div> 
        @elseif($id2 != 2)      
        
        @endif
        </div>
        
    </div>

    <footer class="container-fluid d-flex align-self-center kkfooter ">
    <marquee >
        <p>REALTIME MONITORING</p>
        </marquee> 
    </footer>

    <script>
    // kiri
    
    
        var target1 = 5000;
        // var target = console.log("test")

        const element = document.getElementById("target1");
             let i = 1  ; 
        setInterval(function() {element.innerHTML = i++}, target1);
        //  if ( ((2*60) <=  now && now <(2 * 60)))

        var aktual = 2;

        var persen = (aktual / i * 100);
        // var persen = 96;

        document.getElementById("persen").innerHTML = persen;	


        @if($prep == 1)
            let henkaten1 = document.getElementById('henkaten1');
             console.log(henkaten1);

            let warna = "{{ $isi }}";
                if (warna == "MAN POWER") {
                    // henkaten1.setAttribute('style', `background-color: #DC3535;`);
                    henkaten1.style.backgroundColor = '#DC3535';

                } else if (warna == "METHOD") {
                    //  henkaten1.setAttribute('style', `background-color: #fec746;`);
                    henkaten1.style.backgroundColor = '#fec746';

                } else if (warna == "MACHINE") {
                    //  henkaten1.setAttribute('style', `background-color: #A555EC;`);
                    henkaten1.style.backgroundColor = '#A555EC';

                } else if (warna == "MATERIAL") {
                    //  henkaten1.setAttribute('style', `background-color: #03C988;`);
                    henkaten1.style.backgroundColor = '#03C988';
                }

        @elseif($prep == 2)
            let henkaten2a = document.getElementById('henkaten2a');
            let henkaten2b = document.getElementById('henkaten2b');

            console.log(henkaten2a);
            console.log(henkaten2b);

            let warna2a = "{{ $isi2a }}";
            let warna2b = "{{ $isi2b }}";
          
                if (warna2a == "MAN POWER" ) {
                    henkaten2a.style.backgroundColor = '#DC3535';
                } else if (warna2a == "METHOD" ){
                    henkaten2a.style.backgroundColor = '#fec746';
                } else if (warna2a == "MACHINE" ){
                    henkaten2a.style.backgroundColor = '#A555EC';
                } else if (warna2a == "MATERIAL" ) {
                    henkaten2a.style.backgroundColor = '#03C988';
                }   
           
                if (warna2b == "MAN POWER" ) {
                    henkaten2b.style.backgroundColor = '#DC3535';
                } else if (warna2b == "METHOD" ) {                      
                    henkaten2b.style.backgroundColor = '#fec746';
                } else if (warna2b == "MACHINE" ) {                       
                    henkaten2b.style.backgroundColor = '#A555EC';
                } else if (warna2b == "MATERIAL" ) { 
                    henkaten2b.style.backgroundColor = '#03C988';
                }  

        @elseif($prep == 3)
            let henkaten3a = document.getElementById('henkaten3a');
            let henkaten3b = document.getElementById('henkaten3b');
            let henkaten3c = document.getElementById('henkaten3c');

            console.log(henkaten3a);
            console.log(henkaten3b);
            console.log(henkaten3c);

            let warna3a = "{{ $isi3a }}";
            let warna3b = "{{ $isi3b}}";
            let warna3c = "{{ $isi3c }}";
          
                if (warna3a == "MAN POWER" ) {
                    henkaten3a.style.backgroundColor = '#DC3535';
                } else if (warna3a == "METHOD" ){
                    henkaten3a.style.backgroundColor = '#fec746';
                } else if (warna3a == "MACHINE" ){
                    henkaten3a.style.backgroundColor = '#A555EC';
                } else if (warna3a == "MATERIAL" ) {
                    henkaten3a.style.backgroundColor = '#03C988';
                }   
           
                if (warna3b == "MAN POWER" ) {
                    henkaten3b.style.backgroundColor = '#DC3535';
                } else if (warna3b == "METHOD" ) {                      
                    henkaten3b.style.backgroundColor = '#fec746';
                } else if (warna3b == "MACHINE" ) {                       
                    henkaten3b.style.backgroundColor = '#A555EC';
                } else if (warna3b == "MATERIAL" ) { 
                    henkaten3b.style.backgroundColor = '#03C988';
                } 

                if (warna3c == "MAN POWER" ) {
                    henkaten3c.style.backgroundColor = '#DC3535';
                } else if (warna3c == "METHOD" ) {                      
                    henkaten3c.style.backgroundColor = '#fec746';
                } else if (warna3c == "MACHINE" ) {                       
                    henkaten3c.style.backgroundColor = '#A555EC';
                } else if (warna3c == "MATERIAL" ) { 
                    henkaten3c.style.backgroundColor = '#03C988';
                } 

        @endif    

    // kanan
        
        var target2 = 5000;
        // var target = console.log("test")

        const element2 = document.getElementById("target2");
             let x = 1; 
        setInterval(function() {element2.innerHTML = x++}, target2);
        //  if ( ((2*60) <=  now && now <(2 * 60)))

    @if($prep2 == 1)
            let henkaten5 = document.getElementById('henkaten5');
             console.log(henkaten5);

            let warna5 = "{{ $isi5 }}";
                if (warna5 == "MAN POWER") {
                    // henkaten2.setAttribute('style', `background-color: #DC3535;`);
                    henkaten5.style.backgroundColor = '#DC3535';

                } else if (warna5 == "METHOD") {
                    //  henkaten5.setAttribute('style', `background-color: #fec756;`);
                    henkaten5.style.backgroundColor = '#fec756';

                } else if (warna5 == "MACHINE") {
                    //  henkaten5.setAttribute('style', `background-color: #A555EC;`);
                    henkaten5.style.backgroundColor = '#A555EC';

                } else if (warna5 == "MATERIAL") {
                    //  henkaten5.setAttribute('style', `background-color: #03C988;`);
                    henkaten5.style.backgroundColor = '#03C988';
                }

        @elseif($prep2 == 2)
            let henkaten6a = document.getElementById('henkaten6a');
            let henkaten6b = document.getElementById('henkaten6b');

            console.log(henkaten6a);
            console.log(henkaten6b);

            let warna6a = "{{ $isi6a }}";
            let warna6b = "{{ $isi6b }}";
          
                if (warna6a == "MAN POWER" ) {
                    henkaten6a.style.backgroundColor = '#DC3535';
                } else if (warna6a == "METHOD" ){
                    henkaten6a.style.backgroundColor = '#fec746';
                } else if (warna6a == "MACHINE" ){
                    henkaten6a.style.backgroundColor = '#A555EC';
                } else if (warna6a == "MATERIAL" ) {
                    henkaten6a.style.backgroundColor = '#03C988';
                }   
           
                if (warna6b == "MAN POWER" ) {
                    henkaten6b.style.backgroundColor = '#DC3535';
                } else if (warna6b == "METHOD" ) {                      
                    henkaten6b.style.backgroundColor = '#fec746';
                } else if (warna6b == "MACHINE" ) {                       
                    henkaten6b.style.backgroundColor = '#A555EC';
                } else if (warna6b == "MATERIAL" ) { 
                    henkaten6b.style.backgroundColor = '#03C988';
                }  

        @elseif($prep2 == 3)
            let henkaten7a = document.getElementById('henkaten7a');
            let henkaten7b = document.getElementById('henkaten7b');
            let henkaten7c = document.getElementById('henkaten7c');

            console.log(henkaten7a);
            console.log(henkaten7b);
            console.log(henkaten7c);

            let warna7a = "{{ $isi7a }}";
            let warna7b = "{{ $isi7b}}";
            let warna7c = "{{ $isi7c }}";
          
                if (warna7a == "MAN POWER" ) {
                    henkaten7a.style.backgroundColor = '#DC3535';
                } else if (warna7a == "METHOD" ){
                    henkaten7a.style.backgroundColor = '#fec746';
                } else if (warna7a == "MACHINE" ){
                    henkaten7a.style.backgroundColor = '#A555EC';
                } else if (warna7a == "MATERIAL" ) {
                    henkaten7a.style.backgroundColor = '#03C988';
                }   
           
                if (warna7b == "MAN POWER" ) {
                    henkaten7b.style.backgroundColor = '#DC3535';
                } else if (warna7b == "METHOD" ) {                      
                    henkaten7b.style.backgroundColor = '#fec746';
                } else if (warna7b == "MACHINE" ) {                       
                    henkaten7b.style.backgroundColor = '#A555EC';
                } else if (warna7b == "MATERIAL" ) { 
                    henkaten7b.style.backgroundColor = '#03C988';
                } 

                if (warna7c == "MAN POWER" ) {
                    henkaten7c.style.backgroundColor = '#DC3535';
                } else if (warna7c == "METHOD" ) {                      
                    henkaten7c.style.backgroundColor = '#fec746';
                } else if (warna7c == "MACHINE" ) {                       
                    henkaten7c.style.backgroundColor = '#A555EC';
                } else if (warna7c == "MATERIAL" ) { 
                    henkaten7c.style.backgroundColor = '#03C988';
                } 



        @endif    


    </script>

</body>

</html>
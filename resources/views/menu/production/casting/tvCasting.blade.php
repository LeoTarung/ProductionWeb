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

    <body class="body">
        <div class="container-fluid conflu">
            <div class="row mt-3">
                <div class="col-9 mt-3 mb-3 nama"> 
                    <span class="line"> NM.FR.AH091 </span>
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
                            <div class="angka">{{ $aktual }}</div>
                        </div>
                    </div>
                    <div class="col-4 target">
                        <div class="text-center rounded-0">
                            <div class="penjelasan box">TARGET</div>
                            <div class="angka">{{ $target }}</div>
                        </div>
                    </div>

                    <div class="col-4 text-center parent ">
                        <div class="parallelogram boxperform child">
                            <h1 class="pperform"> PERFORMANCE   </h1>
                            @if ($persen >= 95)
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

                @if($prep == 1 )
                    <div class="col-4 mt-4 d-flex">
                        <div class="col-2 henkaten1">
                            <p class="henka1">HENKATEN</p>
                        </div>

                        <div id="henkaten1" class="col-10 manpower1">{{ $isi }} </div>

                    </div>

                @elseif($prep == 2)
                    <div class="col-4 mt-3 d-flex ">
                         <div class="col-2 henkaten2">
                            <p class="henka2">HENKATEN</p>
                        </div>

                            <div class="row">
                                <div id="henkaten2a" class="col-10 manpower2">{{ $isi2a }}</div>
                                <div id="henkaten2b" class="col-10 method2">{{ $isi2b }}</div>
                            </div>
                    </div>

                @elseif($prep == 3)
                    <div class="col-4 mt-3 d-flex ">
                            
                        <div class="col-2 henkaten3" >
                            <p class="henka3">HENKATEN</p>
                        </div>
                    
                        <div class="row">
                            <div id="henkaten3a" class="col-10 manpower3 ">{{ $isi3a }}</div>
                            <div id="henkaten3b" class="col-10 method3 ">{{ $isi3b }}</div>
                            <div id="henkaten3c" class="col-10 machine3 ">{{ $isi3c }}</div>
                        </div>
                    </div>

                @elseif($prep == 4)
                    <div class="col-4 mt-3 d-flex ">
                                
                        <div class="col-2 henkaten4">
                            <p class="henka4"> HENKATEN</p>
                        </div>
                    
                        <div class="row">
                            <div class="col-10 manpower4 ">{{ $isi4a }}</div>
                            <div class="col-10 method4 ">{{ $isi4b }}</div>
                            <div class="col-10 machine4 ">{{ $isi4c }}</div>
                            <div class="col-10 material4 border">{{ $isi4d }}</div>
                        </div>
                    </div>
                
                @endif


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

        <script>

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

        </script>

    </body>

    </html>
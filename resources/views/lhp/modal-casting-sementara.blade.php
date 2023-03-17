    <main>
        <div class="col-12">

            @php
                // $img1 = '/img/parts/' . {{ $idCasting->mesincasting->nama_part }} . '_a.png';
                $img1 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_a.png');
                $img2 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_b.png');
                $img3 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_c.png');
                $img4 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_d.png');
                $img5 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_e.png');
                $img6 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_f.png');
                
                // $imgSrc2 = file_exists(public_path('public/img/parts/' . $idCasting->mesincasting->nama_part . '_b.png')) ? asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_b.png') : null;
                // $imgSrc3 = file_exists($img3) ? asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_c.png') : null;
                // $imgSrc4 = file_exists($img4) ? asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_d.png') : null;
                // $imgSrc5 = file_exists($img5) ? asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_e.png') : null;
                // $imgSrc6 = file_exists($img6) ? asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_f.png') : null;
                // echo $imgSrc2;
                
            @endphp

            <div class="container">

                <img src="{{ $img1 }}" alt="Image">

                <div class=" button1 font-red">1</div>
                <div class=" button2 font-red">2</div>
                <div class=" button3 font-red">3</div>
                <div class=" button4 font-red">4</div>
                <div class=" button5 font-red">5</div>
                <div class=" button6 font-red">6</div>


            </div>
            <div class="container">
                {{-- @if ($imgSrc2 != null) --}}
                <img src="{{ $img2 }}" alt="Image">

                <div class=" button1 font-red">1</div>
                <div class=" button2 font-red">2</div>
                <div class=" button3 font-red">3</div>
                <div class=" button4 font-red">4</div>
                <div class=" button5 font-red">5</div>
                <div class=" button6 font-red">6</div>
                {{-- @else --}}
                {{-- @endif --}}


                {{-- </div>
            <div class="container">

                @if ($imgSrc3)
                    <img src="{{ $img3 }}" alt="Image">

                    <div class=" button1 font-red">1</div>
                    <div class=" button2 font-red">2</div>
                    <div class=" button3 font-red">3</div>
                    <div class=" button4 font-red">4</div>
                    <div class=" button5 font-red">5</div>
                    <div class=" button6 font-red">6</div>
                @else
                @endif

            </div>
            <div class="container">

                @if ($imgSrc4)
                    <img src="{{ $img4 }}" alt="Image">

                    <div class=" button1 font-red">1</div>
                    <div class=" button2 font-red">2</div>
                    <div class=" button3 font-red">3</div>
                    <div class=" button4 font-red">4</div>
                    <div class=" button5 font-red">5</div>
                    <div class=" button6 font-red">6</div>
                @else
                @endif

            </div>
            <div class="container">
                @if ($imgSrc5)
                    <img src="{{ $img5 }}" alt="Image">

                    <div class=" button1 font-red">1</div>
                    <div class=" button2 font-red">2</div>
                    <div class=" button3 font-red">3</div>
                    <div class=" button4 font-red">4</div>
                    <div class=" button5 font-red">5</div>
                    <div class=" button6 font-red">6</div>
                @else
                @endif

            </div>
            <div class="container">

                @if ($imgSrc6)
                    <img src="{{ $img6 }}" alt="Image">

                    <div class=" button1 font-red">1</div>
                    <div class=" button2 font-red">2</div>
                    <div class=" button3 font-red">3</div>
                    <div class=" button4 font-red">4</div>
                    <div class=" button5 font-red">5</div>
                    <div class=" button6 font-red">6</div>
                @else
                @endif

            </div> --}}


                <style>
                    .container {
                        position: relative;
                        display: inline-block;
                    }

                    .font-red {
                        color: #d30000;
                    }

                    img {
                        width: 100%;
                        height: auto;
                        border: 5px solid #000;
                    }

                    .button1 {
                        font-size: 50px;
                        font-weight: 600;
                        position: absolute;
                        top: 0%;
                        height: 50%;
                        width: 32.1%;
                        border: 3px solid #d30000;
                        background-color: transparent;
                    }


                    .button2 {
                        font-size: 50px;
                        font-weight: 600;
                        position: absolute;
                        top: 0%;
                        height: 50%;
                        width: 33%;
                        left: 33%;
                        border: 3px solid #d30000;
                        background-color: transparent;
                    }

                    .button3 {
                        font-size: 50px;
                        font-weight: 600;
                        position: absolute;
                        top: 0%;
                        height: 50%;
                        width: 33%;
                        left: 66%;
                        border: 3px solid #d30000;
                        background-color: transparent;
                    }

                    .button4 {
                        font-size: 50px;
                        font-weight: 600;
                        position: absolute;
                        top: 50%;
                        height: 50%;
                        width: 32.1%;
                        border: 3px solid #d30000;
                        background-color: transparent;
                    }


                    .button5 {
                        font-size: 50px;
                        font-weight: 600;
                        position: absolute;
                        top: 50%;
                        height: 50%;
                        width: 33%;
                        left: 33%;
                        border: 3px solid #d30000;
                        background-color: transparent;
                    }

                    .button6 {
                        font-size: 50px;
                        font-weight: 600;
                        position: absolute;
                        top: 50%;
                        height: 50%;
                        width: 33%;
                        left: 66%;
                        border: 3px solid #d30000;
                        background-color: transparent;
                    }

                    .button1:hover {
                        color: aliceblue;
                        cursor: pointer;
                    }

                    .button2:hover {
                        color: aliceblue;
                        cursor: pointer;
                    }

                    .button3:hover {
                        color: aliceblue;
                        cursor: pointer;
                    }

                    .button4:hover {
                        color: aliceblue;
                        cursor: pointer;
                    }

                    .button5:hover {
                        color: aliceblue;
                        cursor: pointer;
                    }

                    .button6:hover {
                        color: aliceblue;
                        cursor: pointer;
                    }
                </style>
    </main>

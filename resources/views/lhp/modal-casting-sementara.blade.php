<main>
    {{-- <div class="col-12" style="min-height:100%"> --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}">
    <style>
        .container {
            position: relative;
            display: inline-block;
            min-height: 100%;
            min-width: 100vw;
        }

        .font-red {
            color: #d30000;
        }

        .img {
            width: 100%;
            height: auto;
            border: 5px solid #000;
        }

        /* Button Ganjil ( kiri) */
        .button1 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(95%/3);
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .button2 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(95%/3);
            /* left: calc(50%/3); */
            transform: translate(calc(50%*2), 0%);
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .button3 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(95%/3);
            /* left: calc((50%/3)*2); */
            transform: translate(calc(50%*4), 0%);
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .button4 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(95%/3);
            transform: translate(0, calc(50%*2));
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .button5 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(95%/3);
            transform: translate(calc(50%*2), calc(50%*2));
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .button6 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(95%/3);
            transform: translate(calc(50%*4), calc(50%*2));
            border: 3px solid #d30000;
            background-color: transparent;
        }

        /* Button Genap ( kanan) */
        .button7 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(50%/3);
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .button8 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(50%/3);
            left: calc((570px / 3)*4);
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .button9 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(50%/3);
            left: calc((570px / 3)*5);
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .button10 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 50%;
            height: 50%;
            width: calc(50%/3);
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .button11 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 50%;
            height: 50%;
            width: calc(570px / 3);
            left: calc((570px / 3)*4);
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .button12 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 50%;
            height: 50%;
            width: calc(570px / 3);
            left: calc((570px / 3)*5);
            border: 3px solid #d30000;
            background-color: transparent;
        }
    </style>
    @php
        // Gambar Pertama
        $img1 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_1.png');
        
        // Gambar sisi 2-6
        for ($a = 2; $a <= 6; $a++) {
            ${'img' . $a} = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_' . $a . '.png');
            ${'imgSrc' . $a} = file_exists(public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_' . $a . '.png')) ? public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_' . $a . '.png') : null;
        }
        
    @endphp


    {{-- Gambar 1 --}}
    <div class="container" style="margin-left:0%; padding-left: 0px;">
        <div class="row d-flex justify-content-center">
            <div class="col-6" style=" position: relative;">
                <img class="img" src="{{ $img1 }}" alt="Image">
                @for ($i = 1; $i <= 6; $i++)
                    <div class=" button{{ $i }}  font-red" style="margin-left:0%;padding-left:0px;"
                        onclick="saveReject('{{ $idCasting->id }}', '{{ $ng }}', '{{ $i }}')">
                        {{ $i }}</div>
                @endfor
            </div>

            {{-- Gambar 2 - 6 --}}
            @if ($imgSrc2 != null)
                <div class="col-6" style=" position: relative;">
                        <img class="img" src="{{ $img2 }}" alt="Image">
                        @for ($i = 7, $x = 1; $i <= 12, $x <= 6; $i++, $x++)
                            <div class=" button{{ $x }}  font-red"
                                onclick="saveReject('{{ $idCasting->id }}', '{{ $ng }}', '{{ $i }}')">
                                {{ $i }}</div>
                        @endfor
                    </div>
            @else
            @endif
            @if ($imgSrc3 != null)
                <div class="col-6" style=" position: relative;">
                    <img class="img" src="{{ $img3 }}" alt="Image">
                    @for ($i = 13, $x = 1; $i <= 18, $x <= 6; $i++, $x++)
                        <div class=" button{{ $x }}  font-red"
                            onclick="saveReject('{{ $idCasting->id }}', '{{ $ng }}', '{{ $i }}')">
                            {{ $i }}</div>
                    @endfor
                </div>
            @else
            @endif
            @if ($imgSrc4 != null)
                <div class="col-6" style=" position: relative;">
                    <img class="img" src="{{ $img4 }}" alt="Image">
                    @for ($i = 19, $x = 1; $i <= 24, $x <= 6; $i++, $x++)
                        <div class=" button{{ $x }}  font-red"
                            onclick="saveReject('{{ $idCasting->id }}', '{{ $ng }}', '{{ $i }}')">
                            {{ $i }}</div>
                    @endfor
                </div>
            @else
            @endif
            @if ($imgSrc5 != null)
                <div class="col-6" style=" position: relative;">
                    <img class="img" src="{{ $img5 }}" alt="Image">
                    @for ($i = 25, $x = 1; $i <= 30, $x <= 6; $i++, $x++)
                        <div class=" button{{ $x }}  font-red"
                            onclick="saveReject('{{ $idCasting->id }}', '{{ $ng }}', '{{ $i }}')">
                            {{ $i }}</div>
                    @endfor
                </div>
            @else
            @endif
            @if ($imgSrc6 != null)
                <div class="col-6" style=" position: relative;">
                    <img class="img" src="{{ $img6 }}" alt="Image">
                    @for ($i = 31, $x = 1; $i <= 36, $x <= 6; $i++, $x++)
                        <div class=" button{{ $x }}  font-red"
                            onclick="saveReject('{{ $idCasting->id }}', '{{ $ng }}', '{{ $i }}')">
                            {{ $i }}</div>
                    @endfor
                </div>
            @else
            @endif
        </div>
        {{-- </div> --}}

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            function saveReject(id, reject, posisi) {
                var url = "/partial/modal-casting" + "/" + id + "/" + reject + "/" + posisi; // replace with your desired URL
                var token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: token
                    },
                    success: function(response) {
                        $("#ModalGambar").modal("hide");
                    },
                    error: function(xhr) {
                        // handle errors here
                    }
                });
            }
        </script>
</main>

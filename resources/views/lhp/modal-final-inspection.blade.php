<main>
    <div class="col-12">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css') }}">
        <style>
            .container {
                position: relative;
                display: inline-block;
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
                width: calc(475px / 3);
                border: 3px solid #d30000;
                background-color: transparent;
            }


            .button2 {
                font-size: 50px;
                font-weight: 600;
                position: absolute;
                top: 0%;
                height: 50%;
                width: calc(475px / 3);
                left: calc(475px / 3);
                border: 3px solid #d30000;
                background-color: transparent;
            }

            .button3 {
                font-size: 50px;
                font-weight: 600;
                position: absolute;
                top: 0%;
                height: 50%;
                width: calc(475px / 3);
                left: calc((475px / 3)*2);
                border: 3px solid #d30000;
                background-color: transparent;
            }

            .button4 {
                font-size: 50px;
                font-weight: 600;
                position: absolute;
                top: 50%;
                height: 50%;
                width: calc(475px/ 3);
                border: 3px solid #d30000;
                background-color: transparent;
            }


            .button5 {
                font-size: 50px;
                font-weight: 600;
                position: absolute;
                top: 50%;
                height: 50%;
                width: calc(475px / 3);
                left: calc(475px / 3);
                border: 3px solid #d30000;
                background-color: transparent;
            }

            .button6 {
                font-size: 50px;
                font-weight: 600;
                position: absolute;
                top: 50%;
                height: 50%;
                width: calc(475px / 3);
                left: calc((475px / 3)*2);
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

            /* Button Genap ( kanan) */
            .button7 {
                font-size: 50px;
                font-weight: 600;
                position: absolute;
                top: 0%;
                height: 50%;
                width: calc(475px / 3);
                border: 3px solid #d30000;
                background-color: transparent;
            }


            .button8 {
                font-size: 50px;
                font-weight: 600;
                position: absolute;
                top: 0%;
                height: 50%;
                width: calc(475px / 3);
                left: calc((475px / 3)*4);
                border: 3px solid #d30000;
                background-color: transparent;
            }

            .button9 {
                font-size: 50px;
                font-weight: 600;
                position: absolute;
                top: 0%;
                height: 50%;
                width: calc(475px / 3);
                left: calc((475px / 3)*5);
                border: 3px solid #d30000;
                background-color: transparent;
            }

            .button10 {
                font-size: 50px;
                font-weight: 600;
                position: absolute;
                top: 50%;
                height: 50%;
                width: calc(475px/ 3);
                border: 3px solid #d30000;
                background-color: transparent;
            }


            .button11 {
                font-size: 50px;
                font-weight: 600;
                position: absolute;
                top: 50%;
                height: 50%;
                width: calc(475px / 3);
                left: calc((475px / 3)*4);
                border: 3px solid #d30000;
                background-color: transparent;
            }

            .button12 {
                font-size: 50px;
                font-weight: 600;
                position: absolute;
                top: 50%;
                height: 50%;
                width: calc(475px / 3);
                left: calc((475px / 3)*5);
                border: 3px solid #d30000;
                background-color: transparent;
            }

            .button7:hover {
                color: aliceblue;
                cursor: pointer;
            }

            .button8:hover {
                color: aliceblue;
                cursor: pointer;
            }

            .button9:hover {
                color: aliceblue;
                cursor: pointer;
            }

            .button10:hover {
                color: aliceblue;
                cursor: pointer;
            }

            .button11:hover {
                color: aliceblue;
                cursor: pointer;
            }

            .button12:hover {
                color: aliceblue;
                cursor: pointer;
            }
        </style>
        @php
            $img1 = asset('/img/parts/' . $lhp->part->nama_part . '_1.png');
            $img2 = asset('/img/parts/' . $lhp->part->nama_part . '_2.png');
            $img3 = asset('/img/parts/' . $lhp->part->nama_part . '_3.png');
            $img4 = asset('/img/parts/' . $lhp->part->nama_part . '_4.png');
            $img5 = asset('/img/parts/' . $lhp->part->nama_part . '_5.png');
            $img6 = asset('/img/parts/' . $lhp->part->nama_part . '_6.png');
            
            // $imgSrc2 = file_exists(public_path('/img/parts' . '/' . $lhp->part->nama_part . '_b.png')) ? public_path('/img/parts' . '/' . $lhp->part->nama_part . '_b.png') : null;
            // $imgSrc3 = file_exists(public_path('/img/parts' . '/' . $lhp->part->nama_part . '_c.png')) ? public_path('/img/parts' . '/' . $lhp->part->nama_part . '_c.png') : null;
            // $imgSrc4 = file_exists(public_path('/img/parts' . '/' . $lhp->part->nama_part . '_d.png')) ? public_path('/img/parts' . '/' . $lhp->part->nama_part . '_d.png') : null;
            // $imgSrc5 = file_exists(public_path('/img/parts' . '/' . $lhp->part->nama_part . '_e.png')) ? public_path('/img/parts' . '/' . $lhp->part->nama_part . '_e.png') : null;
            // $imgSrc6 = file_exists(public_path('/img/parts' . '/' . $lhp->part->nama_part . '_f.png')) ? public_path('/img/parts' . '/' . $lhp->part->nama_part . '_f.png') : null;
        @endphp


        {{-- Gambar 1 --}}
        <div class="container" style="margin-left:0%; padding-left: 0px;">
            <div class="row" style="margin-left:0%; padding-left: 0px;">
                <div class="col-5"
                style="background-image: url('{{ $img1 }}'); background-size:100%; margin-left:0%; padding-left:0px;">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class=" button{{ $i }}  font-red" style="margin-left:0%;padding-left:0px;"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')">
                            {{ $i }}</div>
                    @endfor
                </div>
                <div class="col-5"
                style="background-image: url('{{ $img2 }}'); background-size:100%; margin-left:0%; padding-left:0px;">
                    @for ($i = 7; $i <= 12; $i++)
                        <div class=" button{{ $i }}  font-red" style="margin-left:0%;padding-left:0px;"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')">
                            {{ $i }}</div>
                    @endfor>
                </div>
                <div class="col-auto ">
                    <div class="test" style="color:aliceblue; height:225px"> </div>
                </div>
            </div>

            {{-- @for ($i = 1; $i <= 6; $i++)
                <div class=" button{{ $i }}  font-red"
                    onclick="saveReject('{{ $idCasting->id }}', '{{ $ng }}', '{{ $i }}')">
                    {{ $i }}</div>
            @endfor --}}
        </div>


        {{-- Gambar 2 - 6 --}}
        {{-- @for ($a = 2; $a <= 6; $a++)
            <div class="container">
                @if (${'imgSrc' . $a} != null)
                    <img class="img" src="{{ ${'img' . $a} }}" alt="Image">
                    @for ($i = 7, $x = 1; $i <= 12, $x <= 6; $i++, $x++)
                        <div class=" button{{ $x }}  font-red"
                            onclick="saveReject('{{ $idCasting->id }}', '{{ $ng }}', '{{ $i }}')">
                            {{ $i }}</div>
                    @endfor
                @else
                @endif
            </div>
        @endfor --}}
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            function saveRejectFinal(id, reject, posisi) {
                var url = "/partial/modal-final-inspection" + "/" + id + "/" + reject + "/" + posisi; // replace with your desired URL
                var token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: token
                    },
                    success: function(response) {
                        $("#ModalGambarFinal").modal("hide");

                    },
                    error: function(xhr) {
                        // handle errors here
                    }
                });
            }
        </script>
</main>
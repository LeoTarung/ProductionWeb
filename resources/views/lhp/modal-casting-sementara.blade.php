    <main>
        <div class="col-12">
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
            @php
                $img1 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_a.png');
                $img2 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_b.png');
                $img3 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_c.png');
                $img4 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_d.png');
                $img5 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_e.png');
                $img6 = asset('/img/parts/' . $idCasting->mesincasting->nama_part . '_f.png');
                
                $imgSrc2 = file_exists(public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_b.png')) ? public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_b.png') : null;
                $imgSrc3 = file_exists(public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_c.png')) ? public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_c.png') : null;
                $imgSrc4 = file_exists(public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_d.png')) ? public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_d.png') : null;
                $imgSrc5 = file_exists(public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_e.png')) ? public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_e.png') : null;
                $imgSrc6 = file_exists(public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_f.png')) ? public_path('/img/parts' . '/' . $idCasting->mesincasting->nama_part . '_f.png') : null;
            @endphp


            {{-- Gambar 1 --}}
            <div class="container">
                <img class="img" src="{{ $img1 }}" alt="Image">
                @for ($i = 1; $i <= 6; $i++)
                    <div class=" button{{ $i }}  font-red"
                        onclick="saveReject('{{ $idCasting->id }}', '{{ $ng }}', '{{ $i }}')">
                        {{ $i }}</div>
                @endfor
            </div>


            {{-- Gambar 2 - 6 --}}
            @for ($a = 2; $a <= 6; $a++)
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
            @endfor
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
                            // handle the response here
                        },
                        error: function(xhr) {
                            // handle errors here
                        }
                    });
                }
            </script>
    </main>

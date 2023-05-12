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
        .buttonlg1 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(95%/3);
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .buttonlg2 {
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

        .buttonlg3 {
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

        .buttonlg4 {
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

        .buttonlg5 {
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

        .buttonlg6 {
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


        .buttonsm1 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(96%/2);
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .buttonsm2 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(96%/2);
            /* left: calc(50%/3); */
            transform: translate(calc(50%*2), 0%);
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .buttonsm3 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(96%/2);
            transform: translate(0, calc(50%*2));
            border: 3px solid #d30000;
            background-color: transparent;
        }

        .buttonsm4 {
            font-size: 50px;
            font-weight: 600;
            position: absolute;
            top: 0%;
            height: 50%;
            width: calc(96%/2);
            transform: translate(calc(50%*2), calc(50%*2));
            border: 3px solid #d30000;
            background-color: transparent;
        }
    </style>
    @php
        // Gambar Pertama
        
        // Gambar sisi 2-6 (lg)
        for ($a = 1; $a <= 6; $a++) {
            ${'img_lg_' . $a} = asset('/img/parts/' . $lhp->mesincasting->nama_part . '_' . 'lg' . '_' . $a . '.png');
            ${'imgSrc_lg_' . $a} = file_exists(public_path('/img/parts' . '/' . $lhp->mesincasting->nama_part . '_' . 'lg' . '_' . $a . '.png')) ? public_path('/img/parts' . '/' . $lhp->mesincasting->nama_part . '_' . 'lg' . '_' . $a . '.png') : null;
        }
        
        // Gambar sisi 2-6 (sm)
        for ($a = 1; $a <= 6; $a++) {
            ${'img_sm_' . $a} = asset('/img/parts/' . $lhp->mesincasting->nama_part . '_' . 'sm' . '_' . $a . '.png');
            ${'imgSrc_sm_' . $a} = file_exists(public_path('/img/parts' . '/' . $lhp->mesincasting->nama_part . '_' . 'sm' . '_' . $a . '.png')) ? public_path('/img/parts' . '/' . $lhp->mesincasting->nama_part . '_' . 'sm' . '_' . $a . '.png') : null;
        }
        
    @endphp


    {{-- Gambar 1 --}}
    <div class="container" style="margin-left:0%; padding-left: 0px;" id="modal">
        <div class="row d-flex justify-content-center">
            @if ($imgSrc_lg_1 != null)
                <div class="col-6 mb-4" style=" position: relative;">
                    <img class="img" src="{{ $img_lg_1 }}" alt="Image">
                    @for ($i = 1; $i <= 6; $i++)
                        <div name="button" class=" buttonlg{{ $i }}  font-red"
                            style="margin-left:0%;padding-left:0px;"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonlg{{ $i }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @elseif ($imgSrc_sm_1 != null)
                <div class="col-6 mb-4" style=" position: relative;">
                    <img class="img" src="{{ $img_sm_1 }}" alt="Image">
                    @for ($i = 1; $i <= 4; $i++)
                        <div name="button" class=" buttonsm{{ $i }} font-red"
                            style="margin-left:0%;padding-left:0px;"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonsm{{ $i }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @else
            @endif


            {{-- Gambar 2 - 6 --}}
            @if ($imgSrc_lg_2 != null)
                <div class="col-6 mb-4" style=" position: relative;">
                    <img class="img" src="{{ $img_lg_2 }}" alt="Image">
                    @for ($i = 7, $x = 1; $i <= 12, $x <= 6; $i++, $x++)
                        <div name="button" class=" buttonlg{{ $x }}  font-red"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonlg{{ $x }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @elseif ($imgSrc_sm_2 != null)
                <div class="col-6 mb-4" style=" position: relative;">
                    <img class="img" src="{{ $img_sm_2 }}" alt="Image">
                    @for ($i = 5, $x = 1; $i <= 8, $x <= 4; $i++, $x++)
                        <div name="button" class=" buttonsm{{ $x }}  font-red"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonsm{{ $x }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @else
            @endif


            @if ($imgSrc_lg_3 != null)
                <div class="col-6 mb-4" style=" position: relative;">
                    <img class="img" src="{{ $img_lg_3 }}" alt="Image">
                    @for ($i = 13, $x = 1; $i <= 18, $x <= 6; $i++, $x++)
                        <div name="button" class=" buttonlg{{ $x }}  font-red"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonlg{{ $x }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @elseif ($imgSrc_sm_3 != null)
                <div class="col-6 mb-4" style=" position: relative;">
                    <img class="img" src="{{ $img_sm_3 }}" alt="Image">
                    @for ($i = 9, $x = 1; $i <= 12, $x <= 4; $i++, $x++)
                        <div name="button" class=" buttonsm{{ $x }}  font-red"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonsm{{ $x }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @else
            @endif


            @if ($imgSrc_lg_4 != null)
                <div class="col-6 mb-4" style=" position: relative;">
                    <img class="img" src="{{ $img_lg_4 }}" alt="Image">
                    @for ($i = 19, $x = 1; $i <= 24, $x <= 6; $i++, $x++)
                        <div name="button" class=" buttonlg{{ $x }}  font-red"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonlg{{ $x }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @elseif ($imgSrc_sm_4 != null)
                <div class="col-6 mb-4" style=" position: relative;">
                    <img class="img" src="{{ $img_sm_4 }}" alt="Image">
                    @for ($i = 13, $x = 1; $i <= 16, $x <= 4; $i++, $x++)
                        <div name="button" class=" buttonsm{{ $x }}  font-red"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonsm{{ $x }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @else
            @endif


            @if ($imgSrc_lg_5 != null)
                <div class="col-6 mb-4" style=" position: relative;">
                    <img class="img" src="{{ $img_lg_5 }}" alt="Image">
                    @for ($i = 25, $x = 1; $i <= 30, $x <= 6; $i++, $x++)
                        <div name="button" class=" buttonlg{{ $x }}  font-red"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonlg{{ $x }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @elseif ($imgSrc_sm_5 != null)
                <div class="col-6 mb-4" style=" position: relative;">
                    <img class="img" src="{{ $img_sm_5 }}" alt="Image">
                    @for ($i = 17, $x = 1; $i <= 20, $x <= 4; $i++, $x++)
                        <div name="button" class=" buttonsm{{ $x }}  font-red"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonsm{{ $x }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @else
            @endif


            @if ($imgSrc_lg_6 != null)
                <div class="col-6" style=" position: relative;">
                    <img class="img" src="{{ $img_lg_6 }}" alt="Image">
                    @for ($i = 31, $x = 1; $i <= 36, $x <= 6; $i++, $x++)
                        <div name="button" class=" buttonlg{{ $x }}  font-red"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonlg{{ $x }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @elseif ($imgSrc_sm_6 != null)
                <div class="col-6" style=" position: relative;">
                    <img class="img" src="{{ $img_sm_6 }}" alt="Image">
                    @for ($i = 21, $x = 1; $i <= 24, $x <= 4; $i++, $x++)
                        <div name="button" class=" buttonsm{{ $x }}  font-red"
                            onclick="saveRejectFinal('{{ $lhp->id }}', '{{ $ng }}', '{{ $i }}')"
                            id="buttonsm{{ $x }}">
                            {{ $i }}</div>
                    @endfor
                </div>
            @endif
        </div>
    </div>


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        // let modal = document.getElementById('ModalGambar');

        var processing = false;

        function saveRejectFinal(id, reject, posisi) {
            if (processing) {
                // Request is already being processed, do nothing
                return;
            }

            // modal.hide = true;

            var url = "/partial/modal-final-inspection" + "/" + id + "/" + reject + "/" + posisi; // replace with your desired URL
            var token = $('meta[name="csrf-token"]').attr('content');
            processing = true;

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: token
                },
                success: function(response) {
                    $("#ModalGambar").modal("hide");
                    processing = true;
                },
                error: function(xhr) {
                    // handle errors here
                    processing = true;
                }
            });

            // Set a timeout to reset the processing flag after 30 seconds
            setTimeout(function() {
                processing = true;
            }, 10000);
        }
    </script>
</main>

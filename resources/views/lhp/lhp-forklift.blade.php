@extends('mainLHP')
@section('content')
    {{-- Content --}}

    <div class="container-fluid">
        <div class="row  mt-3 mb-4 d-flex justify-content-center text-center">

            @if ($errors->any())
                <?php toast($errors->first(), 'error'); ?>
            @endif
            @if (\Session::has('erorr'))
                <?php toast('Lhp Melting belum Preparation', 'error'); ?>
            @endif

            @foreach ($mc as $m)
                {{-- <div class="button" > --}}
                <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="mc({{ $m['mc'] }})">
                    {{-- <div class="card-header text-center fw-bold"> MC-{{ $m['mc'] }}</div> --}}
                    <div class="card-header text-center fw-bold"> MC-{{ $m->mc }}</div>
                    <section id="battery{{ $m['mc'] }}" class="battery mb-3 d-flex justify-content-start"
                        onclick="nama({{ $m['mc'] }})">
                        <div id="battery__pill" class="battery__pill">
                            <div id="battery__level" class="battery__level">
                                <div id="battery__liquid{{ $m['mc'] }}" class="battery__liquid"></div>
                            </div>
                        </div>
                    </section>
                </div>
                {{-- </div> --}}
            @endforeach


        </div>

    </div>

    {{-- MODAL --}}

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ url('/forklift/' . $mesin . '/' . $id . '/simpan') }}" method="POST">
                    @csrf
                    <div class="modal-header bg-secondary text-center">

                        <h1 class="modal-title fs-4 font-white fw-bold" id="nama" value=></h1>
                        <h2 class="modal-title fs-4 font-white fw-bold" id="nama" value=></h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold " id="forklift"
                                        name="forklift" value="{{ $forklift }}" readonly required>
                                    <input type="text" class="form-control border-dark fw-bold " id="mc"
                                        name="mc" readonly required hidden>
                                    <label for="mc" class="">FORKLIFT</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold" id="material"
                                        name="material" value="{{ $material }}" readonly>
                                    <label for="material" class="">M A T E R I A L</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control border-dark fw-bold fs-3" id="jumlah_tapping"
                                        name="jumlah_tapping" required>
                                    <label for="jumlah_tapping" class="">B E R A T</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="row"> <label for="furnace " class="ms-2">FURNACE :</label></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-check mt-2" id="furnace" name="furnace" required focus>

                                        <input type="radio" class="btn-check " name="furnace" id="success-outlined"
                                            autocomplete="off" value="STRIKO-1">
                                        <label class="btn btn-outline-success fw-bold"
                                            for="success-outlined">STRIKO-1</label>
                                        <input type="radio" class="btn-check" name="furnace" id="success-outlined2"
                                            autocomplete="off" value="STRIKO-2">
                                        <label class="btn btn-outline-success fw-bold"
                                            for="success-outlined2">STRIKO-2</label>
                                        <input type="radio" class="btn-check" name="furnace" id="success-outlined3"
                                            autocomplete="off" value="STRIKO-3">
                                        <label class="btn btn-outline-success fw-bold"
                                            for="success-outlined3">STRIKO-3</label>
                                        <input type="radio" class="btn-check" name="furnace" id="success-outlined4"
                                            autocomplete="off" value="SWIF-ASIA">
                                        <label class="btn btn-outline-success fw-bold " for="success-outlined4">SWIF
                                            ASIA</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script>
        $(function() {
            let ip_node = location.hostname;
            let socket_port = '1553';
            let socket = io(ip_node + ':' + socket_port);
            socket.on('connection');

            socket.on("levelMolten_client", (data) => {
                for (var i = 0; i < data.length; i++) {
                    let max1 = data[i].max_level_molten;
                    let min1 = data[i].min_level_molten;
                    let jarak1 = max1 - min1 //hasilnya 2000
                    let pembagi1 = (jarak1 * 0.01); //hasilnya 20
                    let value1 = (data[i].aktual_molten - min1); //hasilnya 500
                    let level1 = (value1 / pembagi1);

                    console.log(level1);

                    let battery1 = document.getElementById('battery' + data[i].mc);



                    let batteryLiquid1 = document.getElementById('battery__liquid' + data[i].mc);
                    batteryLiquid1.setAttribute('style', `height: ${level1}%;`);

                    if (level1 <= 20) {
                        batteryLiquid1.style.backgroundColor = '#f71515'

                    } else if (level1 <= 40) {
                        batteryLiquid1.style.backgroundColor = '#f16716'

                    } else if (level1 <= 60) {
                        batteryLiquid1.style.backgroundColor = '#f5dd06'

                    } else if (level1 = 80) {
                        batteryLiquid1.style.backgroundColor = '#98ce06'

                    } else {
                        batteryLiquid1.style.backgroundColor = '#06ce17'

                    }
                }
            })
            socket.emit("levelMolten", '{{ $forklift }}', '{{ $material }}');
        });
    </script>
    <script>
        function nama(id) {
            @foreach ($mc as $b)
                if (id == {{ $b['mc'] }}) {
                    document.getElementById('nama').innerHTML = 'MC - {{ $b['mc'] }}'
                }
            @endforeach
        }

        function mc(id) {
            @foreach ($mc as $c)
                if (id == {{ $c['mc'] }}) {
                    document.getElementById('mc').value = '{{ $c['mc'] }}'
                }
            @endforeach
        }
    </script>
@endsection

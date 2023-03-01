@extends('main')
@section('content')
    <div class="main-content d-flex flex-column">
        <div class="row w-100">
            {{-- <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="mc()">
                <div class="card-header text-center fw-bold"> MC-</div>
                <section id="battery" class="battery mb-3 d-flex justify-content-start" onclick="nama()">
                    <div id="battery__pill" class="battery__pill">
                        <div id="battery__level" class="battery__level">
                            <div id="battery__liquid" class="battery__liquid"></div>
                        </div>
                    </div>
                </section>
            </div> --}}
            @foreach ($mc as $m)
                <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
            @endforeach
        </div>
    </div>
    <script>
        $(function() {
            let ip_node = location.hostname;
            let socket_port = '1553';
            let socket = io(ip_node + ':' + socket_port);
            socket.on('connection');

            socket.on("levelMolten_settings", (data, material1) => {
                for (var i = 0; i < data.length; i++) {
                    let max1 = data[i].max_level_molten;
                    let min1 = data[i].min_level_molten;
                    let jarak1 = min1 - max1 //hasilnya 2000
                    let pembagi1 = (jarak1 * 0.01); //hasilnya 20
                    let value1 = (data[i].aktual_molten - max1); //hasilnya 500
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

        });
    </script>
@endsection

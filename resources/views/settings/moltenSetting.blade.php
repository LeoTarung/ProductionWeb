@extends('mainLHP')
@section('content')
    <div class="container-fluid ">
        <div class="card shadow-lg mt-3 mb-5 ">
            <div class="card-header  fw-bold fs-4 bg-primary ">
                <div class="font-white text-center">Edit Mesin</div>
            </div>
            <div class="row ms-2 mb-5 mt-2">
                <div class="col-8">
                    <form action="{{ route('mesincasting.update', $molten['mc']) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row mt-2">
                            <div class="col-2">MACHINE</div>
                            <div class="col-6"><input type="number" class="form-control" id="nama_mc" name="nama_mc"
                                    value="{{ $molten->mc }}">
                            </div>
                            <div class="col-1"><button type="button" class="btn btn-primary" id="btnCariMC">Cari</button>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-2"></div>
                            <div class="col-auto d-flex align-items-center fw-bold"> <i
                                    class='bx bxs-error-alt bx-sm font-yellow '></i>
                                <div class="ms-2">
                                    Pilih MC yang akan diatur
                                    terlebih
                                    dahulu!
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">MATERIAL</div>
                            <div class="col-6"><input type="text" class="form-control" id="material" name="material"
                                    value="{{ $molten->material }}" readonly>
                            </div>
                            <div class="col-2"><button type="button" class="btn btn-warning" id="btnEditMtr">Edit</button>
                            </div>
                            </p>
                        </div>
                        <div class="row" id="editMtr">
                            <div class="col-2"></div>
                            <div class="col-auto"> <input type="radio" class="btn-check" id="success-outlined1"
                                    autocomplete="off" value="HD-2" onclick="Material(1)"> <label class="btn btn-success"
                                    for="success-outlined1">HD-2</label>
                            </div>
                            <div class="col-auto"> <input type="radio" class="btn-check" id="success-outlined2"
                                    autocomplete="off" value="HD-4" onclick="Material(2)"> <label class="btn btn-success"
                                    for="success-outlined2">HD-4</label> </div>
                            <div class="col-auto"> <input type="radio" class="btn-check" id="success-outlined3"
                                    autocomplete="off" value="ADC-12" onclick="Material(3)"> <label class="btn btn-success"
                                    for="success-outlined3">ADC-12</label></div>

                            <div class="col-auto"> <input type="radio" class="btn-check" id="success-outlined4"
                                    autocomplete="off" value="YH3R" onclick="Material(4)">
                                <label class="btn btn-success " for="success-outlined4">YH3R</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">MIN MOLTEN</div>
                            <div class="col-9"><input type="text" class="form-control" id="min_molten"
                                    name="min_level_molten" value="{{ $molten->max_level_molten }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-2">MAX MOLTEN</div>
                            <div class="col-9"><input type="text" class="form-control" id="max_molten"
                                    name="max_level_molten" value="{{ $molten->min_level_molten }}">
                            </div>
                        </div>
                        <div class="row border-top mt-5 ">
                            <div class="col-12 mt-4 d-flex justify-content-start">
                                <a href="/settings" class="btn btn-secondary">Kembali</a>
                                <button class="btn btn-success ms-3" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="col-3 d-flex align-items-center">
                        <section id="battery{{ $molten->mc }}" class="battery mb-3 d-flex justify-content-center">
                            <div id="battery__pill" class="battery__pill">
                                <div id="battery__level" class="battery__level">
                                    <div id="battery__liquid{{ $molten->mc }}" class="battery__liquid">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        console.log("test");
        $(function() {
            let ip_node = location.hostname;
            let socket_port = '1553';
            let socket = io(ip_node + ':' + socket_port);
            socket.on('connection');

            socket.on("levelMolten_settings", (data) => {

                let for_mc = {{ $molten->mc }} - 1;
                let max1 = data[for_mc].max_level_molten;
                let min1 = data[for_mc].min_level_molten;
                let jarak1 = min1 - max1 //hasilnya 2000
                let pembagi1 = (jarak1 * 0.01); //hasilnya 20
                let value1 = (data[for_mc].aktual_molten - max1); //hasilnya 500
                let level1 = (value1 / pembagi1);

                console.log("jarak = " + jarak1);
                console.log("pembagi = " + pembagi1);
                console.log("value = " + value1);
                console.log("level = " + level1);
                console.log("aktual = " + data[for_mc].aktual_molten);

                let battery1 = document.getElementById('battery' + {{ $molten->mc }});
                let batteryLiquid1 = document.getElementById('battery__liquid' +
                    {{ $molten->mc }});
                batteryLiquid1.setAttribute('style',
                    `height: ${level1}%;`);

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

            })
        });

        ///////{ Untuk Memunculkan Edit Material  }//////// 

        const btnEdit = document.getElementById('btnEditMtr');
        document.getElementById('editMtr').style.visibility =
            'hidden';
        btnEdit.addEventListener('click', () => {
            const MtrEdit = document.getElementById('editMtr');
            if (MtrEdit.style.visibility === 'visible') {
                MtrEdit.style.visibility = 'hidden';
            } else {
                MtrEdit.style.visibility = 'visible';
            }
        });

        function Material(id) {
            if (id == 1) {
                document.getElementById('material').value = 'HD-2'
            } else if (id == 2) {
                document.getElementById('material').value = 'HD-4'
            } else if (id == 3) {
                document.getElementById('material').value = 'ADC-12'
            } else if (id == 4) {
                document.getElementById('material').value = 'YH3R'
            }
        }

        ///////{ Untuk Memunculkan mc baru}//////// 

        const btnCari = document.getElementById('btnCariMC');

        var inputMC = document.getElementById("nama_mc");
        var ValueMC = inputMC.value;

        btnCari.addEventListener('click', () => {
            var newMC = window.inputMC.value;
            window.location.href = "{{ url('/settings/mesincasting') }}" + "/" + newMC;
        });
    </script>
@endsection

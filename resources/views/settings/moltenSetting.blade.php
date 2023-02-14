@extends('mainLHP')
@section('content')
    <div class="container-fluid ">
        {{-- <div class="row mt-5 ms-2"> --}}
        <div class="card shadow-lg mt-3 mb-5 ">
            <div class="card-header  fw-bold fs-4 bg-primary ">
                <div class="font-white text-center">Edit Mesin - {{ $molten->mc }}</div>
            </div>
            <div class="row ms-2 mb-5 mt-4">
                <div class="col-8">
                    {{-- <form action="{{ url('/settings/mesincasting/' . $molten->mc . '/simpan') }}" method="POST"
                        enctype="multipart/form-data"> --}}
                    <form action="{{ route('mesincasting.update', $molten['mc']) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row mt-2">
                            <div class="col-2">MACHINE</div>
                            <div class="col-9"><input type="text" class="form-control" id="nama_mc" name="nama_mc"
                                    value="{{ $molten->mc }}" readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
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
                        <div class="row mt-2">
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
                            <div class="col-12 mt-4 d-flex justify-content-end">
                                <a href="/settings" class="btn btn-secondary">Kembali</a>
                                <button class="btn btn-success ms-3" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="col-3 d-flex align-items-center">
                        <section id="battery" class="battery mb-3 d-flex justify-content-center">
                            <div id="battery__pill" class="battery__pill">
                                <div id="battery__level" class="battery__level">
                                    <div id="battery__liquid" class="battery__liquid">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>

        </div>
        {{-- </div> --}}
    </div>
    <script>
        // let max1 = data[0].max_level_molten;
        // let min1 = data[0].min_level_molten;
        // let jarak1 = max1 - min1 //hasilnya 2000
        // let pembagi1 = (jarak1 * 0.01); //hasilnya 20
        // let value1 = (data[0].aktual_molten - min1); //hasilnya 500
        // let level1 = (value1 / pembagi1);

        // console.log(level1);

        // let battery1 = document.getElementById('battery');

        // let batteryLiquid1 = document.getElementById('battery__liquid');
        // batteryLiquid1
        //     .setAttribute('style', `height: ${level1}%;`);

        // if (level1 <= 20) {
        //     batteryLiquid1.style.backgroundColor = '#f71515'

        // } else if (level1 <= 40) {
        //     batteryLiquid1.style.backgroundColor = '#f16716'

        // } else if (level1 <= 60) {
        //     batteryLiquid1.style.backgroundColor = '#f5dd06'

        // } else if (level1 = 80) {
        //     batteryLiquid1.style.backgroundColor = '#98ce06'

        // } else {
        //     batteryLiquid1.style.backgroundColor = '#06ce17'
        // }

        const btnEdit = document.getElementById('btnEditMtr');
        document.getElementById('editMtr').style.visibility = 'hidden';
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
    </script>
@endsection

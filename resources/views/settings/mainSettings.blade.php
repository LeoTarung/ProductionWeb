@extends('mainLHP')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center mx-auto mt-3">
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                {{-- <a href="{{ url('/settings/mesincasting/1') }}" --}}
                <a href="/settings/mesincasting/1" class="fs-1 btn btn-lg btn-primary border-info text-uppercase fw-bold">
                    <div class="font-white font-settings">Setting<br> Molten </div>
                </a>
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                <a class="buttonssssss btn btn-lg btn-secondary border-info text-uppercase fw-bold disabled"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="forklift(2)">
                    <div class="font-forklift"></div>
                </a>
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                <a class="buttonssssss btn btn-lg btn-secondary border-info text-uppercase fw-bold disabled"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="forklift(3)">
                    <div class="font-forklift"></div>
                </a>
            </div>
        </div>
        <div class="row justify-content-center mx-auto mt-4 mb-2">
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                <a class="buttonssssss btn btn-lg btn-secondary border-info text-uppercase fw-bold disabled"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="forklift(4)">
                    <div class="font-forklift"></div>
                </a>
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                <a class="buttonssssss btn btn-lg btn-secondary border-secondary text-uppercase fw-bold disabled"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="forklift(6)">
                    <div class="font-forklift"></div>

                </a>
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                <a class="buttonssssss btn btn-lg btn-secondary border-secondary text-uppercase fw-bold disabled"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="forklift(6)">
                    <div class="font-forklift"></div>

                </a>
            </div>
        </div>
    </div>

    {{-- MODAL --}}
    {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                    <button type="button" class="btn-close" id="setupclose" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table id="table_id" class="table table-bordered mt-2 nowrap">
                        <thead class="head-dtl  text-center">
                            <tr>
                                <th class="text-center" nowrap="nowrap" rowspan="2">MACHINE</th>
                                <th class="text-center" nowrap="nowrap" rowspan="2">MATERIAL</th>
                                <th class="text-center" nowrap="nowrap" rowspan="2">NAMA PART</th>
                                <th class="text-center" nowrap="nowrap" colspan="3">STATUS</th>
                                <th class="text-center" nowrap="nowrap" rowspan="2">ACTION</th>
                            </tr>
                            <tr>
                                <th class="text-center" nowrap="nowrap">KANBAN</th>
                                <th class="text-center" nowrap="nowrap">HENKATEN</th>
                                <th class="text-center" nowrap="nowrap">PRODUCTION</th>
                            </tr>
                        </thead>
                        <tbody id="tbody" class="text-center">
                            @foreach ($mc as $a)
                                <tr>
                                    <td>MC{{ $a->mc }}</td>
                                    <td>{{ $a->material }}</td>
                                    <td>{{ $a->nama_part }}</td>
                                    <td>{{ $a->kode_kanban }}</td>
                                    <td>{{ $a->kode_henkaten }}</td>
                                    <td>{{ $a->kode_status }}</td>
                                    <td> <a href="settings/mesincasting/{{ $a->mc }}" class="btn btn-warning"
                                            onclick="editmesin({{ $a->mc }})">EDIT </a> </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- END MODAL --}}

    {{-- MODAL 2 --}}

    {{-- <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <form id="formSettings" name="form_molten" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel1"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row"> --}}
    {{-- KIRI --}}
    {{-- <div class="col-8">
                                <div class="row mt-2">
                                    <div class="col-2">MACHINE</div>
                                    <div class="col-9"><input type="text" class="form-control" id="nama_mc"
                                            name="nama_mc" readonly>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2">MATERIAL</div>
                                    <div class="col-6"><input type="text" class="form-control" id="material"
                                            name="material" readonly>
                                    </div>
                                    <div class="col-2"><button type="button" class="btn btn-warning"
                                            id="btnEditMtr">Edit</button>
                                    </div>
                                    </p>
                                </div>
                                <div class="row" id="editMtr">
                                    <div class="col-2"></div>
                                    <div class="col-auto"> <input type="radio" class="btn-check"
                                            id="success-outlined1" autocomplete="off" value="HD-2"
                                            onclick="Material(1)"> <label class="btn btn-outline-success"
                                            for="success-outlined1">HD-2</label>
                                    </div>
                                    <div class="col-auto"> <input type="radio" class="btn-check"
                                            id="success-outlined2" autocomplete="off" value="HD-4"
                                            onclick="Material(2)"> <label class="btn btn-outline-success"
                                            for="success-outlined2">HD-4</label> </div>
                                    <div class="col-auto"> <input type="radio" class="btn-check"
                                            id="success-outlined3" autocomplete="off" value="ADC-12"
                                            onclick="Material(3)"> <label class="btn btn-outline-success"
                                            for="success-outlined3">ADC-12</label></div>

                                    <div class="col-auto"> <input type="radio" class="btn-check"
                                            id="success-outlined4" autocomplete="off" value="YH3R"
                                            onclick="Material(4)">
                                        <label class="btn btn-outline-success " for="success-outlined4">YH3R</label>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2">MIN MOLTEN</div>
                                    <div class="col-9"><input type="text" class="form-control" id="min_molten"
                                            name="min_molten">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2">MAX MOLTEN</div>
                                    <div class="col-9"><input type="text" class="form-control" id="max_molten"
                                            name="max_molten">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <div class="col-3 d-flex align-items-end">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Kembali</button>
                        <button type="btn-close" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" onclick="MoltenSimpan()">Simpan</button>
                    </div> --}}
    {{-- @php $id = $_POST['nama_mc']; @endphp --}}
    {{-- </form>
            </div>
        </div>
    </div> --}}
    <script>
        $(document).ready(function() {
            $('#table_id').dataTable({
                responsive: true,
                // "bPaginate": false,
                // "bFilter": false,
                // "bInfo": false
            });

            function openmodal() {
                $("#staticBackdropLabel").html('SETUP CASTING MACHINE'); //Untuk kasih judul di modal
                $("#staticBackdrop").modal('show'); //kalo ID pake "#" kalo class pake "." 
            }
        });

        // function editmesin(id) {
        //     $("#setupclose").click();
        //     $("#staticBackdropLabel1").html('EDIT MACHINE ' + id); //Untuk kasih judul di modal
        //     $("#staticBackdrop1").modal('show'); //kalo ID pake "#" kalo class pake "." 
        //     $.ajax({
        //         method: "GET",
        //         dataType: "json",
        //         url: "{{ url('settings/mesincasting') }}" + "/" + id,
        //         success: function(data) {
        //             console.log(data);
        //             $("#nama_mc").val(data[0].mc);
        //             $("#material").val(data[0].material);
        //             $("#min_molten").val(data[0].min_level_molten);
        //             $("#max_molten").val(data[0].max_level_molten);
        //             $("#nama_part").val(data[0].nama_part);
        //             // $("#formSettings").action('/settings/mesincasting/' + data[0].mc + '/simpan');
        //             // function MoltenSimpan() {
        //             //     document.form_molten.action = '/settings/mesincasting/' + data[0].mc + 'simpan';

        //             //     return true;
        //             // }
        //             // $("#formSettings").attr("action"); //Will retrieve it

        //             $("#formSettings").attr("action", "/settings/mesincasting/" + data[0].mc +
        //                 "/simpan"); //Will set it

        //             let max1 = data[0].max_level_molten;
        //             let min1 = data[0].min_level_molten;
        //             let jarak1 = max1 - min1 //hasilnya 2000
        //             let pembagi1 = (jarak1 * 0.01); //hasilnya 20
        //             let value1 = (data[0].aktual_molten - min1); //hasilnya 500
        //             let level1 = (value1 / pembagi1);

        //             console.log(level1);

        //             let battery1 = document.getElementById('battery');

        //             let batteryLiquid1 = document.getElementById('battery__liquid');
        //             batteryLiquid1
        //                 .setAttribute('style', `height: ${level1}%;`);

        //             if (level1 <= 20) {
        //                 batteryLiquid1.style.backgroundColor = '#f71515'

        //             } else if (level1 <= 40) {
        //                 batteryLiquid1.style.backgroundColor = '#f16716'

        //             } else if (level1 <= 60) {
        //                 batteryLiquid1.style.backgroundColor = '#f5dd06'

        //             } else if (level1 = 80) {
        //                 batteryLiquid1.style.backgroundColor = '#98ce06'

        //             } else {
        //                 batteryLiquid1.style.backgroundColor = '#06ce17'
        //             }

        //         }
        //     });
        // }

        // const btnEdit = document.getElementById('btnEditMtr');
        // document.getElementById('editMtr').style.visibility = 'hidden';
        // btnEdit.addEventListener('click', () => {
        //     const MtrEdit = document.getElementById('editMtr');
        //     if (MtrEdit.style.visibility === 'visible') {
        //         MtrEdit.style.visibility = 'hidden';
        //     } else {
        //         MtrEdit.style.visibility = 'visible';
        //     }
        // });

        // function Material(id) {
        //     if (id == 1) {
        //         document.getElementById('material').value = 'HD-2'
        //     } else if (id == 2) {
        //         document.getElementById('material').value = 'HD-4'
        //     } else if (id == 3) {
        //         document.getElementById('material').value = 'ADC-12'
        //     } else if (id == 4) {
        //         document.getElementById('material').value = 'YH3R'
        //     }
        // }
    </script>
@endsection

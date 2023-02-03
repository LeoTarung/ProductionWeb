@extends('mainLHP')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center mx-auto mt-3">
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                <a href="" class="fs-1 btn btn-lg btn-primary border-info text-uppercase fw-bold" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
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
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
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
                                    <td><button class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop1">EDIT</button></td>
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
    </div>
    {{-- END MODAL --}}

    {{-- MODAL 2 --}}
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel1"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#table_id').dataTable({
                responsive: true,
                // "bPaginate": false,
                // "bFilter": false,
                "bInfo": false
            });

            function openmodal() {
                $("#staticBackdropLabel").html('SETUP CASTING MACHINE'); //Untuk kasih judul di modal
                $("#staticBackdrop").modal('show'); //kalo ID pake "#" kalo class pake "." 
            }
        });
    </script>
@endsection

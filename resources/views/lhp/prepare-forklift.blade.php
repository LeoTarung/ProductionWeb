@extends('mainLHP')
@section('content')
    {{-- /*=============== CSS ===============*/ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/forklift.css') }}">


    {{-- /*=============== CONTENT ===============*/ --}}
    <div class="container-fluid">
        @if ($errors->any())
            <?php toast($errors->first(), 'error'); ?>
        @endif
        <div class="row justify-content-center mx-auto mt-3">
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                @if ($id_forklift1 == null)
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="forklift(1)">
                        <div class="font-forklift">FORKLIFT-1</div>
                    </a>
                @else
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="forklift(1)">
                        <div class="font-forklift">FORKLIFT-1</div>
                    </a>
                @endif
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                @if ($id_forklift2 == null)
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="forklift(2)">
                        <div class="font-forklift">FORKLIFT-2</div>

                    </a>
                @else
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="forklift(2)">
                        <div class="font-forklift">FORKLIFT-2</div>

                    </a>
                @endif
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                @if ($id_forklift3 == null)
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="forklift(3)">
                        <div class="font-forklift">FORKLIFT-3</div>
                    </a>
                @else
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="forklift(3)">
                        <div class="font-forklift">FORKLIFT-3</div>

                    </a>
                @endif
            </div>
        </div>

        <div class="row justify-content-center mx-auto mt-4 mb-2">
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                @if ($id_forklift4 == null)
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="forklift(4)">
                        <div class="font-forklift">FORKLIFT-4</div>
                    </a>
                @else
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="forklift(4)">
                        <div class="font-forklift">FORKLIFT-4</div>
                    </a>
                @endif
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                @if ($id_forklift5 == null)
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="forklift(5)">
                        <div class="font-forklift">FORKLIFT-5</div>
                    </a>
                @else
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="forklift(5)">
                        <div class="font-forklift">FORKLIFT-5</div>
                    </a>
                @endif
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                @if ($id_forklift6 == null)
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="forklift(6)">
                        <div class="font-forklift">FORKLIFT-6</div>
                    </a>
                @else
                    <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop2" onclick="forklift(6)">
                        <div class="font-forklift">FORKLIFT-6</div>

                    </a>
                @endif
            </div>
            <button data-swal-template="#my-template">
                Trigger modal
            </button>
        </div>
    </div>

    {{-- MODAL --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl  ">
            <form action="{{ url('/pre-forklift/simpan') }}" method="POST"
                onSubmit="document.getElementById('submit').disabled=true;">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">P R E P A R A T I O N </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- PREPARATION FORM --}}
                        <div class="row">

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold" id="nrp"
                                        name="nrp" required>
                                    <label for="nrp" class="">N R P</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold" id="nama"
                                        name="nama" readonly>
                                    <label for="nama" class="">N A M A</label>
                                </div>
                            </div>

                            <div class="col-12"></div>
                        </div>
                        <div class="row mt-3">

                            <div class="col-12">
                                <div class="form-floating ">
                                    <input type="text" class="form-control border-dark text-uppercase fw-bold"
                                        id="mesin" name="mesin" readonly required>
                                    <label for="mesin">M E S I N</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justifyconten">
                                <div class="form-check" id="material" name="material" required>
                                    <label for="material " class="">M A T E R I A L :</label>
                                    <p class="mt-2">
                                        <input type="radio" class="btn-check" name="material" id="success-outlined"
                                            autocomplete="off" value="HD-2">
                                        <label class="btn btn-outline-success" for="success-outlined">HD-2</label>
                                        <input type="radio" class="btn-check" name="material" id="success-outlined2"
                                            autocomplete="off" value="HD-4">
                                        <label class="btn btn-outline-success" for="success-outlined2">HD-4</label>
                                        <input type="radio" class="btn-check" name="material" id="success-outlined3"
                                            autocomplete="off" value="ADC-12">
                                        <label class="btn btn-outline-success" for="success-outlined3">ADC-12</label>
                                        <input type="radio" class="btn-check" name="material" id="success-outlined4"
                                            autocomplete="off" value="YH3R">
                                        <label class="btn btn-outline-success " for="success-outlined4">YH3R</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- END PREPARATION FORM --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                        {{-- <button type="submit" class="btn btn-primary" onclick="redirect()">Lanjutkan</button> --}}
                        <button type="submit" id="submit" class="btn btn-primary">Lanjutkan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- END MODAL --}}

    {{-- MODAL 2 --}}

    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog   ">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h1 class="modal-title fs-5 " id="staticBackdropLabel">P E R H A T I A N</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="border-bottom"> <i class='bx bx-error-alt bx-sm'></i> Anda sudah Preparation dengan Nama :
                        <span id="call_nama" class="fw-bold">
                        </span>
                        , jika anda ingin
                        preparation dengan
                        NRP lain silahkan
                        tekan tombol <span class="fw-bold"> Lanjutkan </span>
                    </div>
                    <div class="mt-2"> <i class='bx bx-error-alt bx-sm'></i>Jika anda ingin melanjutkan preparation yang
                        sebelumnya silahkan tekan tombol
                        <span class="fw-bold"> Supply </span>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    {{-- <button type="submit" class="btn btn-primary" onclick="redirect()">Lanjutkan</button> --}}
                    <a type="button" id="supply" class="btn btn-success">Supply</a>
                    <a type="button" id="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                        class="btn btn-primary">Lanjutkan</a>
                </div>
            </div>
        </div>
    </div>
    {{-- END MODAL 2 --}}

    <script>
        function forklift(id) {
            if (id == 1) {
                document.getElementById("mesin").value = 'FORKLIFT-1'
                @if ($id_forklift1 != null)
                    document.getElementById("call_nama").innerHTML = '{{ $id_forklift1->nama }}'
                    document.getElementById("supply").href = "/forklift/FORKLIFT-1/{{ $id_forklift1->id }}"
                @endif
            } else if (id == 2) {
                document.getElementById("mesin").value = 'FORKLIFT-2'
                @if ($id_forklift2 != null)
                    document.getElementById("call_nama").innerHTML = "{{ $id_forklift2->nama }}"
                    document.getElementById("supply").href = "/forklift/FORKLIFT-2/{{ $id_forklift2->id }}"
                @endif
            } else if (id == 3) {
                document.getElementById("mesin").value = 'FORKLIFT-3'
                @if ($id_forklift3 != null)
                    document.getElementById("call_nama").innerHTML = "{{ $id_forklift3->nama }}"
                    document.getElementById("supply").href = "/forklift/FORKLIFT-3/{{ $id_forklift3->id }}"
                @endif
            } else if (id == 4) {
                document.getElementById("mesin").value = 'FORKLIFT-4'
                @if ($id_forklift4 != null)
                    document.getElementById("call_nama").innerHTML = "{{ $id_forklift4->nama }}"
                    document.getElementById("supply").href = "/forklift/FORKLIFT-4/{{ $id_forklift4->id }}"
                @endif
            } else if (id == 5) {
                document.getElementById("mesin").value = 'FORKLIFT-5'
                @if ($id_forklift5 != null)
                    document.getElementById("call_nama").innerHTML = "{{ $id_forklift5->nama }}"
                    document.getElementById("supply").href = "/forklift/FORKLIFT-5/{{ $id_forklift5->id }}"
                @endif
            } else if (id == 6) {
                document.getElementById("mesin").value = 'FORKLIFT-6'
                @if ($id_forklift6 != null)
                    document.getElementById("call_nama").innerHTML = "{{ $id_forklift6->nama }}"
                    document.getElementById("supply").href = "/forklift/FORKLIFT-6/{{ $id_forklift6->id }}"
                @endif
            }

        }

        $(document).ready(function() {
            $('#nrp').keyup(function() {
                $('#result').html('');
                var searchnrp = $('#nrp').val();
                console.log(searchnrp);
                $.ajax({
                    method: "GET",
                    dataType: "json",
                    url: "{{ url('/dtkyrw') }}" + "/" + searchnrp,
                    success: function(data) {
                        // console.log(data[0].name);
                        // $("#nama").html(data[0].name);
                        document.getElementById("nama").value = data[0].name;
                    }
                });
            });
        });
    </script>
@endsection

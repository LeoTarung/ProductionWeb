@extends('mainLHP')
@section('content')
    {{-- /*=============== CSS ===============*/ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/forklift.css') }}">


    {{-- /*=============== CONTENT ===============*/ --}}
    <div class="container-fluid">
        <div class="row justify-content-center mx-auto mt-3">
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                {{-- @if ($id_striko1 == null) --}}
                <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold " data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <div class="font-forklift">FORKLIFT-1</div>
                </a>
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                {{-- @if ($id_striko1 == null) --}}
                <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="font-forklift">FORKLIFT-2</div>
                </a>
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                {{-- @if ($id_striko1 == null) --}}
                <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="font-forklift">FORKLIFT-3</div>
                </a>
            </div>
        </div>

        <div class="row justify-content-center mx-auto mt-4 mb-2">
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                {{-- @if ($id_striko1 == null) --}}
                <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="font-forklift">FORKLIFT-4</div>
                </a>
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                {{-- @if ($id_striko1 == null) --}}
                <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="font-forklift">FORKLIFT-5</div>
                </a>
            </div>
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                {{-- @if ($id_striko1 == null) --}}
                <a class="button-prep-fork btn btn-lg btn-primary border-info text-uppercase fw-bold "
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="font-forklift">FORKLIFT-6</div>
                </a>
            </div>
        </div>
    </div>

    {{-- MODAL --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl  ">
            <form action="" method="POST" onSubmit="document.getElementById('submit').disabled=true;">
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
                            <div class="col-6">
                                <div class="form-floating">
                                    <select class="form-select border-dark fw-bold" id="material" name="material" required>
                                        <option value="" selected disabled>Open this select menu</option>
                                        <option value="HD-2">HD-2</option>
                                        <option value="HD-4">HD-4</option>
                                        <option value="ADC-12">ADC-12</option>
                                        <option value="YH3R">YH3R</option>
                                    </select>
                                    <label for="material" class="">M A T E R I A L</label>
                                </div>
                            </div>
                            {{-- <div class="col-6">
                                <div class="form-floating ">
                                    <input type="text" class="form-control border-dark text-uppercase fw-bold"
                                        id="mesin" name="mesin" readonly required>
                                    <label for="mesin">M E S I N</label>
                                </div>
                            </div>
                            <input class="form-control" type="hidden" id="shift" name="shift"
                                value="{{ $shift }}">
                            <input class="form-control" type="hidden" id="id" name="id"
                                value="{{ $lhp->id + 1 }}">
                        </div> --}}
                            {{-- END PREPARATION FORM --}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                            {{-- <button type="submit" class="btn btn-primary" onclick="redirect()">Lanjutkan</button> --}}
                            <button type="submit" class="btn btn-primary">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- END MODAL --}}

    <script>
        $(document).ready(function() {
            $('#nrp').keyup(function() {
                $('#result').html('');
                var searchnrp = $('#nrp').val();
                console.log(searchnrp);
                $.ajax({
                    method: "GET",
                    dataType: "json",
                    url: "http://192.168.137.194:8000/dtkyrw/" + searchnrp,
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

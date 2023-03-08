@extends('mainLHP')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/prepCasting.css') }}">
    <div class="container-fluid ">
        <div class="card my-3">
            <div class="card-header">P R E P A R A T I O N</div>
            <form action="">
                @csrf
                <div class="row mt-3 mx-2">

                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control border-dark fw-bold" id="nrp1"
                                        name="nrp1" required>
                                    <label for="nrp" class="">N R P - 1</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control border-dark fw-bold" id="nrp2"
                                        name="nrp2" required>
                                    <label for="nrp" class="">N R P - 2</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold" id="nama1"
                                        name="nama1" readonly>
                                    <label for="nama" class="">N A M A - 1</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold" id="nama2"
                                        name="nama2" readonly>
                                    <label for="nama" class="">N A M A - 2</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-3 mx-2">

                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control border-dark fw-bold" id="nrp3"
                                        name="nrp3" required>
                                    <label for="nrp" class="">N R P - 3</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control border-dark fw-bold" id="nrp4"
                                        name="nrp4" required>
                                    <label for="nrp" class="">N R P - 4</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold" id="nama3"
                                        name="nama3" readonly>
                                    <label for="nama" class="">N A M A - 3</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold" id="nama4"
                                        name="nama4" readonly>
                                    <label for="nama" class="">N A M A - 4 </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-3 mx-2">

                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control border-dark fw-bold" id="nrp5"
                                        name="nrp5" required>
                                    <label for="nrp" class="">N R P - 5</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control border-dark fw-bold" id="nrp6"
                                        name="nrp6" required>
                                    <label for="nrp" class="">N R P - 6</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold" id="nama5"
                                        name="nama5" readonly>
                                    <label for="nama" class="">N A M A - 5</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold" id="nama6"
                                        name="nama6" readonly>
                                    <label for="nama" class="">N A M A - 6 </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mt-3 mx-2">
                    <div class="col-3">
                        <div class="form-floating ">
                            <input type="number" class="form-control border-dark text-uppercase fw-bold" id="line"
                                name="line" readonly required>
                            <label for="line">L I N E</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating ">
                            <input type="text" class="form-control border-dark text-uppercase fw-bold" id="mesin"
                                name="mesin" readonly required>
                            <label for="mesin">M E S I N</label>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-floating ">
                            <input type="text" class="form-control border-dark text-uppercase fw-bold" id="nama_part"
                                name="nama_part" readonly required>
                            <label for="nama_part">N A M A _ P A R T</label>
                        </div>
                    </div>
                </div>
                <div class="row my-3 mx-2">
                    <div class="col-6">
                        <div class="form-floating ">
                            <input type="text" class="form-control border-dark text-uppercase fw-bold" id="dies"
                                name="dies" readonly required>
                            <label for="dies">D I E S</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating ">
                            <input type="text" class="form-control border-dark text-uppercase fw-bold" id="cavity"
                                name="cavity" readonly required>
                            <label for="cavity">C A V I T Y</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary">RESET
                    </button>
                    <div class="btn btn-success mx-3">SIMPAN </div>
                </div>
            </form>
        </div>
    </div>
@endsection

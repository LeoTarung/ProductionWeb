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
                        <div class="form-floating">
                            <input type="number" class="form-control border-dark fw-bold" id="nrp" name="nrp"
                                required>
                            <label for="nrp" class="">N R P</label>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control border-dark fw-bold" id="nama" name="nama"
                                readonly>
                            <label for="nama" class="">N A M A</label>
                        </div>
                    </div>

                    <div class="col-12"></div>
                </div>
                <div class="row mt-3 mx-2">
                    <div class="col-6">
                        <div class="form-floating ">
                            <input type="number" class="form-control border-dark text-uppercase fw-bold" id="mesin"
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
                <div class="row mt-3 mx-2">
                    <div class="col-6">
                        <div class="form-floating ">
                            <input type="text" class="form-control border-dark text-uppercase fw-bold" id="line"
                                name="line" readonly required>
                            <label for="line">L I N E</label>
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
                <div class="row mt-3 mb-3 mx-2">
                    <div class="col-6">
                        <div class="form-floating ">
                            <input type="text" class="form-control border-dark text-uppercase fw-bold" id="dies"
                                name="dies" readonly required>
                            <label for="dies">D I E S</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end"><button
                        class="btn btn-secondary mx-3">Cancel</button><button class="btn btn-success">Simpan</button></div>
            </form>
        </div>
    </div>
@endsection

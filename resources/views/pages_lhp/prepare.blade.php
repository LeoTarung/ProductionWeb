@extends('mainLHP')
@section('content')
    <div class="row justify-content-center mx-auto mt-5">
        @if (session()->has('calladmin'))
            <div class="alert alert-danger" role="alert">
                Silahkan Hubungi Admin Digitalization Untuk Melanjutkan.
            </div>
        @elseif(session()->has('preulang'))
            <div class="alert alert-info" role="alert">
                Silahkan Preparation Ulang.
            </div>
        @endif
        <div class="d-grid gap-2 col-6 mx-auto">
            @if ($id_striko1 == null)
                <a class="btn btn-lg btn-primary border-info text-uppercase fw-bold " data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" onclick="testing(1)">STRIKO-1</a> <br>
            @else
                <a class="btn btn-lg btn-primary border-info text-uppercase fw-bold"
                    href="/melting/Striko-1/{{ $id_striko1->id }}">STRIKO-1</a> <br>
            @endif
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            @if ($id_striko2 == null)
                <a class="btn btn-lg btn-primary border-info text-uppercase fw-bold" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" onclick="testing(2)">STRIKO-2</a> <br>
            @else
                <a class="btn btn-lg btn-primary border-info text-uppercase fw-bold"
                    href="/melting/Striko-2/{{ $id_striko2->id }}">STRIKO-2</a> <br>
            @endif
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            @if ($id_striko3 == null)
                <a class="btn btn-lg btn-primary border-info text-uppercase fw-bold" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" onclick="testing(3)">STRIKO-3</a> <br>
            @else
                <a class="btn btn-lg btn-primary border-info text-uppercase fw-bold"
                    href="/melting/Striko-3/{{ $id_striko3->id }}">STRIKO-3</a> <br>
            @endif
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            @if ($id_Swift_Asia == null)
                <a class="btn btn-lg btn-primary border-info text-uppercase fw-bold" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" onclick="testing(4)">Swift_Asia</a> <br>
            @else
                <a class="btn btn-lg btn-primary border-info text-uppercase fw-bold"
                    href="/melting/Swift_Asia/{{ $id_Swift_Asia->id }}">Swift_Asia</a> <br>
            @endif
        </div>

    </div>
    {{-- MODAL --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="{{ url('/melting/simpan') }}" method="POST"
                onSubmit="document.getElementById('submit').disabled=true;">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">P R E P A R A T I O N</h1>
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
                                        name="nama" value="ValueWajibADA" readonly>
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
                            <div class="col-6">
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
                        </div>
                        {{-- END PREPARATION FORM --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                        {{-- <button type="submit" class="btn btn-primary" onclick="redirect()">Lanjutkan</button> --}}
                        <button type="submit" class="btn btn-primary">Lanjutkan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- END MODAL --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        function testing(id) {
            if (id == 1) {
                document.getElementById("mesin").value = 'Striko-1'
            } else if (id == 2) {
                document.getElementById("mesin").value = 'Striko-2'
            } else if (id == 3) {
                document.getElementById("mesin").value = 'Striko-3'
            } else if (id == 4) {
                document.getElementById("mesin").value = 'Swift_Asia'
            }
        }
    </script>
@endsection

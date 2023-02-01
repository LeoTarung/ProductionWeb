@extends('mainLHP')
@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center mx-auto mt-3">
            <div class="button-machine d-grid gap-2 col-4 mx-auto">
                <a href="" class="buttonssssss btn btn-lg btn-primary border-info text-uppercase fw-bold"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="forklift(1)">
                    <div class="font-forklift">Setting Molten <br>Mesin Casting</div>
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
        <div class="modal-dialog modal-xl  ">
            <form action="{{ url('/pre-forklift/simpan') }}" method="POST"
                onSubmit="document.getElementById('submit').disabled=true;">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">S E T T I N G S </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold fs-4" id="forklift"
                                        name="forklift" value="55" readonly required>
                                    <input type="text" class="form-control border-dark fw-bold " id="mc"
                                        name="mc" readonly required hidden>
                                    <label for="mc" class="">Mesin Casting</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold fs-4" id="forklift"
                                        name="forklift" value="HD-4" readonly required>
                                    <input type="text" class="form-control border-dark fw-bold " id="mc"
                                        name="mc" readonly required hidden>
                                    <label for="mc" class="">Material</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                    onclick="mc({{ $m['mc'] }})">
                                    {{-- <div class="card-header text-center fw-bold"> MC-{{ $m['mc'] }}</div> --}}
                                    <div class="card-header text-center fw-bold"> MC-{{ $m->mc }}</div>
                                    <section id="battery{{ $m['mc'] }}"
                                        class="battery mb-3 d-flex justify-content-start"
                                        onclick="nama({{ $m['mc'] }})">
                                        <div id="battery__pill" class="battery__pill">
                                            <div id="battery__level" class="battery__level">
                                                <div id="battery__liquid{{ $m['mc'] }}" class="battery__liquid">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold fs-4" id="forklift"
                                        name="forklift" value="1000" readonly required>
                                    <input type="text" class="form-control border-dark fw-bold " id="mc"
                                        name="mc" readonly required hidden>
                                    <label for="mc" class="">Min Level Molten</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-dark fw-bold fs-4" id="forklift"
                                        name="forklift" value="2000" readonly required>
                                    <input type="text" class="form-control border-dark fw-bold " id="mc"
                                        name="mc" readonly required hidden>
                                    <label for="mc" class="">Max Level Molten</label>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-6">Tes test ets</div> --}}
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
@endsection

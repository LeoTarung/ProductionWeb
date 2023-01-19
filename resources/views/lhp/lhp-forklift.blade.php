@extends('mainLHP')
@section('content')
    {{-- CSS --}}

    <link rel="stylesheet" type="text/css" href="/css/forklift.css">

    {{-- Content --}}

    <div class="container-fluid">
        <div class="row  mt-3 mb-4 d-flex justify-content-center">

            @if ($WOW == 'hd-2')
                <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="card-header text-center fw-bold">MC-3 hd-2</div>
                    <section id="battery" class="battery mb-3 d-flex justify-content-start">
                        <div id="battery__pill" class="battery__pill">
                            <div id="battery__level" class="battery__level">
                                <div id="battery__liquid" class="battery__liquid"></div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="card-header text-center fw-bold">MC-3 hd-2</div>
                    <section id="battery2" class="battery mb-3 d-flex justify-content-start">
                        <div id="battery__pill" class="battery__pill">
                            <div id="battery__level" class="battery__level">
                                <div id="battery__liquid2" class="battery__liquid"></div>
                            </div>
                        </div>
                    </section>
                </div>
            @else
                <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="card-header text-center fw-bold">MC-4 hd-4</div>
                    <section id="battery3" class="battery mb-3 d-flex justify-content-start">
                        <div id="battery__pill" class="battery__pill">
                            <div id="battery__level" class="battery__level">
                                <div id="battery__liquid3" class="battery__liquid"></div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="card-header text-center fw-bold">MC-4 hd-4</div>
                    <section id="battery4" class="battery mb-3 d-flex justify-content-start">
                        <div id="battery__pill" class="battery__pill">
                            <div id="battery__level" class="battery__level">
                                <div id="battery__liquid4" class="battery__liquid"></div>
                            </div>
                        </div>
                    </section>
                </div>
            @endif
        </div>

    </div>

    {{-- MODAL --}}rtdiv

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ url('/lhp-forklift') }}" method="POST">
                    <div class="modal-header bg-secondary text-center">
                        <h1 class="modal-title fs-5 font-white" id="staticBackdropLabel">MC 1</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <table class="table">
                            <tr>
                                <td class="fs-5">FORKLIFT</td>
                                <td>

                                    <input type="text" class="form-control fw-bold" id="nama"
                                        name="nama"value="09"readonly>
                                </td>
                                <td class="fs-5">NRP</td>
                                <td><input type="text" class="form-control fw-bold" id="nama" name="nama"
                                        value="3551"readonly></td>

                            </tr>
                            <tr>

                                <td class="fs-5">MC NO</td>
                                <td><input type="number" class="form-control  fw-bold" id="mc" name="mc"
                                        readonly></td>
                                <td class="fs-5">MATERIAL</td>
                                <td><input type="text" class="form-control  fw-bold" id="material" name="material"
                                        value="HD-2" readonly></td>
                            </tr>
                            <tr>
                                <td class="fs-5">FURNACE</td>
                                <td colspan="3" class="mt-1">
                                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                                        autocomplete="off" value="STRIKO-1">
                                    <label class="btn btn-outline-success" for="success-outlined">STRIKO-1</label>
                                    <input type="radio" class="btn-check" name="options-outlined"
                                        id="success-outlined2" autocomplete="off" value="STRIKO-2">
                                    <label class="btn btn-outline-success" for="success-outlined2">STRIKO-2</label>
                                    <input type="radio" class="btn-check" name="options-outlined"
                                        id="success-outlined3" autocomplete="off" value="STRIKO-3">
                                    <label class="btn btn-outline-success" for="success-outlined3">STRIKO-3</label>
                                    <input type="radio" class="btn-check" name="options-outlined"
                                        id="success-outlined4" autocomplete="off" value="SWIF-ASIA">
                                    <label class="btn btn-outline-success " for="success-outlined4">SWIF ASIA</label>


                            </tr>
                            <tr>
                                <td class="fs-5">BERAT(kg)</td>
                                <td colspan="2" rowspan="3"><input type="number"
                                        class="form-control border-dark fw-bold" id="berat" name="berat"></td>
                            </tr>
                        </table>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script>
        @if ($WOW == 'hd-2')
            //////////////////////////////////// Molten 1 ////////////////////////////////////////////

            let battery = document.getElementById('battery');
            let batteryLiquid = document.getElementById('battery__liquid');
            // let batteryLiquid2 = document.getElementById('battery__liquid::after');
            level = 10;
            batteryLiquid.setAttribute('style', `height:${level}%`);
            if (level <= 20) {
                // batteryLiquid.style.backgroundColor = '#ffffff'
                batteryLiquid.style.backgroundColor = '#f71515'
                // batteryLiquid.style.backgroundColor = "linear-gradient(to right," + color1.value + "," + color2
                //     .value +
                //     ")";
            } else if (level <= 40) {
                batteryLiquid.style.backgroundColor = '#f16716'
                // batteryLiquid2.style.backgroundColor = 'orange'
            } else if (level <= 60) {
                batteryLiquid.style.backgroundColor = '#f5dd06'
                // batteryLiquid2.style.backgroundColor = 'green'
            } else if (level <= 80) {
                batteryLiquid.style.backgroundColor = '#98ce06'
                // batteryLiquid2.style.backgroundColor = 'green'
            } else {
                batteryLiquid.style.backgroundColor = '#06ce17'
                // batteryLiquid2.style.backgroundColor = 'green'
            }
            console.log(level);
            //////////////////////////////////// Molten 2 ////////////////////////////////////////////

            let battery2 = document.getElementById('battery2');
            let batteryLiquid2 = document.getElementById('battery__liquid2');
            // let batteryLiquid2 = document.getElementById('battery__liquid::after');
            level = 50;
            batteryLiquid2.setAttribute('style', `height:${level}%`);
            if (level <= 20) {
                // batteryLiquid.style.backgroundColor = '#ffffff'
                batteryLiquid2.style.backgroundColor = '#f71515'
                // batteryLiquid.style.backgroundColor = "linear-gradient(to right," + color1.value + "," + color2
                //     .value +
                //     ")";
            } else if (level <= 40) {
                batteryLiquid2.style.backgroundColor = '#f16716'
                // batteryLiquid2.style.backgroundColor = 'orange'
            } else if (level <= 60) {
                batteryLiquid2.style.backgroundColor = '#f5dd06'
                // batteryLiquid2.style.backgroundColor = 'green'
            } else if (level <= 80) {
                batteryLiquid2.style.backgroundColor = '#98ce06'
                // batteryLiquid2.style.backgroundColor = 'green'
            } else {
                batteryLiquid2.style.backgroundColor = '#06ce17'
                // batteryLiquid2.style.backgroundColor = 'green'
            }
            console.log(level);
        @else
            //////////////////////////////////// Molten 3 ////////////////////////////////////////////


            let battery3 = document.getElementById('battery3');
            let batteryLiquid3 = document.getElementById('battery__liquid3');
            // let batteryLiquid3 = document.getElementById('battery__liquid::after');
            level = 60;
            batteryLiquid3.setAttribute('style', `height:${level}%`);
            if (level <= 20) {
                // batteryLiquid.style.backgroundColor = '#ffffff'
                batteryLiquid3.style.backgroundColor = '#f71515'
                // batteryLiquid.style.backgroundColor = "linear-gradient(to right," + color1.value + "," + color3
                //     .value +
                //     ")";
            } else if (level <= 40) {
                batteryLiquid3.style.backgroundColor = '#f16716'
                // batteryLiquid3.style.backgroundColor = 'orange'
            } else if (level <= 60) {
                batteryLiquid3.style.backgroundColor = '#f5dd06'
                // batteryLiquid3.style.backgroundColor = 'green'
            } else if (level <= 80) {
                batteryLiquid3.style.backgroundColor = '#98ce06'
                // batteryLiquid3.style.backgroundColor = 'green'
            } else {
                batteryLiquid3.style.backgroundColor = '#06ce17'
                // batteryLiquid2.style.backgroundColor = 'green'
            }

            //////////////////////////////////// Molten 4 ////////////////////////////////////////////

            let battery4 = document.getElementById('battery4');
            let batteryLiquid4 = document.getElementById('battery__liquid4');
            // let batteryLiquid4 = document.getElementById('battery__liquid::after');
            level = 25;
            batteryLiquid4.setAttribute('style', `height:${level}%`);
            if (level <= 20) {
                // batteryLiquid.style.backgroundColor = '#ffffff'
                batteryLiquid4.style.backgroundColor = '#f71515'
                // batteryLiquid.style.backgroundColor = "linear-gradient(to right," + color1.value + "," + color4batteryLiquid4
                //     .value +
                //     ")";
            } else if (level <= 40) {
                batteryLiquid4.style.backgroundColor = '#f16716'
                // batteryLiquid4.style.backgroundColor = 'orange'
            } else if (level <= 60) {
                batteryLiquid4.style.backgroundColor = '#f5dd06'
                // batteryLiquid4.style.backgroundColor = 'green'
            } else if (level <= 80) {
                batteryLiquid4.style.backgroundColor = '#98ce06'
                // batteryLiquid4.style.backgroundColor = 'green'
            } else {
                batteryLiquid4.style.backgroundColor = '#06ce17'
                // batteryLiquid2.style.backgroundColor = 'green'
            }
        @endif
    </script>
@endsection

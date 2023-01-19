@extends('mainLHP')
@section('content')
    {{-- CSS --}}

    <link rel="stylesheet" type="text/css" href="/css/forklift.css">

    {{-- Content --}}

    <div class="container-fluid">
        <div class="row  mt-3 mb-4 d-flex justify-content-center">
            <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="card-header text-center fw-bold">MC-1</div>
                <section id="battery" class="battery mb-3 d-flex justify-content-start">
                    <div id="battery__pill" class="battery__pill">
                        <div id="battery__level" class="battery__level">
                            <div id="battery__liquid" class="battery__liquid"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="card-header text-center fw-bold">MC-2</div>
                <section id="battery2" class="battery mb-3 d-flex justify-content-start">
                    <div id="battery__pill" class="battery__pill">
                        <div id="battery__level" class="battery__level">
                            <div id="battery__liquid2" class="battery__liquid"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="card-header text-center fw-bold">MC-3</div>
                <section id="battery3" class="battery mb-3 d-flex justify-content-start">
                    <div id="battery__pill" class="battery__pill">
                        <div id="battery__level" class="battery__level">
                            <div id="battery__liquid3" class="battery__liquid"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="card-header text-center fw-bold">MC-4</div>
                <section id="battery4" class="battery mb-3 d-flex justify-content-start">
                    <div id="battery__pill" class="battery__pill">
                        <div id="battery__level" class="battery__level">
                            <div id="battery__liquid4" class="battery__liquid"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="card-header text-center fw-bold">MC-5</div>
                <section id="battery5" class="battery mb-3 d-flex justify-content-start">
                    <div id="battery__pill" class="battery__pill">
                        <div id="battery__level" class="battery__level">
                            <div id="battery__liquid5" class="battery__liquid"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="card-header text-center fw-bold">MC-6</div>
                <section id="battery6" class="battery mb-3 d-flex justify-content-start">
                    <div id="battery__pill" class="battery__pill">
                        <div id="battery__level" class="battery__level">
                            <div id="battery__liquid6" class="battery__liquid"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="card-header text-center fw-bold">MC-7</div>
                <section id="battery7" class="battery mb-3 d-flex justify-content-start">
                    <div id="battery__pill" class="battery__pill">
                        <div id="battery__level" class="battery__level">
                            <div id="battery__liquid7" class="battery__liquid"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="card-header text-center fw-bold">MC-8</div>
                <section id="battery8" class="battery mb-3 d-flex justify-content-start">
                    <div id="battery__pill" class="battery__pill">
                        <div id="battery__level" class="battery__level">
                            <div id="battery__liquid8" class="battery__liquid"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="card-header text-center fw-bold">MC-9</div>
                <section id="battery9" class="battery mb-3 d-flex justify-content-start">
                    <div id="battery__pill" class="battery__pill">
                        <div id="battery__level" class="battery__level">
                            <div id="battery__liquid9" class="battery__liquid"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="card-header text-center fw-bold">MC-10</div>
                <section id="battery10" class="battery mb-3 d-flex justify-content-start">
                    <div id="battery__pill" class="battery__pill">
                        <div id="battery__level" class="battery__level">
                            <div id="battery__liquid10" class="battery__liquid"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>

    {{-- MODAL --}}

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
                                    <input type="text" class="form-control fw-bold" id="nama" name="nama"
                                        value="09"readonly>
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
                                        value="HD-2"readonly></td>
                            </tr>
                            <tr>
                                <td class="fs-5">FURNACE</td>
                                <td colspan="3" class="mt-1">
                                    <input type="radio" class="btn-check" name="options-outlined"
                                        id="success-outlined" autocomplete="off">
                                    <label class="btn btn-outline-success" for="success-outlined">STRIKO-1</label>
                                    <input type="radio" class="btn-check" name="options-outlined"
                                        id="success-outlined2" autocomplete="off">
                                    <label class="btn btn-outline-success" for="success-outlined2">STRIKO-2</label>
                                    <input type="radio" class="btn-check" name="options-outlined"
                                        id="success-outlined3" autocomplete="off">
                                    <label class="btn btn-outline-success" for="success-outlined3">STRIKO-3</label>
                                    <input type="radio" class="btn-check" name="options-outlined"
                                        id="success-outlined4" autocomplete="off">
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

        //////////////////////////////////// Molten 5 ////////////////////////////////////////////

        let battery5 = document.getElementById('battery5');
        let batteryLiquid5 = document.getElementById('battery__liquid5');
        // let batteryLiquid5 = document.getElementById('battery__liquid::after');
        level = 90;
        batteryLiquid5.setAttribute('style', `height:${level}%`);
        if (level <= 20) {
            // batteryLiquid.style.backgroundColor = '#ffffff'
            batteryLiquid5.style.backgroundColor = '#f71515'
            // batteryLiquid.style.backgroundColor = "linear-gradient(to right," + color1.value + "," + color5batteryLiquid5
            //     .value +
            //     ")";
        } else if (level <= 40) {
            batteryLiquid5.style.backgroundColor = '#f16716'
            // batteryLiquid5.style.backgroundColor = 'orange'
        } else if (level <= 60) {
            batteryLiquid5.style.backgroundColor = '#f5dd06'
            // batteryLiquid5.style.backgroundColor = 'green'
        } else if (level <= 80) {
            batteryLiquid5.style.backgroundColor = '#98ce06'
            // batteryLiquid5.style.backgroundColor = 'green'
        } else {
            batteryLiquid5.style.backgroundColor = '#06ce17'
            // batteryLiquid2.style.backgroundColor = 'green'
        }

        //////////////////////////////////// Molten 6 ////////////////////////////////////////////

        let battery6 = document.getElementById('battery6');
        let batteryLiquid6 = document.getElementById('battery__liquid6');
        // let batteryLiquid6 = document.getElementById('battery__liquid::after');
        level = 10;
        batteryLiquid6.setAttribute('style', `height:${level}%`);
        if (level <= 20) {
            // batteryLiquid.style.backgroundColor = '#ffffff'
            batteryLiquid6.style.backgroundColor = '#f71515'
            // batteryLiquid.style.backgroundColor = "linear-gradient(to right," + color1.value + "," + color5batteryLiquid5
            //     .value +
            //     ")";
        } else if (level <= 40) {
            batteryLiquid6.style.backgroundColor = '#f16716'
            // batteryLiquid6.style.backgroundColor = 'orange'
        } else if (level <= 60) {
            batteryLiquid6.style.backgroundColor = '#f5dd06'
            // batteryLiquid5.style.backgroundColor = 'green'
        } else if (level <= 80) {
            batteryLiquid6.style.backgroundColor = '#98ce06'
            // batteryLiquid6.style.backgroundColor = 'green'
        } else {
            batteryLiquid6.style.backgroundColor = '#06ce17'
            // batteryLiquid2.style.backgroundColor = 'green'
        }

        //////////////////////////////////// Molten 7 ////////////////////////////////////////////

        let battery7 = document.getElementById('battery7');
        let batteryLiquid7 = document.getElementById('battery__liquid7');
        // let batteryLiquid7 = document.getElementById('battery__liquid::after');
        level = 100;
        batteryLiquid7.setAttribute('style', `height:${level}%`);
        if (level <= 20) {
            // batteryLiquid.style.backgroundColor = '#ffffff'
            batteryLiquid7.style.backgroundColor = '#f71515'
            // batteryLiquid.style.backgroundColor = "linear-gradient(to right," + color1.value + "," + color5batteryLiquid5
            //     .value +
            //     ")";
        } else if (level <= 40) {
            batteryLiquid7.style.backgroundColor = '#f16716'
            // batteryLiquid7.style.backgroundColor = 'orange'
        } else if (level <= 60) {
            batteryLiquid7.style.backgroundColor = '#f5dd06'
            // batteryLiquid5.style.backgroundColor = 'green'
        } else if (level <= 80) {
            batteryLiquid7.style.backgroundColor = '#98ce06'
            // batteryLiquid7.style.backgroundColor = 'green'
        } else {
            batteryLiquid7.style.backgroundColor = '#06ce17'
            // batteryLiquid2.style.backgroundColor = 'green'
        }

        //////////////////////////////////// Molten 8 ////////////////////////////////////////////

        let battery8 = document.getElementById('battery8');
        let batteryLiquid8 = document.getElementById('battery__liquid8');
        // let batteryLiquid7 = document.getElementById('battery__liquid::after');
        level = 80;
        batteryLiquid8.setAttribute('style', `height:${level}%`);
        if (level <= 20) {
            // batteryLiquid.style.backgroundColor = '#ffffff'
            batteryLiquid8.style.backgroundColor = '#f71515'
            // batteryLiquid.style.backgroundColor = "linear-gradient(to right," + color1.value + "," + color5batteryLiquid5
            //     .value +
            //     ")";
        } else if (level <= 40) {
            batteryLiquid8.style.backgroundColor = '#f16716'
            // batteryLiquid7.style.backgroundColor = 'orange'
        } else if (level <= 60) {
            batteryLiquid8.style.backgroundColor = '#f5dd06'
            // batteryLiquid5.style.backgroundColor = 'green'
        } else if (level <= 80) {
            batteryLiquid8.style.backgroundColor = '#98ce06'
            // batteryLiquid7.style.backgroundColor = 'green'
        } else {
            batteryLiquid8.style.backgroundColor = '#06ce17'
            // batteryLiquid2.style.backgroundColor = 'green'
        }

        //////////////////////////////////// Molten 9 ////////////////////////////////////////////

        let battery9 = document.getElementById('battery9');
        let batteryLiquid9 = document.getElementById('battery__liquid9');
        // let batteryLiquid7 = document.getElementById('battery__liquid::after');
        level = 75;
        batteryLiquid9.setAttribute('style', `height:${level}%`);
        if (level <= 20) {
            // batteryLiquid.style.backgroundColor = '#ffffff'
            batteryLiquid9.style.backgroundColor = '#f71515'
            // batteryLiquid.style.backgroundColor = "linear-gradient(to right," + color1.value + "," + color5batteryLiquid5
            //     .value +
            //     ")";
        } else if (level <= 40) {
            batteryLiquid9.style.backgroundColor = '#f16716'
            // batteryLiquid7.style.backgroundColor = 'orange'
        } else if (level <= 60) {
            batteryLiquid9.style.backgroundColor = '#f5dd06'
            // batteryLiquid5.style.backgroundColor = 'green'
        } else if (level <= 80) {
            batteryLiquid9.style.backgroundColor = '#98ce06'
            // batteryLiquid7.style.backgroundColor = 'green'
        } else {
            batteryLiquid9.style.backgroundColor = '#06ce17'
            // batteryLiquid2.style.backgroundColor = 'green'
        }

        //////////////////////////////////// Molten 10 ////////////////////////////////////////////

        let battery10 = document.getElementById('battery10');
        let batteryLiquid10 = document.getElementById('battery__liquid10');
        // let batteryLiquid7 = document.getElementById('battery__liquid::after');
        level = 37;
        batteryLiquid10.setAttribute('style', `height:${level}%`);
        if (level <= 20) {
            // batteryLiquid.style.backgroundColor = '#ffffff'
            batteryLiquid10.style.backgroundColor = '#f71515'
            // batteryLiquid.style.backgroundColor = "linear-gradient(to right," + color1.value + "," + color5batteryLiquid5
            //     .value +
            //     ")";
        } else if (level <= 40) {
            batteryLiquid10.style.backgroundColor = '#f16716'
            // batteryLiquid7.style.backgroundColor = 'orange'
        } else if (level <= 60) {
            batteryLiquid10.style.backgroundColor = '#f5dd06'
            // batteryLiquid5.style.backgroundColor = 'green'
        } else if (level <= 80) {
            batteryLiquid10.style.backgroundColor = '#98ce06'
            // batteryLiquid7.style.backgroundColor = 'green'
        } else {
            batteryLiquid10.style.backgroundColor = '#06ce17'
            // batteryLiquid2.style.backgroundColor = 'green'
        }

        // //////////////////////////////////// Molten 11 ////////////////////////////////////////////

        // let battery10 = document.getElementById('battery11');
        // let batteryLiquid11 = document.getElementById('battery__liquid11');
        // // let batteryLiquid7 = document.getElementById('battery__liquid::after');
        // level = 37;
        // batteryLiquid11.setAttribute('style', `height:${level}%`);
        // if (level <= 20) {
        //     // batteryLiquid.style.backgroundColor = '#ffffff'
        //     batteryLiquid11.style.backgroundColor = '#f71515'
        //     // batteryLiquid.style.backgroundColor = "linear-gradient(to right," + color1.value + "," + color5batteryLiquid5
        //     //     .value +
        //     //     ")";
        // } else if (level <= 40) {
        //     batteryLiquid11.style.backgroundColor = '#f16716'
        //     // batteryLiquid7.style.backgroundColor = 'orange'
        // } else if (level <= 60) {
        //     batteryLiquid11.style.backgroundColor = '#f5dd06'
        //     // batteryLiquid5.style.backgroundColor = 'green'
        // } else if (level <= 80) {
        //     batteryLiquid11.style.backgroundColor = '#98ce06'
        //     // batteryLiquid7.style.backgroundColor = 'green'
        // } else {
        //     batteryLiquid11.style.backgroundColor = '#06ce17'
        //     // batteryLiquid2.style.backgroundColor = 'green'
        // }
    </script>
@endsection

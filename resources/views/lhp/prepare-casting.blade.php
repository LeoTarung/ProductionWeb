@extends('mainLHP')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/prepCasting.css') }}">
    <div class="container-fluid ">
        <div class="card my-3">
            <div class="card-header">P R E P A R A T I O N</div>
            <form action="/lhp-casting/simpan" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="row mt-3 ms-3">
                            <div class="col-6">
                                {{-- <div class="form-floating"> --}}
                                <div class="form-group form-group-sm">
                                    {{-- <label for="nrp1" class="">N R P - 1</label> --}}
                                    <input type="number" class="form-control border-dark" id="nrp1"
                                        name="nrp1" placeholder="N R P - 1" required>                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group form-group-sm">
                                    <input type="text" class="form-control border-dark" id="nama1"
                                        name="nama1" placeholder="N A M A - 1" required readonly>
                                    {{-- <label for="nama1" class="">N A M A - 1</label> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 ms-3">
                            <div class="col-6">
                                <div class="form-group form-group-sm">
                                    <input type="number" class="form-control border-dark" id="nrp2"
                                        name="nrp2" placeholder="N R P - 2">
                                    {{-- <label for="nrp2" class="">N R P - 2</label> --}}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form-group-sm">
                                    <input type="text" class="form-control border-dark" id="nama2"
                                        name="nama2" placeholder="N A M A - 2" readonly>
                                    {{-- <label for="nama2" class="">N A M A - 2</label> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 ms-3">
                            <div class="col-6">
                                <div class="form-group form-group-sm-">
                                    <input type="number" class="form-control border-dark" id="nrp3"
                                        name="nrp3" placeholder="N R P - 3">
                                    {{-- <label for="nrp3" class="">N R P - 3</label> --}}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form-group-sm">
                                    <input type="text" class="form-control border-dark" id="nama3"
                                        name="nama3" placeholder="N A M A - 3" readonly>
                                    {{-- <label for="nama3" class="">N A M A - 3</label> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 ms-3">
                            <div class="col-6">
                                <div class="form-group form-group-sm">
                                    <input type="number" class="form-control border-dark" id="nrp4"
                                        name="nrp4" placeholder="N R P - 4">
                                    {{-- <label for="nrp4" class="">N R P - 4</label> --}}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form-group-sm">
                                    <input type="text" class="form-control border-dark" id="nama4"
                                        name="nama4" placeholder="N A M A - 4" readonly>
                                    {{-- <label for="nama4" class="">N A M A - 4</label> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 ms-3">
                            <div class="col-6">
                                <div class="form-group form-group-sm">
                                    <input type="number" class="form-control border-dark" id="nrp5"
                                        name="nrp5" placeholder="N R P - 5">
                                    {{-- <label for="nrp5" class="">N R P - 5</label> --}}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form-group-sm">
                                    <input type="text" class="form-control border-dark" id="nama5"
                                        name="nama5" placeholder="N A M A - 5" readonly>
                                    {{-- <label for="nama5" class="">N A M A - 5</label> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row my-3 ms-3">
                            <div class="col-6">
                                <div class="form-group form-group-sm">
                                    <input type="number" class="form-control border-dark" id="nrp6"
                                        name="nrp6" placeholder="N R P - 6">
                                    {{-- <label for="nrp6" class="">N R P - 6</label> --}}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form-group-sm">
                                    <input type="text" class="form-control border-dark" id="nama6"
                                        name="nama6" placeholder="N A M A - 6" readonly>
                                    {{-- <label for="nama6" class="">N A M A - 6</label> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row mt-3 mx-2">
                            <div class="col-12 ms-3">
                                <div class="form-floating ">
                                    <div class="btn-group-horizontal" role="group"
                                        aria-label="horizontal radio toggle  button group">
                                        <label class="">Pilih Line:</label>
                                        <input type="radio" class="btn-check" name="line" id="line1"
                                            autocomplete="off" onclick="line_cast(1)" value="1">
                                        <label class="btn btn-outline-success " for="line1">Line 1</label>
                                        <input type="radio" class="btn-check" name="line" id="line2"
                                            autocomplete="off" onclick="line_cast(2)" value="2">
                                        <label class="btn btn-outline-success " for="line2">Line 2</label>
                                        <input type="radio" class="btn-check" name="line" id="line3"
                                            autocomplete="off" onclick="line_cast(3)" value="3">
                                        <label class="btn btn-outline-success " for="line3">Line 3</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 ms-2">
                                <div class="col-auto">Pilih MC:</div>
                                <div class="col-2"><input type="number" class="form-control border-dark fw-bold "
                                        id="mc" name="mc" readonly></div>
                                <div class="col-7">
                                    <div class="form-floating ">
                                        <button class="btn btn-secondary dropdown-toggle " type="button" id="btn_mc"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            MC
                                        </button>
                                        <div class="dropdown">
                                            <ul class="dropdown-menu" aria-labelledby="btn_mc">
                                                <div id="mcItems1">
                                                    @foreach ($line1 as $line)
                                                        <input type="radio" class="btn-check  dropdown-items"
                                                            name="mc" id="mc_{{ $line->mc }}" autocomplete="off"
                                                            onclick="mesin({{ $line->mc }})"
                                                            value="{{ $line->mc }}">
                                                        <label id="label_mc_{{ $line->mc }}"
                                                            class="btn btn-outline-success"
                                                            
                                                            for="mc_{{ $line->mc }}">{{ $line->mc }}</label>
                                                    @endforeach
                                                </div>
                                                <div id="mcItems2">
                                                    @foreach ($line2 as $line)
                                                        <input type="radio" class="btn-check  dropdown-items"
                                                            name="mc" id="mc_{{ $line->mc }}" autocomplete="off"
                                                            onclick="mesin({{ $line->mc }})"
                                                            value="{{ $line->mc }}">
                                                        <label id="label_mc_{{ $line->mc }}"
                                                            class="btn btn-outline-success"
                                                            for="mc_{{ $line->mc }}">{{ $line->mc }}</label>
                                                    @endforeach

                                                </div>
                                                <div id="mcItems3">
                                                    @foreach ($line3 as $line)
                                                        <input type="radio" class="btn-check  dropdown-items"
                                                            name="mc" id="mc_{{ $line->mc }}"
                                                            autocomplete="off" onclick="mesin({{ $line->mc }})"
                                                            value="{{ $line->mc }}">
                                                        <label id="label_mc_{{ $line->mc }}"
                                                            class="btn btn-outline-success"
                                                            for="mc_{{ $line->mc }}">{{ $line->mc }}</label>
                                                    @endforeach

                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 ms-2 mb-2" style="margin-right:15px;">
                            <div class="form-floating">
                                <input type="string" class="form-control border-dark fw-bold" id="nama_part"
                                    name="nama_part" required readonly>
                                <label for="nama_part" class="ms-2">NAMA PART</label>
                            </div>
                        </div>
                        <div class="row mt-3 ms-2 mb-2" style="margin-right:15px;">
                            <div class="form-floating">
                                <input type="number" class="form-control border-dark fw-bold" id="cavity"
                                    name="cavity" required readonly>
                                <label for="cavity" class="ms-2">C A V I T Y</label>
                            </div>
                        </div>
                        <div class="row mt-3 ms-2 mr-2" style="margin-right:15px;">
                            <div class="form-floating">
                                <input type="number" class="form-control border-dark fw-bold" id="dies"
                                    name="dies" required readonly>
                                <label for="dies" class="ms-2">D I E S</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary">Reset
                    </button>
                    <button type="submit" class="btn btn-success mx-3">Simpan </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        // console.log("test");
        let mcItems1 = document.getElementById('mcItems1');
        let mcItems2 = document.getElementById('mcItems2');
        let mcItems3 = document.getElementById('mcItems3');
        mcItems1.hidden = true;
        mcItems2.hidden = true;
        mcItems3.hidden = true;


        function line_cast(id) {
            if (id == 1) {
                mcItems1.hidden = false;
                mcItems2.hidden = true;
                mcItems3.hidden = true;

            } else if (id == 2) {
                mcItems1.hidden = true;
                mcItems2.hidden = false;
                mcItems3.hidden = true;
            } else if (id == 3) {
                mcItems1.hidden = true;
                mcItems2.hidden = true;
                mcItems3.hidden = false;
            }
        }

        function mesin(id) {
            $.ajax({
                method: "GET",
                dataType: "json",
                url: "{{ url('/dtmccasting') }}" + "/" + id,
                success: function(data) {
                    // console.log(data);
                    $("#mc").val(data[0].mc);
                    $("#nama_part").val(data[0].nama_part);
                    $("#cavity").val(data[0].cavity);
                    $("#dies").val(data[0].nomor_dies);
                }
            })
        }

        for (let i = 1; i <= 6; i++) {
            $(document).ready(function() {
                $('#nrp' + i).keyup(function() {
                    $('#result').html('');
                    var searchnrp = $('#nrp' + i).val();
                    console.log(searchnrp);
                    $.ajax({
                        method: "GET",
                        dataType: "json",
                        url: "{{ url('/dtkyrw') }}" + "/" + searchnrp,
                        success: function(data) {
                            // console.log(data[0].name);
                            // $("#nama").html(data[0].name);
                            document.getElementById('nama' + i).value = data[0].name;
                        }
                    });
                });
            });
        }
        // let i = 1;
        // console.log(document.getElementById('nama' + i));
    </script>
@endsection

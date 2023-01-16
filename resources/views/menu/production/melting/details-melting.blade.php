@extends('main')
@section('content')
    <div class="main-content d-flex flex-column ">
        <div class="container-fluid">
            <div class="row text-center">
                <h2>Details Report {{ $mesin }}</h2>
            </div>
            <div class="row justify-content-end text-end my-3">
                <div class="col-5">
                    <form action="{{ url('/production/melting/'.$mesin) }}" method="post">
                        @csrf
                    <input type="date" id="start" name="start" value="{{ $mulai }}" class="inpt-date border border-3 rounded"> 
                    &ensp; s/d &ensp;
                    <input type="date" id="end" name="end" value="{{ $selesai }}" class="inpt-date border border-3 rounded">
                    <button type="submit" class=" ms-1 btn btn-primary">filter</button>
                    </form>
                </div>
            </div>
            <table class="table table-bordered mt-2 nowrap display" id="table_id">
                <thead class="head-dtl">
                    <tr>
                        <td class="text-center nowrap">NO</td>
                        <td class="text-center nowrap">TANGGAL</td>
                        <td class="text-center nowrap">SHIFT</td>
                        <td class="text-center nowrap">MESIN</td>
                        <td class="text-center nowrap">MATERIAL</td>
                        <td class="text-center nowrap">K-VALUE</td>
                        <td class="text-center nowrap">INGOT</td>
                        <td class="text-center nowrap">EXGATE</td>
                        <td class="text-center nowrap">REJECT PARTS</td>
                        <td class="text-center nowrap">ALM. TREAT</td>
                        <td class="text-center nowrap">OIL SCRAP</td>
                        <td class="text-center nowrap">FLUXING</td>
                        <td class="text-center nowrap">TAPPING</td>
                        <td class="text-center nowrap">STOK MOLTEN</td>
                        <td class="text-center nowrap">DROSS</td>
                        <td class="text-center nowrap">GAS AKHIR</td>
                        <td class="text-center nowrap">AKSI</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sql as $a)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{date('d-M-Y', strtotime($a->tanggal))}}</td>
                            <td>{{$a->shift}}</td>
                            <td>{{ $a->mesin }}</td>
                            <td>{{ $a->material }}</td>
                            <td>{{ $a->k_value}}</td>
                            <td>{{ $a->ingot }}</td>
                            <td>{{ $a->exgate }}</td>
                            <td>{{ $a->reject_parts }}</td>
                            <td>{{ $a->alm_treat }}</td>
                            <td>{{ $a->oil_scrap }}</td>
                            <td>{{ $a->fluxing }}</td>
                            <td>{{ $a->tapping }}</td>
                            <td>{{ $a->stok_molten }}</td>
                            <td>{{ $a->dross }}</td>
                            <td>{{ $a->gas_akhir }}</td>
                            <td><a class="btn btn-warning" onClick="Modaldetails({{ $a->id }})">EDIT</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="modal fade" id="ModalNavbar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-3" id="ModalNavbarLabel"></h1>
                            <button type="button" class="btn-close" id="hourlyclose" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered mt-2 nowrap display">
                                
                                <thead class="head-dtl">
                                    <tr>
                                        <th>NO</th>
                                        <th>JAM</th>
                                        <th>INGOT</th>
                                        <th>EXGATE</th>
                                        <th>PARTS NG</th>
                                        <th>ALM TREAT</th>
                                        <th>FLUXING</th>
                                        <th>TAPPING</th>
                                        <th>DROSS</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="ModalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-3" id="ModalEditLabel"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('/production/melting/'.$mesin.'/edit') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="col">
                                        <label for="ingot">INGOT</label>
                                        <input type="text" class="form-control" value="" name="ingot" id="ingot" required></div>
                                    <div class="col">
                                        <label for="exgate">EXGATE</label>
                                        <input type="text" class="form-control" name="exgate" id="exgate" required></div>
                                    <div class="col">
                                        <label for="reject_parts">PARTS NG</label>
                                        <input type="text" class="form-control" name="reject_parts" id="reject_parts" required></div>
                                    <div class="col">
                                        <label for="tapping">TAPPING</label>
                                        <input type="text" class="form-control" name="tapping" id="tapping" required></div>
                                </div>
                                <div class="col-6">
                                    <div class="col">
                                        <label for="alm_treat">ALM TREAT</label>
                                        <input type="text" class="form-control" name="alm_treat" id="alm_treat" required></div>
                                    <div class="col">
                                        <label for="fluxing">FLUXING</label>
                                        <input type="text" class="form-control" name="fluxing" id="fluxing" required></div>
                                    <div class="col">
                                        <label for="dross">DROSS</label>
                                        <input type="text" class="form-control" name="dross" id="dross" required></div>
                                    {{-- <div class="col">
                                        <label for="gas_akhir">GAS AKHIR</label>
                                        <input type="text" class="form-control" name="gas_akhir" id="gas_akhir" required></div>
                                    </div> --}}
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_raw" id="id_raw">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" >Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script>
       $(document).ready( function () {
       $('#table_id').dataTable( {
        responsive: true,
        } );
       } ); 

       function Modaldetails(id) {
        $("#ModalNavbarLabel").html('LHP Hourly'); //Untuk kasih judul di modal
        $("#ModalNavbar").modal('show'); //kalo ID pake "#" kalo class pake "."
        try {
            $.ajax({
                    method: "GET",
                    dataType: "json",
                    url: "{{ url('/dthourlymltng/') }}"+"/"+id,
                    success: function(data) {
                        var wrapper = document.getElementById("tbody");
                        var myHTML = '';
                        for (var i = 0; i < data.length; i++) {
                            myHTML += 
                                '<tr>' +
                                    '<td>' + (i+1) + '</td>' +
                                    '<td>' + data[i].jam  + '</td>' +
                                    '<td>' + data[i].ingot + '</td>' +
                                    '<td>' + data[i].exgate + '</td>' +
                                    '<td>' + data[i].reject_parts + '</td>' +
                                    '<td>' + data[i].alm_treat + '</td>' +
                                    '<td>' + data[i].fluxing + '</td>' +
                                    '<td>' + data[i].tapping + '</td>' +
                                    '<td>' + data[i].dross + '</td>' +
                                    '<td>' + '<a class="btn btn-danger" onClick="editdetails(' + data[i].id + ')">edit</a>' + '</td>' +
                                '</tr>';
                        }
                        wrapper.innerHTML = myHTML
                    }
                });
        } catch(e) {
            console.log('nothing its nothing');
        }
        }

        function editdetails(id){
            $("#hourlyclose").click();
            $("#ModalEditLabel").html('LHP Hourly Edit'); //Untuk kasih judul di modal
            $("#ModalEdit").modal('show'); //kalo ID pake "#" kalo class pake "." 
            $.ajax({
                    method: "GET",
                    dataType: "json",
                    url: "{{ url('/dthourlymltngraw') }}"+"/"+id,
                    success: function(data) {
                        $("#id_raw").val(data[0].id);
                        $("#ingot").val(data[0].ingot);
                        $("#exgate").val(data[0].exgate);
                        $("#reject_parts").val(data[0].reject_parts);
                        $("#tapping").val(data[0].tapping);
                        $("#alm_treat").val(data[0].alm_treat);
                        $("#fluxing").val(data[0].fluxing);
                        $("#dross").val(data[0].dross);
                        // $("#gas_akhir").val(data[0].gas_akhir);
                    }
            }); 
        }
    </script>
    
@endsection

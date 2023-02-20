@extends('main')
@section('content')
    <div class="main-content d-flex flex-column ">
        <div class="container-fluid">
            <div class="card">
                <p class="h2 fw-bold text-center text-decoration-underline">Data Karyawan</p>
                <div class="row justify-content-end">
                    <div class="col-10"></div>
                    <div class="col-2"><button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#ModalAddkaryawan"> Karyawan Baru</button></div>
                </div>
                <div class="outer-wrapper-dtl-mlt border border-secondary border-top mt-2">
                    <div class="scrollbox">
                        <div class="scrollbox-inner">
                            <div class="table-wrapper-dtl-mlt ">
                                <table class="table table-bordered mt-2 nowrap display" id="table_id">
                                    <thead class="table-secondary">
                                        <tr class="mt-2">
                                            <th class="text-center nowrap">NO</th>
                                            <th class="text-center nowrap">NRP</th>
                                            <th class="text-center nowrap">NAMA</th>
                                            <th class="text-center nowrap">SEKSI</th>
                                            <th class="text-center nowrap">DEPARTEMEN</th>
                                            <th class="text-center nowrap">DIVISI</th>
                                            <th class="text-center nowrap">EMAIL</th>
                                            <th class="text-center nowrap">STATUS</th>
                                            <th class="text-center nowrap">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @foreach ($users as $item)
                                             <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nrp }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->seksi }}</td>
                                                    <td>{{ $item->departemen }}</td>
                                                    <td>{{ $item->divisi }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td><a class="btn btn-warning" onclick="editdetails('{{ $item->nrp }}')">Edit</a></td>
                                             </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="ModalAddkaryawan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-3" id="ModalAddkaryawanLabel"></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ url('/hrd/karyawan/addnew') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col">
                                                <label for="name">NRP</label>
                                                <input type="number" class="form-control" value="" name="nrp" required>
                                            </div>
                                            <div class="col">
                                                <label for="name">NAMA</label>
                                                <input type="text" class="form-control" value="" name="name" required>
                                            </div>
                                            <div class="col">
                                                <label for="seksi">SEKSI</label>
                                                    <select class="form-control" name="seksi" >
                                                        <option class="dropdown-item form-control" name="seksi" value="" selected>-- Pilih Seksi --</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="" ></option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Account Executive">Account Executive</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Assembling">Assembling</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Budget - Asset">Budget - Asset</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="CASTING GDC">CASTING GDC</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="CASTING HPDC">CASTING HPDC</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Cost - G/L">Cost - G/L</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Dies Making">Dies Making</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Dies, JIG, Tools - Fixtures (DJTF)">Dies, JIG, Tools - Fixtures (DJTF)</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Digitalization">Digitalization</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="ER, IR, SSR - CSR">ER, IR, SSR - CSR</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Expert">Expert</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Finishing - Repair">Finishing - Repair</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="General Affair">General Affair</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Gravity">Gravity</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="HRD">HRD</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Kaizen">Kaizen</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Machining ">Machining </option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Maintenance Casting">Maintenance Casting</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Maintenance Machining">Maintenance Machining</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Maintenance Utility">Maintenance Utility</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Melting - Induction">Melting - Induction</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Painting">Painting</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="PDCA - Pandemic">PDCA - Pandemic</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="PE Machining">PE Machining</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="PE Melting - Casting">PE Melting - Casting</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="PE Painting - System Support">PE Painting - System Support</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="PPC">PPC</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Product Development">Product Development</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Production Eng. Support">Production Eng. Support</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Production Support">Production Support</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Proses Development">Proses Development</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Purchase - Exim">Purchase - Exim</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Purchasing Engineering">Purchasing Engineering</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Quality Claim">Quality Claim</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Quality Control">Quality Control</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Quality Inspection">Quality Inspection</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Quality Technical">Quality Technical</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="SAP Enchancement">SAP Enchancement</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Section Head Marketing Development">Section Head Marketing Development</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="SHE">SHE</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Shipping">Shipping</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Subcont Control - Dev">Subcont Control - Dev</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="TQM">TQM</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Vendor Control - Development">Vendor Control - Development</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Warehouse">Warehouse</option>
                                                    </select>
                                            </div>
                                            <div class="col">
                                                <label for="departemen">DEPARTEMEN</label>
                                                <select class="form-control" name="departemen" >
                                                    <option class="dropdown-item form-control" name="departemen" value="" selected>-- Pilih Departemen --</option>
                                                    <option class="dropdown-item form-control" name="departemen" value="" ></option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Marketing" >Marketing</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Produksi 2" >Produksi 2</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Cost - Budget" >Cost - Budget</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Produksi 1" >Produksi 1</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="DIES" >DIES</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Process Engineering" >Process Engineering</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="HC - GA" >HC - GA</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Kaizen - TQM" >Kaizen - TQM</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Maintenance - SHE" >Maintenance - SHE</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="PPIC" >PPIC</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Product Engineering" >Product Engineering</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Procurement" >Procurement</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Quality Assurance" >Quality Assurance</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Expert" >Expert</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="PDCA - Pandemic" >PDCA - Pandemic</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="SAP Enchancement" >SAP Enchancement</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="divisi">DIVISI</label>
                                                <select class="form-control" name="divisi" >
                                                    <option class="dropdown-item form-control" name="divisi"  value="" selected >-- Pilih Divisi --</option>
                                                    <option class="dropdown-item form-control" name="divisi"  value="" ></option>
                                                    <option class="dropdown-item form-control" name="divisi"  value="Plant">Plant</option>
                                                    <option class="dropdown-item form-control" name="divisi"  value="Engineering">Engineering</option>
                                                    <option class="dropdown-item form-control" name="divisi"  value="Administration">Administration</option>
                                                    <option class="dropdown-item form-control" name="divisi"  value="Nusametal">Nusametal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="col">
                                                <label for="email">EMAIL</label>
                                                <input type="text" class="form-control" name="email" required>
                                            </div>
                                            <div class="col">
                                                <label for="status">STATUS</label>
                                                <select class="form-control" name="status" required>
                                                    <option class="dropdown-item form-control" name="status" value="" selected>ENABLED</option>
                                                    <option class="dropdown-item form-control" name="status" value="DISABLED">DISABLED</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                            </form>
                        </div>
                        </div>
                    </div>

                </div>

                    <div class="modal fade" id="ModalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-3" id="ModalEditLabel"></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ url('/hrd/karyawan/update') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col">
                                                <label for="name">NAMA</label>
                                                <input type="text" class="form-control" value="" name="name"
                                                    id="name" required>
                                            </div>
                                            <div class="col">
                                                <label for="seksi">SEKSI</label>
                                                    <select class="form-control" name="seksi" >
                                                        <option class="dropdown-item form-control" name="seksi" value="" id="seksi" selected></option>
                                                        <option class="dropdown-item form-control" name="seksi" value="" ></option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Account Executive">Account Executive</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Assembling">Assembling</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Budget - Asset">Budget - Asset</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="CASTING GDC">CASTING GDC</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="CASTING HPDC">CASTING HPDC</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Cost - G/L">Cost - G/L</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Dies Making">Dies Making</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Dies, JIG, Tools - Fixtures (DJTF)">Dies, JIG, Tools - Fixtures (DJTF)</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Digitalization">Digitalization</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="ER, IR, SSR - CSR">ER, IR, SSR - CSR</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Expert">Expert</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Finishing - Repair">Finishing - Repair</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="General Affair">General Affair</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Gravity">Gravity</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="HRD">HRD</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Kaizen">Kaizen</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Machining ">Machining </option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Maintenance Casting">Maintenance Casting</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Maintenance Machining">Maintenance Machining</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Maintenance Utility">Maintenance Utility</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Melting - Induction">Melting - Induction</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Painting">Painting</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="PDCA - Pandemic">PDCA - Pandemic</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="PE Machining">PE Machining</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="PE Melting - Casting">PE Melting - Casting</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="PE Painting - System Support">PE Painting - System Support</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="PPC">PPC</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Product Development">Product Development</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Production Eng. Support">Production Eng. Support</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Production Support">Production Support</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Proses Development">Proses Development</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Purchase - Exim">Purchase - Exim</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Purchasing Engineering">Purchasing Engineering</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Quality Claim">Quality Claim</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Quality Control">Quality Control</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Quality Inspection">Quality Inspection</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Quality Technical">Quality Technical</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="SAP Enchancement">SAP Enchancement</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Section Head Marketing Development">Section Head Marketing Development</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="SHE">SHE</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Shipping">Shipping</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Subcont Control - Dev">Subcont Control - Dev</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="TQM">TQM</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Vendor Control - Development">Vendor Control - Development</option>
                                                        <option class="dropdown-item form-control" name="seksi" value="Warehouse">Warehouse</option>
                                                    </select>
                                            </div>
                                            <div class="col">
                                                <label for="departemen">DEPARTEMEN</label>
                                                <select class="form-control" name="departemen" >
                                                    <option class="dropdown-item form-control" name="departemen" id="departemen" value="" selected></option>
                                                    <option class="dropdown-item form-control" name="departemen" value="" ></option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Marketing" >Marketing</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Produksi 2" >Produksi 2</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Cost - Budget" >Cost - Budget</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Produksi 1" >Produksi 1</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="DIES" >DIES</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Process Engineering" >Process Engineering</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="HC - GA" >HC - GA</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Kaizen - TQM" >Kaizen - TQM</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Maintenance - SHE" >Maintenance - SHE</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="PPIC" >PPIC</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Product Engineering" >Product Engineering</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Procurement" >Procurement</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Quality Assurance" >Quality Assurance</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="Expert" >Expert</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="PDCA - Pandemic" >PDCA - Pandemic</option>
                                                    <option class="dropdown-item form-control" name="departemen"  value="SAP Enchancement" >SAP Enchancement</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="divisi">DIVISI</label>
                                                <select class="form-control" name="divisi" >
                                                    <option class="dropdown-item form-control" name="divisi" id="divisi" value="" selected ></option>
                                                    <option class="dropdown-item form-control" name="divisi"  value="" ></option>
                                                    <option class="dropdown-item form-control" name="divisi"  value="Plant">Plant</option>
                                                    <option class="dropdown-item form-control" name="divisi"  value="Engineering">Engineering</option>
                                                    <option class="dropdown-item form-control" name="divisi"  value="Administration">Administration</option>
                                                    <option class="dropdown-item form-control" name="divisi"  value="Nusametal">Nusametal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="col">
                                                <label for="email">EMAIL</label>
                                                <input type="text" class="form-control" name="email" id="email"
                                                    required>
                                            </div>
                                            <div class="col">
                                                <label for="status">STATUS</label>
                                                <select class="form-control" name="status" required>
                                                    <option class="dropdown-item form-control" name="status" value="" id="status" selected>ENABLED</option>
                                                    <option class="dropdown-item form-control" name="status" value="" disabled></option>
                                                    <option class="dropdown-item form-control" name="status" value="DISABLED">DISABLED</option>
                                                    <option class="dropdown-item form-control" name="status" value="ENABLED">ENABLED</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="nrp" value="" id="nrp"class="btn btn-success">Save</button>
                                    </div>
                            </form>
                        </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        });

        function editdetails(nrp) {
            $("#ModalEditLabel").html('Edit Data Nrp ' + nrp); //Untuk kasih judul di modal
            $("#ModalEdit").modal('show'); //kalo ID pake "#" kalo class pake "."
            $.ajax({
                method: "GET",
                dataType: "json",
                url: "{{ url('/dtkyrw') }}" +"/"+ nrp,
                success: function(data) {
                    console.log(data)
                    $("#name").val(data[0].name);
                    $("#nrp").val(data[0].nrp);
                    $("#seksi").val(data[0].seksi).html(data[0].seksi);
                    $("#departemen").val(data[0].departemen).html(data[0].departemen);
                    $("#divisi").val(data[0].divisi).html(data[0].divisi);
                    $("#email").val(data[0].email);
                    $("#status").val(data[0].status).html(data[0].status);
                }
            });
        }
    </script>
@endsection

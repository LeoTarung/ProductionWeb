@extends('main')
@section('content')
<div class="main-content d-flex flex-column">
    {{-- <div class="flip-card">
        <div class="flip-card-inner ">
            <div class="shadow-lg border flip-card-front rounded">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ipsum debitis ipsa libero eligendi maiores voluptas alias aspernatur suscipit natus, deserunt voluptatem, rem atque corporis asperiores optio doloribus iste? Ex quam impedit dicta quasi error amet neque aliquam alias, est autem repellendus cumque ea eius dolore voluptatem quia soluta. Beatae?</p>
            </div>
            <div class="shadow-lg border flip-card-back rounded">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ipsum debitis ipsa libero eligendi maiores voluptas alias aspernatur suscipit natus, deserunt voluptatem, rem atque corporis asperiores optio doloribus iste? Ex quam impedit dicta quasi error amet neque aliquam alias, est autem repellendus cumque ea eius dolore voluptatem quia soluta. Beatae?</p>               
            </div>
        </div>
    </div> --}}
    <div class="container-fluid">

            
    {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <input type="hidden" onload="naik('line1')">
          <button class="px-5 mx-1 nav-link active"  data-bs-toggle="pill" type="button"   aria-selected="true" onclick="naik('line1')">LINE 1</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="px-5 mx-1 nav-link"  data-bs-toggle="pill"  type="button"   aria-selected="false" onclick="naik('line2')">LINE 2</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="px-5 mx-1 nav-link"data-bs-toggle="pill"  type="button"   aria-selected="false" onclick="naik('line3')">LINE 3</button>
        </li>
    </ul>

    <div id="munculah"></div>
    <script>
        function naik(isi){
            if(isi == null){
                document.getElementById("munculah").innerHTML = "KOSONG CUK";
            } else {
                document.getElementById("munculah").innerHTML = isi;
            }
            console.log(isi)
        }
    </script> --}}

      {{-- <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
      </div> --}}

      <div class="row justify-content-end ">
        <div class="col-2 text-end nopadding"><button class="btn btn-primary" onclick="openmodal()">SETUP MESIN</button></div>
      </div>

        <div class="row">
            <div class="col-3">
                <div class="flip-card">
                    <div class="flip-card-inner ">
                        <div class=" flip-card-front ">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-success"></li>
                        <li class="list-group-item">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ipsum debitis ipsa libero eligendi maiores voluptas alias aspernatur suscipit natus, deserunt voluptatem, rem atque corporis asperiores optio doloribus iste? Ex quam impedit dicta quasi error amet neque aliquam alias, est autem repellendus cumque ea eius dolore voluptatem quia soluta. Beatae?</li>
                        </ul>
                    </div>
                        </div>
                        <div class=" flip-card-back ">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-success"></li>
                        <li class="list-group-item">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ipsum debitis ipsa libero eligendi maiores voluptas alias aspernatur suscipit natus, deserunt voluptatem, rem atque corporis asperiores optio doloribus iste? Ex quam impedit dicta quasi error amet neque aliquam alias, est autem repellendus cumque ea eius dolore voluptatem quia soluta. Beatae?</li>
                        </ul>
                    </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col">
                
            </div>
        </div>
       

        

        {{-- MODAL --}}
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                  <button type="button" class="btn-close" id="setupclose" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <table id="table_id" class="table table-bordered mt-2 nowrap">
                      <thead class="head-dtl text-center">
                        <tr >
                              <th class="text-center" nowrap="nowrap" rowspan="2">MACHINE</th>
                              <th class="text-center" nowrap="nowrap" rowspan="2">MATERIAL</th>
                              <th class="text-center" nowrap="nowrap" rowspan="2">NAMA PART</th>
                              <th class="text-center" nowrap="nowrap" colspan="3" >STATUS</th>
                              <th class="text-center" nowrap="nowrap" rowspan="2">ACTION</th>
                          </tr>
                          <tr>
                              <th class="text-center" nowrap="nowrap">KANBAN</th>
                              <th class="text-center" nowrap="nowrap">HENKATEN</th>
                              <th class="text-center" nowrap="nowrap">PRODUCTION</th>
                          </tr>
                      </thead>
                      <tbody id="tbody" class="text-center" >
                        @foreach ($mesin as $a)
                        <tr>
                            <td>MC{{ $a->mc }}</td>
                            <td>{{ $a->material }}</td>
                            <td>{{ $a->nama_part }}</td>
                            <td>{{ $a->kode_kanban }}</td>
                            <td>{{ $a->kode_henkaten }}</td>
                            <td>{{ $a->kode_status }}</td>
                            <td><button class="btn btn-warning" onclick="editmesin({{ $a->mc }})">EDIT</button></td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        {{-- MODAL --}}

      {{-- MODAL --}}
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel1"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  {{-- KIRI --}}
                  <div class="col-12 col-lg-6">
                    <div class="row mt-2">
                      <div class="col-3">MACHINE</div>
                      <div class="col-9"><input type="text" class="form-control" id="nama_mc"></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-3">MATERIAL</div>
                      <div class="col-9"><input type="text" class="form-control" id="material"></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-3">MIN MOLTEN</div>
                      <div class="col-9"><input type="text" class="form-control" id="min_molten"></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-3">MAX MOLTEN</div>
                      <div class="col-9"><input type="text" class="form-control" id="max_molten"></div>
                    </div>

                  </div>
                  {{-- KANAN --}}
                  <div class="col-12 col-lg-6">
                    <div class="row mt-2">
                      <div class="col-3">NAMA PART</div>
                      <div class="col-9"><input type="text" class="form-control" id="nama_part"></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-3">KANBAN</div>
                      <div class="col-9"><input type="text" class="form-control" id="kode_kanban"></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-3">HENKATEN</div>
                      <div class="col-9"><input type="text" class="form-control" id="kode_henkaten"></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-3">MACHINE</div>
                      <div class="col-9"><input type="text" class="form-control" id="kode_status"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    {{-- MODAL --}}
    </div>
</div>
<script>
        $(document).ready(function() {
            $('#table_id').dataTable({
                responsive: true,
                // "bPaginate": false,
                // "bFilter": false,
                // "bInfo": false
            });
        });

    function openmodal(){
        $("#staticBackdropLabel").html('SETUP CASTING MACHINE'); //Untuk kasih judul di modal
        $("#staticBackdrop").modal('show'); //kalo ID pake "#" kalo class pake "." 
    }

    function editmesin(id){
        $("#setupclose").click();
        $("#staticBackdropLabel1").html('EDIT MACHINE' + id); //Untuk kasih judul di modal
        $("#staticBackdrop1").modal('show'); //kalo ID pake "#" kalo class pake "." 
        $.ajax({
                method: "GET",
                dataType: "json",
                url: "{{ url('/dtmccasting') }}" + "/" + id,
                success: function(data) {
                  console.log(data);
                    $("#nama_mc").val(data[0].mc);
                    $("#material").val(data[0].material);
                    $("#min_molten").val(data[0].min);
                    $("#max_molten").val(data[0].max);
                    $("#nama_part").val(data[0].nama_part);
                    if(data[0].kode_kanban == 0){
                          kode_kanbann = "NORMAL";
                    }else if(data[0].kode_kanban == 1){
                          kode_kanbann = "LAYOFF";
                    }else if(data[0].kode_kanban == 2){
                          kode_kanbann = "URGENT";
                    }
                    $("#kode_kanban").val(kode_kanbann);
                    if(data[0].kode_henkaten == 0){
                          kode_henkatenn = "NORMAL";
                    }else if(data[0].kode_henkaten == 1){
                          kode_henkatenn = "HENKATEN MAN POWER";
                    }else if(data[0].kode_henkaten == 2){
                          kode_henkatenn = "HENKATEN MACHINE";
                    }else if(data[0].kode_henkaten == 3){
                          kode_henkatenn = "HENKATEN MATERIAL";
                    }else if(data[0].kode_henkaten == 4){
                          kode_henkatenn = "HENKATEN METHOD";
                    }
                    $("#kode_henkaten").val(kode_henkatenn);
                    if(data[0].kode_status == 0){
                          kode_statusn = "RUNNING";
                    }else if(data[0].kode_status == 1){
                          kode_statusn = "STOCK WAITING";
                    }else if(data[0].kode_status == 2){
                          kode_statusn = "TOOL KOSONG";
                    }else if(data[0].kode_status == 3){
                          kode_statusn = "SET UP";
                    }else if(data[0].kode_status == 4){
                          kode_statusn = "DANDORI";
                    }else if(data[0].kode_status == 5){
                          kode_statusn = "TROUBLE MACHINE";
                    }else if(data[0].kode_status == 6){
                          kode_statusn = "LAYOFF PRODUCTION";
                    }
                    $("#kode_status").val(kode_statusn);
                }
            });
    }
</script>
@endsection
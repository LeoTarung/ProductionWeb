@extends('mainLHP')
@section('content')
    {{-- -------------------------------- CSS  ------------------------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/final-inspection.css') }}">
    {{-- --------------------------------      ------------------------------ --}}

    @csrf
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="card cardpart fw-bold text-center align-items-center" 
           >
                {{ $lhp->part->nama_part}}
            </div>
        </div>
        
        <div class="row mt-1">
          <div class="col-6"> 
            {{-- card total Change --}}
            <div class="card-left1 mt-2">
                <div class="row ps-4">
                    <div class="col-6 fs-5 fw-bold total">
                        TOTAL CHECK</div>
                    <div class="col-5 d-flex align-items-center parent">
                        <div id="hitung" class="child border shadow fw-bold text-center align-items-center">
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                {{-- <div class="flex">
                    <div class="oval border shadow fw-bold text-center align-items-center" onclick="counterFunc()"> 
                        +1
                    </div>
                </div> --}}
            </div>

            {{-- card total NG --}}
            <div class="card-left2 mt-2">
                <div class="row ps-4">
                    <div class="col-6 fs-5 fw-bold total" onclick="getReject()">TOTAL NG</div>
                    <div class="col-5 d-flex align-items-center parent" style="margin: 0px 0px 0px 0px">
                        <div id="totalReject" class="child border fw-bold text-danger text-center align-items-center">
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
          </div>

            {{-- card total ok --}}
          <div class="col-6 mt-2">  
            <div class="card-left3">
                <div class="row">
                    <div class="col-4 fs-5 fw-bold ">
                        <div class="totalOK text-center align-items-center" 
                        style="margin: 10px 0px 0px -3px">TOTAL OK</div>
                    </div>
                    <div class="col-8">
                        <div class="tambah border shadow fw-bold text-center align-items-center" onclick="counterFunc()"> 
                            +1
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 align-items-center pboxOK ">
                        <div class ="cboxOK border border-success shadow fw-bold text-center align-items-center" id="total_ok">
                        </div>                   
                    </div>
                    <div class="col-4 parentT">                        
                        <div class="tambahPart" id="box" onclick="counterboxFunc()"> +BOX</div>
                    </div>
                    <div class="col-4 d-flex align-items-center parent3">
                        <div class="child3 fw-bold " onclick="resetFunc()">
                            UNDO 
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
          
        <div class="row mt">
          <div class="col-12 ">
            <div class="card main-card" style=" margin: 10px 2px 15px 0px;">
              <div class="row row-card-i mt-1">
                    @for ($i = 0; $i < $jumlahReject; $i++)
                            <div class="col-4 mt-2">
                                <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                                    <a onclick="ModalGambarFinal('{{ $lhp->id }}', '{{ $reject[$i] }}')">
                                        <div class="card-inside1 float-start text-center">
                                            <div class="font-ci1" id="jenisReject{{ $i }}"></div>
                                        </div>

                                        <div class="card-inside2 float-end  d-flex align-items-center">
                                            <div class="font-ci2 ">{{ $rejectforView[$i] }}</div>
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                    @endfor
              </div>
            </div>
          </div>
        </div>
  
        {{-- sebelum div container  --}}
    </div>

    <div class="modal fade" id="ModalGambarFinal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="ModalGambarLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="page" class="p-2"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @php
        $reject = $lhp->id;
        $hitung = $lhp->id + $box;
        
    @endphp

    <meta name="csrf-token" content="{{ csrf_token() }}">
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}
      <script src="/js/bootstrap.bundle.min.js"></script>
      <script>

        let undo;
        
        var hitung;

       
        function totalCheck(){
        $.get("/dtTotalCheck/api/" + {{ $lhp->id }} , function(kucing) {
        
            document.getElementById("hitung").innerHTML = kucing.total_check;                           
            
            var total = kucing.total_check - kucing.total_ng
            document.getElementById("total_ok").innerHTML = total;

            hitung = kucing.total_check

            totalOk(total);
        });
        }
        setInterval(totalCheck, 5000)
       
        setInterval(function(){
            console.log(hitung)
            // document.getElementById("hitung").innerHTML = hitung;
        }, 5000)

        // FUNGSI INI UNTUK INPUT KE DB
        function counterFunc(){
            undo = 'one';
            hitung++;
            const id = {{ $lhp->id }};
            var url = "/dtTotalCheck"  + "/" + id + "/" + hitung  // replace with your desired URL
            var token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: token
                },
                success: function(){
                    console.log('Berhasil menambahkan counter 1 ');
                },
                error: function(){
                    console.log('Tidak berhasil menambahkan counter 1 ');
                }
            });
        }

        function resetFunc(){
            if (undo == 'one'){
                hitung--;
                const id = {{ $lhp->id }};
                var url = "/dtTotalCheck"  + "/" + id + "/" + hitung  // replace with your desired URL
                var token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: token
                    },
                    success: function(){
                        console.log('Berhasil meng-undo 1 ');
                    },
                    error: function(){
                        console.log('Tidak berhasil meng-undo 1' );
                    }
                });
            }  else if (undo == 'box') {
                box = {{ $box }};
                const id = {{ $lhp->id }};
                var url = "/undoBox"  + "/" + id + "/" + box  // replace with your desired URL
                var token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: token
                    },
                    success: function(){
                        console.log('Berhasil meng-undo box ');
                    },
                    error: function(){
                        console.log('Tidak berhasil meng-undo box' );
                    }
                });
            }  else if (undo == 'reject') {
                const id = {{ $lhp->id }};
                var url = "/undoReject"  + "/" + id   // replace with your desired URL
                var token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: token
                    },
                    success: function(){
                        console.log('Menghapus');
                    },
                    error: function(){
                        console.log('Tidak berhasil Menghapus' );
                    }
                });
            }
            
        }

        function counterboxFunc(){
            undo = 'box';
           let box = {{ $box }};
           const id = {{ $lhp->id }};
            var url = "/dtTotalCheck"  + "/" + id + "/" + (hitung + box)  // replace with your desired URL
            var token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: token //pake token untuk keamanan
                },
                success: function(){
                    // Simpan nilai terbaru ke dalam session
                        // sessionStorage.setItem("box", box);
                        // sessionStorage.setItem("hitung", hitung + box); 
                console.log('Berhasil menambahkan box');
                }, 
                error: function() {
                    console.log('Error data saat menambahkan box');
                }
            });
            console.log(box);
        }

        let reject = document.getElementById('reject');     

        function getReject(id) {
            reject.hidden = false;
            downtime.hidden = true;
        }

        let id_lhp = {!! json_encode($reject) !!};

        function getTotalReject() {
            $.ajax({
                url: "/dtRjtfinalinspection" + "/" + id_lhp,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    document.getElementById("totalReject").innerHTML = data[0];
                    for (let i = 1; i <= {{ $jumlahReject }}; i++) {    
                        document.getElementById('jenisReject' + (i-1)).innerHTML = data[i];
                        
                    }
                },
                error: function() {
                    console.log('Error data saat mengambil total Reject');
                }
            });
        }

        $(document).ready(function() {
            setInterval(function() {
                getTotalReject();
            }, 3000);
        });     
        
        // FUNGSI INI UNTUK INPUT KE DB
        function totalOk(total){
            const id = {{ $lhp->id }};
            var url = "/dtTotalOk"  + "/" + id + "/" + total  // replace with your desired URL
            var token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: token,
                    total_ok: total // nilai total dimasukkan ke dalam data yang dikirim
                },
            });
        }

      </script>


@endsection
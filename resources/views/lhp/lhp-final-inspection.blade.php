@extends('mainLHP')
@section('content')
    {{-- -------------------------------- CSS  ------------------------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/final-inspection.css') }}">
    {{-- --------------------------------      ------------------------------ --}}

    @csrf
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="card cardpart fw-bold text-center align-items-center" 
            style="width: 98%; margin: 5px 0px 0px 10px">
                {{ $lhp->part->nama_part}}
            </div>
        </div>
        
        <div class="row">
          <div class="col-6"> 
            {{-- card total Change --}}
            <div class="card-left1 mt-2">
                <div class="row ps-4">
                    <div class="col-6 mt-2 fs-2 fw-bold total">
                        TOTAL CHECK</div>
                    <div class="col-4 d-flex align-items-center parent">
                        <div id="hitung" class="child border shadow fw-bold text-center align-items-center">
                        </div>
                    </div>

                </div>
                <div class="flex">
                    <div class="oval border shadow bg-success fw-bold text-center align-items-center" onclick="counterFunc()"> 
                        +1
                    </div>
                </div>
            </div>

            {{-- card total OK --}}
            <div class="card-left2 mt-2">
                <div class="row ps-4">
                    <div class="col-6 mt-2 fs-2 fw-bold total" onclick="getReject()">TOTAL NG</div>
                    <div class="col-4 d-flex align-items-center parent">
                        <div id="totalReject" class="child border fw-bold text-danger text-center align-items-center">
                           
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>


          </div>

          <div class="col-6 mt-2">  
            <div class="card-left3">
                <div class="row totok">
                    <div class="col-2"></div>
                    <div class="col-6 pt-2 ps-2 fw-bold parentOK">
                        <div class="childOK">TOTAL OK</div>
                    </div>
                    <div class="col-4 mt-2 mb-1 d-flex align-items-center parent2">
                        <div class ="child2 border border-success shadow fw-bold text-center align-items-center" id="total_ok">
                        </div>
                    
                    </div>
                </div>
                <div class="row totok">
                    <div class="col-8"></div>
                    <div class="col-4 d-flex mt-2 align-items-center parent3">
                        <div class="child3 border shadow bg-warning fw-bold text-center align-items-center" onclick="resetFunc()">
                            UNDO 
                        </div>
                        
                    </div>
                </div>
            </div>
            
            {{-- <div class="card mt-2 shadow-sm ">
              <div class="row">
                <div class="col-9 mt-2 ps-4 fw-bold fs-4 align-items-center"> TOTAL OK </div>
                <div class="col-3 d-flex align-items-center parent">
                    <div class="child fw-bold fs-4 pt-2 text-center align-items-center">999</div>
                </div>
              </div>
              <div class="row">
                  <div class="col-9 mt-2 ps-4 fw-bold fs-4"></div>
                  <div class="col-3 d-flex align-items-center parent">
                      <div class="child fw-bold fs-4 pt-2 mb-1 text-center align-items-center bg-warning">+1</div>
                  </div>
                </div>
            </div> --}}
          </div>

        </div>
          
        <div class="row mt">
          <div class="col-12">
            <div class="card main-card" style=" margin: 10px 2px 15px 0px; overflow-y:scroll">
              <div class="row row-card-i mt-3">
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
              {{-- <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambarFinal('{{ $lhp->id }}', 'BELANG')">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1"></div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">BELANG</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambarFinal('{{ $lhp->id }}')">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">BENGKOK</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambarFinal('{{ $lhp->id }}')">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">BERCAK HITAM</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
             
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambarFinal('{{ $lhp->id }}')">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">BLASTING</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambarFinal('{{ $lhp->id }}')">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">BLISTER</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambarFinal('{{ $lhp->id }}')">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">BLONG</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambarFinal('{{ $lhp->id }}')">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">BUFFING KASAR</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambarFinal('{{ $lhp->id }}')">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">BURRY</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambarFinal('{{ $lhp->id }}')">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">DATUM OVER</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambarFinal('{{ $lhp->id }}')">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">DEKOK</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">DENT</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">DIMENSI</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
              
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">DUST SPRAY</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">EROSI DIES</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">FERRO</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>

              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">FLOWLINE</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">GELOMBANG</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">GOMPAL</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">HANDLING</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">JAMUR</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">KARAT</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">KASAR</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">KEROPOS</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">KOTOR</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">KULIT JERUK</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">KURANG PROSES</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">MELER</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>

              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">MIRING</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">NG LOCTITE</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">NG ASSY</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">NG BEARING</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">NG BUSHING</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">NG JOINT TUBE</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">NG PIN</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">NG PLATE</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">NG RUBBER</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">NG SEAL</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">99</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">NG STEMPEL</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">9</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">NG STICKER</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">NG WASHER</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">NO LEAKTEST</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">NO BUSHING</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">NO JIG</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">NO TAP</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">OTHERS</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>

              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">OVAL</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">OVERPROSES</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">OVERHEAT</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">PATAH</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">PECAH</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">PIN HOLE</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>

              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">PIN EJECTOR</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">PLUG G NG</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">RETAK</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">SERABUT</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">SERET</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">SHRINKAGE</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">STEP</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">TIPIS</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">UN  MATCH</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">UNCUTING</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">UNDERCUT</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">UNFILL</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>   --}}
  
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
    @endphp

    @php
        $hitung = $lhp->id;
    @endphp

    <meta name="csrf-token" content="{{ csrf_token() }}">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script>
        var hitung;
        function totalCheck(){
        $.get("/dtTotalCheck/api/" + {{ $lhp->id }}, function(kucing) {
            document.getElementById("hitung").innerHTML = kucing.total_check;                           
            
            var total = kucing.total_check - kucing.total_ng
            document.getElementById("total_ok").innerHTML = total;

            hitung = kucing.total_check
            
            totalOk(total);

        });

        }
        
        setInterval(totalCheck, 1000)
       
        setInterval(function(){
            console.log(hitung)
            // document.getElementById("hitung").innerHTML = hitung;
        }, 1000)

        // FUNGSI INI UNTUK INPUT KE DB
        function counterFunc(){
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
            });
        }

        function resetFunc(){
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
                });
           
        }

        // setInterval(counterFunc, 1000);
        // setInterval(resetFunc, 1000);

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
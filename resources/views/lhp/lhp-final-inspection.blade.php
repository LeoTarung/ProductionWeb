@extends('mainLHP')
@section('content')
    {{-- -------------------------------- CSS  ------------------------------ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/final-inspection.css') }}">
    {{-- --------------------------------      ------------------------------ --}}

    <div class="container-fluid">
        <div class="row mt-2">
            <div class="card cardpart fw-bold fs-2 text-center align-items-center">
                COVER K1ZG
            </div>
        </div>
        
        <div class="row">
          <div class="col-6"> 
            {{-- card total Change --}}
            <div class="card-left1 mt-2">
                <div class="row ps-4">
                    <div class="col-6 mt-2 fw-bold fs-2 total">TOTAL  CHECK</div>
                    <div class="col-4 d-flex align-items-center parent">
                        <div class="child border shadow fw-bold fs-1 text-center align-items-center">
                           999 </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>

            {{-- <div class="card card-left1 my-2 shadow-sm">
                <div class="row">
                    <div class="col-8 mt-2 ps-4 fw-bold fs-4">TOTAL CHANGE</div>
                    <div class="col-3 d-flex align-items-center parent">
                        <div class="child fw-bold fs-4 pt-2 text-center align-items-center">
                           999 </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div> --}}
  
            {{-- card total OK --}}
            <div class="card-left2 mt-2">
                <div class="row ps-4">
                    <div class="col-6 mt-2 fw-bold fs-2 total">TOTAL NG</div>
                    <div class="col-4 d-flex align-items-center parent">
                        <div class="child border fw-bold fs-1 text-danger text-center align-items-center">
                           12345 </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            {{-- <div class="card card-left2 my-2 shadow-sm">
                <div class="row">
                    <div class="col-8 mt-2 ps-4 fw-bold fs-4">TOTAL OK</div>
                    <div class="col-3 d-flex align-items-center parent">
                        <div class="child fw-bold fs-4 pt-2 text-center align-items-center">
                           999 </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div> --}}

            <div class="flex">
                <div class="oval border shadow bg-success fw-bold text-center align-items-center" onclick="counterFunc()"> 
                    +1
                </div>
            </div>


          </div>

          <div class="col-6 mt-2">  
            <div class="card-left3">
                <div class="row totok">
                    <div class="col-2"></div>
                    <div class="col-6 pt-2 ps-2 fw-bold fs-2 parentOK">
                        <div class="childOK">TOTAL OK</div>
                    </div>
                    <div class="col-4 d-flex align-items-center parent2">
                        <div id="count" class="child2 border border-success shadow fw-bold fs-1 text-center align-items-center">
                            </div>
                           <label id="count"></label>
                    </div>
                </div>
                <div class="row totok">
                    <div class="col-8"></div>
                    {{-- <div class="col-2 d-flex align-items-center parent">
                        <div class="child border shadow bg-success fw-bold fs-2 pt-1 text-center align-items-center" onclick="counterFunc()">
                           +1 
                        </div>
                    </div> --}}
                    <div class="col-4 d-flex align-items-center parent3">
                        <div class="child3 border shadow bg-warning fw-bold fs-2 text-center align-items-center" onclick="resetFunc()">
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
            <div class="card main-card">
              {{-- row pertama --}}
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">BELANG</div>
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
                                <div class="font-ci2">BENGKOK</div>
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
                                <div class="font-ci2">BERCAK HITAM</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
              {{-- row kedua --}}
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
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
                        <a onclick="ModalGambar()">
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
                        <a onclick="ModalGambar()">
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
                        <a onclick="ModalGambar()">
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
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">0</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2">DATUM OVER</div>
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
                                <div class="font-ci2">DEKOK</div>
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
                                <div class="font-ci2 ">DENT</div>
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
                                <div class="font-ci2">DIMENSI</div>
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
                                <div class="font-ci2">DUST SPRAY</div>
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
                                <div class="font-ci2 ">KURANG PROSES</div>
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
                                <div class="font-ci2">MELER</div>
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
                                <div class="font-ci2">NO BUSHING</div>
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
                                <div class="font-ci2">NO JIG</div>
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
                                <div class="font-ci2 ">NO TAP</div>
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
                                <div class="font-ci2">OVER PROSES</div>
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
                                <div class="font-ci2 ">UNCUTIN</div>
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
              </div>
  
              <div class="row row-card-i mt-3 ">
                <div class="col-4 mt-2">
                    <div class="card-inside shadow-lg border border-2 border border-dark align-items-center">
                        <a onclick="ModalGambar()">
                            <div class="card-inside1 float-start text-center">
                                <div class="font-ci1">999</div>
                            </div>
  
                            <div class="card-inside2 float-end">
                                <div class="font-ci2 ">SPARE 1</div>
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
                                <div class="font-ci2">SPARE 2</div>
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
                                <div class="font-ci2">SPARE 3</div>
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
                                <div class="font-ci2 ">SPARE 4</div>
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
                                <div class="font-ci2">SPARE 5</div>
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
                                <div class="font-ci2">SPARE 6</div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  
  
            </div>
          </div>
        </div>
  
        {{-- sebelum div container  --}}
      </div>
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script>
        count = 0;

        function counterFunc(){
            count++;
            document.getElementById("count").innerHTML = count;
        }

        function resetFunc(){
            count--;
            document.getElementById("count").innerHTML = count;
        }
      </script>

@endsection
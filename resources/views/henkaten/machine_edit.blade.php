@extends('henkaten.navbar')
@section('content')
<div class="col">
    <div class="row dasar">
  
        <div class="row">
          <div class="col-6">
            <div class="row ba">
  
              <form action="/mesin_update/{{$page->No}}" method="post" class="form-item">
                @csrf

                <h6 class="text-start">Deskripsi:</h6>
              <div class="Deskripsi">
                <textarea rows="5" type="text" class="form-control" name="Deskripsi">{{$page->Deskripsi}}</textarea>
              </div>
              <h6 class="text-start">Problem :</h6>
              <div class="Problem">
                <textarea rows="5" type="text" class="form-control" name="Problem">{{$page->Problem}}</textarea>
              </div>
              <h6 class="text-start ">Countermeasure :</h6>
              <div class="Countermeasure">
                <textarea rows="5" type="text" class="form-control" name="Countermeasure">{{$page->Countermeasure}}</textarea>
              </div>
  
            </div>
        </div>
        <div class="col-6 pt-5">
          <div class="card">
            <div class="container overflow">
              <div class="row gx-2">
                <div class="form-check d-flex mx-5" role="group" aria-label="Basic example">
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="Plan" value="no" @if($page->Plan == "no") checked @endif>
                    </div>
                    <label class="pt-6">UNPLANNED</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="Plan" value="yes" @if($page->Plan == "yes") checked @endif>
                    </div>
                    <label class="pt-6">PLANNED</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="container overflow">
              <div class="row gx-2">
                <div class="form-check d-flex mx-5" role="group" aria-label="Basic example">
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="Safety" value="no" @if($page->Safety == "no") checked @endif>
                    </div>
                    <label class="pt-6">UNSAFETY</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="Safety" value="yes" @if($page->Safety == "yes") checked @endif>
                    </div>
                    <label class="pt-6">SAFETY</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          


          <div class="card">
            <div class="container overflow">
              <div class="row gx-2">
                <div class="form-check d-flex mx-5" role="group" aria-label="Basic example">
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="Kakotora" value="no" @if($page->Kakotora == "no") checked @endif>
                    </div>
                    <label class="pt-6">TIDAK KAKOTORA</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="Kakotora" value="yes" @if($page->Kakotora == "yes") checked @endif>
                    </div>
                    <label class="pt-6">KAKOTORA</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          

          <div class="card">
            <div class="container overflow">
              <div class="row gx-2">
                <div class="form-check d-flex mx-5" role="group" aria-label="Basic example">
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="Trial_NS" value="no" @if($page->Trial_NS == "no") checked @endif>
                    </div>
                    <label class="pt-6">BELUM TRIAL N5</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="Trial_NS" value="yes" @if($page->Trial_NS == "yes") checked @endif>
                    </div>
                    <label class="pt-6">SUDAH TRIAL N5</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="container overflow">
              <div class="row gx-2">
                <div class="form-check d-flex mx-5" role="group" aria-label="Basic example">
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="CP_CPK" value="no" @if($page->CP_CPK == "no") checked @endif>
                    </div>
                    <label class="pt-6">CP CPK BELUM OK</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="CP_CPK" value="yes" @if($page->CP_CPK == "yes") checked @endif>
                    </div>
                    <label class="pt-6">CP CPK SUDAH OK</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="container overflow">
              <div class="row gx-2">
                <div class="form-check d-flex mx-5" role="group" aria-label="Basic example">
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="Status" value="close" @if($page->Status == "close") checked @endif>
                    </div>
                    <label class="pt-6">STATUS CLOSE</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="Status" value="open" @if($page->Status == "open") checked @endif>
                    </div>
                    <label class="pt-6">STATUS OPEN</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <br>
            <div class="col ps-5 ms-5">
              <button type="submit" class="btn btn-primary btn-lg ms-5" name="SUBMIT">Save Change</button>
            </div>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection
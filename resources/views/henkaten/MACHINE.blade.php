@extends('henkaten.navbar')
@section('content')

<div class="col">
  <div class="row dasar">

      <div class="row">
        <div class="col-6">
          <div class="row ba">

            <form action="/mesin_submit" method="post" class="form-item">
              @csrf
            <h6 class="text-start">Deskripsi:</h6>
            <div class="Deskripsi">
              <textarea rows="5" type="text" class="form-control" name="Deskripsi"></textarea>
            </div>
            <h6 class="text-start">Problem :</h6>
            <div class="Problem">
              <textarea rows="5" type="text" class="form-control" name="Problem"></textarea>
            </div>
            <h6 class="text-start ">Countermeasure :</h6>
            <div class="Countermeasure">
              <textarea rows="5" type="text" class="form-control" name="Countermeasure"></textarea>
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
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="Plan" value="no">
                    </div>
                    <label class="pt-6">UNPLANNED</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="Plan" value="yes">
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
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="Safety" value="no">
                    </div>
                    <label class="pt-6">UNSAFETY</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="Safety" value="yes">
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
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="Kakotora" value="no">
                    </div>
                    <label class="pt-6">TIDAK KAKOTORA</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="Kakotora" value="yes">
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
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="Trial_NS" value="no">
                    </div>
                    <label class="pt-6">BELUM TRIAL N5</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="Trial_NS" value="yes">
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
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="CP_CPK" value="no">
                    </div>
                    <label class="pt-6">CP CPK BELUM OK</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="CP_CPK" value="yes">
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
                      <input class="form-check-input fs-4 mt-4" type="hidden" id="flexSwitchCheckDefault" name="Status" value="close">
                    </div>
                    <label class="pt-6">STATUS CLOSE</label>
                  </div>
                  <div class="col-5 form-group">
                    <div class="form-check form-switch">
                      <input class="form-check-input fs-4 mt-4" type="checkbox" id="flexSwitchCheckDefault" name="Status" value="open">
                    </div>
                    <label class="pt-6">STATUS OPEN</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col ps-5 ms-5">
            <button type="submit" class="btn btn-primary btn-lg ms-5 mt-5">SUBMIT</button>
            <button type="button" class="btn btn-warning btn-lg ms-3 mt-5" data-bs-target="#review" data-bs-toggle="modal">LIHAT TABEL</button>
          </div>
          </form>
        </div>
      </div>
  </div>
</div>
</div>

<!-- modal  -->
<div class="modal" id="review" tabindex="-1">
<div class="modal-dialog modal-xl">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">HENKATEN FORM</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body" style="overflow-x: auto;">
      <table class="table table-bordered table-responsive">
        <thead class="table-light">
          <tr>
            <th nowrap="nowrap">NO</th>
            <th nowrap="nowrap">Deskripsi</th>
            <th nowrap="nowrap">Problem</th>
            <th nowrap="nowrap">Countermeasure</th>
            <th nowrap="nowrap">Plan</th>
            <th nowrap="nowrap">Safety</th>
            <th nowrap="nowrap">Kakotora</th>
            <th nowrap="nowrap">Trial NS</th>
            <th nowrap="nowrap">CP CPK</th>
            <th nowrap="nowrap" wrap="nowrap">Status</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no =1;
        @endphp
        @foreach ($sql as $item)
          <tr>
            <th scope="row">{{$no++}}</th>
          <td>{{$item->Deskripsi}}</td>
          <td>{{$item->Problem}}</td>
          <td>{{$item->Countermeasure}}</td>
          <td>{{$item->Plan}}</td>
          <td>{{$item->Safety}}</td>
          <td>{{$item->Kakotora}}</td>
          <td>{{$item->Trial_NS}}</td>
          <td>{{$item->CP_CPK}}</td>
          <td>{{$item->Status}}</td>
          <td>
            <a href='/mesin_edit/{{$item->No}}'><button type="button" class="btn btn-primary">Edit</button></a>
          </td>
          <td>
            <a href='/mesin_delete/{{$item->No}}'><button type="button" class="btn btn-danger">Delete</button></a>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</body>

</html>
@endsection
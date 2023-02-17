@extends('navbar')
@section('content')

<div class="col">
  <div class="row dasar">

      <div class="row">
        <div class="col-6">
          <div class="row ba">

            <form action="/mesin_submit" method="post" class="form-item">
              @csrf
              Deskripsi :
              <div class="Deskripsi">
                <textarea rows="4" type="text" class="form-control" name="Deskripsi"></textarea>
              </div>

              Problem :
              <div class="Problem">
                <textarea rows="4" type="text" class="form-control" name="Problem"></textarea>
              </div>

              Countermeasure :
              <div class="Countermeasure">
                <textarea rows="4" type="text" class="form-control" name="Countermeasure"></textarea>
              </div>

              <div class="col d-flex">
                <div class="card status"> Status :</div>
                <div class="form grup ms-3 mt-2 d-flex">
                  <input class="form-check mx-4 fs-1 radio" type="radio" id="open" name="Status" value="open">
                  <lable for="open">open</lable>
                  <input class="form-check mx-4 fs-1 radio" type="radio" id="close" name="Status" value="close">
                  <lable for="close">close</lable>
                </div>
              </div>
          </div>
        </div>
        <div class="col-6 pt-3">
          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="form-check d-flex" role="group" aria-label="Basic example">
                <div class="col-6 py-3">
                  <label class="form-check label mt-2">Plan</label>
                </div>
                <div class="form check-form-check-inline col-2 px-3 py-4 d-flex ">
                  <input class="radio form-check input mx-3 big" type="radio" id="Plan" name="Plan" value="yes">
                  <label class="from-check-label py-1" for="open">yes</label>
                </div>
                <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                  <input class="radio form-check input mx-3 big" type="radio" id="Plan" name="Plan" value="no">
                  <label class="form-check-label py-1" for="close">no</label>
                  <!-- <button type="button" class="btn btn-secondary">Right</button> -->
                </div>
              </div>
            </div>
          </div>

          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="form-check d-flex" role="group" aria-label="Basic example">
                <div class="col-6 py-3">
                  <label class="form-check label mt-2">Safety</label>
                </div>
                <div class="form check-form-check-inline col-2 px-3 py-4 d-flex ">
                  <input class="radio form-check input mx-3 big" type="radio" id="Safety" name="Safety" value="yes">
                  <label class="from-check-label py-1" for="open">yes</label>
                </div>
                <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                  <input class="radio form-check input mx-3 big" type="radio" id="Safety" name="Safety" value="no">
                  <label class="form-check-label py-1" for="close">no</label>
                  <!-- <button type="button" class="btn btn-secondary">Right</button> -->
                </div>
              </div>
            </div>
          </div>


          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="form-check d-flex" role="group" aria-label="Basic example">
                <div class="col-6 py-3">
                  <label class="form-check label mt-2">Kakotora</label>
                </div>
                <div class="form check-form-check-inline col-2 px-3 py-4 d-flex ">
                  <input class="radio form-check input mx-3 big" type="radio" id="Kakotora" name="Kakotora" value="yes">
                  <label class="from-check-label py-1" for="open">yes</label>
                </div>
                <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                  <input class="radio form-check input mx-3 big" type="radio" id="Kakotora" name="Kakotora" value="no">
                  <label class="form-check-label py-1" for="close">no</label>
                  <!-- <button type="button" class="btn btn-secondary">Right</button> -->
                </div>
              </div>
            </div>
          </div>

          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="form-check d-flex" role="group" aria-label="Basic example">
                <div class="col-6 py-3">
                  <label class="form-check label mt-2">Trial-NS</label>
                </div>
                <div class="form check-form-check-inline col-2 px-3 py-4 d-flex ">
                  <input class="radio form-check input mx-3 big" type="radio" id="NS" name="Trial_NS" value="yes">
                  <label class="from-check-label py-1" for="open">yes</label>
                </div>
                <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                  <input class="radio form-check input mx-3 big" type="radio" id="NS" name="Trial_NS" value="no">
                  <label class="form-check-label py-1" for="close">no</label>
                  <!-- <button type="button" class="btn btn-secondary">Right</button> -->
                </div>
              </div>
            </div>
          </div>


          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="form-check d-flex" role="group" aria-label="Basic example">
                <div class="col-6 py-3">
                  <label class="form-check label mt-2">CP-CPK</label>
                </div>
                <div class="form check-form-check-inline col-2 px-3 py-4 d-flex ">
                  <input class="radio form-check input mx-3 big" type="radio" id="CPK" name="CP_CPK" value="yes">
                  <label class="from-check-label py-1" for="open">yes</label>
                </div>
                <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                  <input class="radio form-check input mx-3 big" type="radio" id="CPK" name="CP_CPK" value="no">
                  <label class="form-check-label py-1" for="close">no</label>
                  <!-- <button type="button" class="btn btn-secondary">Right</button> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col ps-5 ms-5">
            <button type="submit" class="btn btn-primary btn-lg ms-5" name="SUBMIT">SUBMIT</button>
            <button type="button" class="btn btn-secondary btn-lg ms-3" data-bs-target="#review" data-bs-toggle="modal">LIHAT TABEL</button>
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
            <th nowrap="nowrap">Status</th>
            <th nowrap="nowrap">Plan</th>
            <th nowrap="nowrap">Safety</th>
            <th nowrap="nowrap">Kakotora</th>
            <th nowrap="nowrap">Trial NS</th>
            <th nowrap="nowrap" wrap="nowrap">CP CPK</th>
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
          <td>{{$item->Status}}</td>
          <td>{{$item->Plan}}</td>
          <td>{{$item->Safety}}</td>
          <td>{{$item->Kakotora}}</td>
          <td>{{$item->Trial_NS}}</td>
          <td>{{$item->CP_CPK}}</td>
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
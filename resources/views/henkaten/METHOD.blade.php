@extends('navbar')
@section('content')

<div class="col">
  <div class="row dasar">

      <div class="row">
        <div class="col-6">
          <div class="row ba">

            <form action="/method_submit" method="post" class="form-item">
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
                  <label class="form-check label mt-2">Cycle Time</label>
                </div>
                <div class="form check-form-check-inline col-2 px-3 py-4 d-flex ">
                  <input class="radio form-check input mx-3 big" type="radio" id="CT" name="Cycle_Time" value="yes">
                  <label class="from-check-label py-1" for="open">yes</label>
                </div>
                <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                  <input class="radio form-check input mx-3 big" type="radio" id="CT" name="Cycle_Time" value="no">
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
                  <label class="form-check label mt-2">Job Set Up</label>
                </div>
                <div class="form check-form-check-inline col-2 px-3 py-4 d-flex ">
                  <input class="radio form-check input mx-3 big" type="radio" id="JSU" name="Job_Setup" value="yes">
                  <label class="from-check-label py-1" for="open">yes</label>
                </div>
                <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                  <input class="radio form-check input mx-3 big" type="radio" id="JSU" name="Job_Setup" value="no">
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
                  <label class="form-check label mt-2">Verifikasi Proses</label>
                </div>
                <div class="form check-form-check-inline col-2 px-3 py-4 d-flex ">
                  <input class="radio form-check input mx-3 big" type="radio" id="VP" name="Verifikasi_Proses" value="yes">
                  <label class="from-check-label py-1" for="open">yes</label>
                </div>
                <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                  <input class="radio form-check input mx-3 big" type="radio" id="VP" name="Verifikasi_Proses" value="no">
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
            <th nowrap="nowrap">Cycle Time</th>
            <th nowrap="nowrap">Job Setup</th>
            <th nowrap="nowrap" wrap="nowrap">Verifikasi Proses</th>
          </tr>
        </thead>
        <tbody>
          @php
          $No =1;
        @endphp
        @foreach ($sql as $item)
          <tr>
            <th scope="row">{{$No++}}</th>
            <td>{{$item->Deskripsi}}</td>
            <td>{{$item->Problem}}</td>
            <td>{{$item->Countermeasure}}</td>
            <td>{{$item->Status}}</td>
            <td>{{$item->Plan}}</td>
            <td>{{$item->Safety}}</td>
            <td>{{$item->Cycle_Time}}</td>
            <td>{{$item->Job_Setup}}</td>
            <td>{{$item->Verifikasi_Proses}}</td>
            <td>
              <a href='/method_edit/{{$item->No}}'><button type="button" class="btn btn-primary">Edit</button></a>
            </td>
            <td>
              <a href='/method_delete/{{$item->No}}'><button type="button" class="btn btn-danger">Delete</button></a>
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

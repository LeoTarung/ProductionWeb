@extends('navbar')
@section('content')
    
<div class="col">
  <div class="row dasar"> 
            
    <div class="row">
      <div class="col-6">
        <div class="row ba">

          <form action="/update/{{$page->No}}" method="post" class="form-item">
            @method('post')
            @csrf 
            Deskripsi :
            <div class="Deskripsi">
              <textarea rows="4" type="text" class="form-control" name="Deskripsi">{{$page->Deskripsi}}</textarea>
            </div>

            Problem :
            <div class="Problem">
              <textarea rows="4" type="text" class="form-control" name="Problem">{{$page->Problem}}</textarea>
            </div>

            Countermeasure :
            <div class="Countermeasure">
              <textarea rows="4" type="text" class="form-control" name="Countermeasure">{{$page->Countermeasure}}</textarea>
            </div>

            <div class="col d-flex">
              <div class="card status"> Status :</div>
              <div class="form grup ms-3 mt-2 d-flex">
                <input class="form-check mx-4 fs-1 radio" type="radio" id="open" name="Status" value="open" @if($page->Status == "open") checked @endif>
                <lable for="open">open</lable>
                <input class="form-check mx-4 fs-1 radio" type="radio" id="close" name="Status" value="close" @if($page->Status == "close") checked @endif>
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
                <input class="radio form-check input mx-3 big" type="radio" id="Plan" name="Plan" value="yes" @if($page->Plan == "yes") checked @endif>
                <label class="from-check-label py-1" for="open">yes</label>
              </div>
              <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                <input class="radio form-check input mx-3 big" type="radio" id="Plan" name="Plan" value="no" @if($page->Plan == "no") checked @endif>
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
                <input class="radio form-check input mx-3 big" type="radio" id="Job_Setup" name="Job_Setup" value="yes" @if($page->Job_Setup == "yes") checked @endif>
                <label class="from-check-label py-1" for="open">yes</label>
              </div>
              <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                <input class="radio form-check input mx-3 big" type="radio" id="Job_Setup" name="Job_Setup" value="no" @if($page->Job_Setup == "no") checked @endif>
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
                <label class="form-check label mt-2">Trial NS</label>
              </div>
              <div class="form check-form-check-inline col-2 px-3 py-4 d-flex ">
                <input class="radio form-check input mx-3 big" type="radio" id="Trial_NS" name="Trial_NS" value="yes" @if($page->Trial_NS == "yes") checked @endif>
                <label class="from-check-label py-1" for="open">yes</label>
              </div>
              <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                <input class="radio form-check input mx-3 big" type="radio" id="Trial_NS" name="Trial_NS" value="no" @if($page->Trial_NS == "no") checked @endif>
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
                <label class="form-check label mt-2">CP CPK</label>
              </div>
              <div class="form check-form-check-inline col-2 px-3 py-4 d-flex ">
                <input class="radio form-check input mx-3 big" type="radio" id="CPK" name="CP_CPK" value="yes" @if($page->CP_CPK == "yes") checked @endif>
                <label class="from-check-label py-1" for="open">yes</label>
              </div>
              <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                <input class="radio form-check input mx-3 big" type="radio" id="CPK" name="CP_CPK" value="no" @if($page->CP_CPK == "no") checked @endif>
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
                <label class="form-check label mt-2">Trial Next Proses</label>
              </div>
              <div class="form check-form-check-inline col-2 px-3 py-4 d-flex ">
                <input class="radio form-check input mx-3 big" type="radio" id="Trial_Proses" name="Trial_Proses" value="yes" @if($page->Trial_Proses == "yes") checked @endif>
                <label class="from-check-label py-1" for="open">yes</label>
              </div>
              <div class="form-check form-check-inline col-3 px-3 py-4 d-flex">
                <input class="radio form-check input mx-3 big" type="radio" id="Trial_Proses" name="Trial_Proses" value="no" @if($page->Trial_Proses == "no") checked @endif>
                <label class="form-check-label py-1" for="close">no</label>
                <!-- <button type="button" class="btn btn-secondary">Right</button> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col ps-5 ms-5">
          <button type="submit" class="btn btn-primary btn-lg ms-5" name="SUBMIT">Save Change</button>
        </div>
        </form>
      </div>
    </div>
</div>
</body>
</html>
@endsection
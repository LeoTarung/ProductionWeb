@extends('mainLHP')
@section('content')

 {{-- -------------------------------- CSS  ------------------------------ --}}
 <link rel="stylesheet" type="text/css" href="{{ asset('/css/final-inspection.css') }}">
 {{-- --------------------------------      ------------------------------ --}}

<div class="container">
        <div class="card mt-4 mb-3">
            <div class="card-header">P R E P A R A T I O N</div>
            <form action="/lhp-final-inspection/simpan" method="post">
            @csrf
              <div class="row mx-2 mt-3">
                <div class="col-6">
                  <label for="nrp">NRP</label>
                  <input type="number" id="nrp" name="nrp" placeholder="">

                </div>
                <div class="col-6">
                  <label for="nama">Nama</label>
                  <input type="text" id="nama" name="nama" placeholder="" required>
                </div>
              </div>

              <div class="row mx-2 my-2">
                <div class="col-6">
                  <div class="form-floating ">
                    <div class="btn-group-horizontal" role="group"
                        aria-label="horizontal radio toggle  button group">
                        <label class="">Pilih Gate:</label><br>

                        <input type="radio" class="btn-check" name="gate" id="gate1"
                            autocomplete="off" value="1">
                        <label class="btn btn-outline-success " for="gate1">Gate 1</label>
                        
                        <input type="radio" class="btn-check" name="gate" id="gate2"
                            autocomplete="off" value="2">
                        <label class="btn btn-outline-success " for="gate2">Gate 2</label>
                        
                        <input type="radio" class="btn-check" name="gate" id="gate3"
                            autocomplete="off" value="3">
                        <label class="btn btn-outline-success " for="gate3">Gate 3</label>
                        
                        <input type="radio" class="btn-check" name="gate" id="gate4"
                            autocomplete="off" value="4">
                        <label class="btn btn-outline-success " for="gate4">Gate 4</label>
                        
                        <input type="radio" class="btn-check" name="gate" id="gate5"
                            autocomplete="off" value="5">
                        <label class="btn btn-outline-success " for="gate5">Gate 5</label>
                        
                        <input type="radio" class="btn-check" name="gate" id="gate6"
                            autocomplete="off" value="6">
                        <label class="btn btn-outline-success " for="gate6">Gate 6</label>
                    </div>
                  </div>                
                </div>     
                <div class="col-6">
                  <label for="nolhp">No LHP</label>
                  <input type="text" id="nolhp" name="no_lhp" placeholder="">
                </div>              
              </div>

              <div class="row mx-2 mb-3">
                <div class="col">
                  <label for="part">Part</label> <br>
                  
                  <div class="modal-body">
                    <div class="select-wrapper">
                      <div class="form-outline">
                        <input type="text" class="form-control" role="combobox" aria-multiselectable="false" aria-disabled="false">
                      </div>
                    </div>
                  </div>
                  {{-- <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Part
                    </button>
                    <ul class="dropdown-menu">
                    <li><input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()"></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">ica</a></li>
                    </ul>
                  </div> --}}
                </div>
              </div>
                
                <div class="card-footer d-flex justify-content-end">
                    <button type="reset" class="btn btn-danger">Reset
                    </button>
                    <button type="submit" class="btn btn-success mx-3">Simpan </button>
                </div>
            
            </form>
        </div>
    </div>

    <script>
      


    </script>

@endsection
@extends('mainLHP')
@section('content')

 {{-- -------------------------------- CSS  ------------------------------ --}}
 <link rel="stylesheet" type="text/css" href="{{ asset('/css/final-inspection.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('/css/select2.min.css') }}" />
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
  {{-- --------------------------------      ------------------------------ --}}

<div class="container">
        <div class="card mt-4 mb-3">
            <div class="card-header">P R E P A R A T I O N</div>
            <form action="/lhp-final-inspection/simpan" method="post">
            @csrf
              <div class="row mx-2 mt-3">
                <div class="col-6 ">
                  <label for="nrp">NRP</label>
                  <input type="number" id="nrp" name="nrp" placeholder="" class="kotak" required>

                </div>
                <div class="col-6">
                  <label for="nama">Nama</label>
                  <input type="text" id="nama" name="nama" placeholder="" class="kotak" required>
                </div>
              </div>

              <div class="row mx-2 my-2">
                <div class="col-6">
                  <div class="form-floating ">
                    <div class="btn-group-horizontal" role="group"
                        aria-label="horizontal radio toggle  button group" required>
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
                    {{-- <label for="nolhp">No LHP</label>
                    <input type="text" id="nolhp" name="no_lhp" placeholder="" class="kotak" required>
                    --}}

                    <label for="part">Part</label> <br>
                    <select class="select" name="nama_part" style="height: 100%; !important" required>
                
                      <option value="1">ABA</option>
                      <option value="2">ICI</option>
                      <option value="3">ODO</option>

                    </select>
                </div>      

              </div>

              {{-- <div class="row mx-2 mb-3">
                <div class="col">
                  <label for="part">Part</label> <br>
                  <select class="select" name="nama_part" required>
              
                    <option value="1">ABA</option>
                    <option value="2">ICI</option>
                    <option value="3">ODO</option>

                  </select>

                </div>
              </div> --}}
                
                <div class="card-footer d-flex justify-content-end">
                    <button type="reset" class="btn btn-danger">Reset
                    </button>
                    <button type="submit" class="btn btn-success mx-3">Simpan </button>
                </div>
            
            </form>
        </div>
    </div>

    <script>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script></body>

      <script>
        $(document).ready(function () {
        $('select').select2();
        });
    </script>

@endsection
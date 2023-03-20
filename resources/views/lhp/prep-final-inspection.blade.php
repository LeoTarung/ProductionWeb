@extends('mainLHP')
@section('content')

 {{-- -------------------------------- CSS  ------------------------------ --}}
 <link rel="stylesheet" type="text/css" href="{{ asset('/css/final-inspection.css') }}">
 {{-- --------------------------------      ------------------------------ --}}

<div class="container">
        <div class="card">
            <div class="card-header">P R E P A R A T I O N</div>
            <form action="/lhp-final-inspection" method="post">
            
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                           <div class="col-3">
                                <label for="nrp">NRP</label>
                           </div>
                           <div class="col-9">
                                <input type="text" id="nrp" name="nrp" placeholder="Masukkan NRP">
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="gate">Gate</label>
                           </div>
                           <div class="col-9">
                                <input type="text" id="gate" name="gate" placeholder="Masukkan ">
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="part">PART</label>
                           </div>
                           <div class="col-9">
                                <div class="btn-group">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()"></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">ica</a></li>
                                    </ul>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary">Reset
                    </button>
                    <button type="submit" class="btn btn-success mx-3">Simpan </button>
                </div>
            
            </form>
        </div>
    </div>

    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        function filterFunction() {
          var input, filter, ul, li, a, i;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          div = document.getElementById("myDropdown");
          a = div.getElementsByTagName("a");
          for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              a[i].style.display = "";
            } else {
              a[i].style.display = "none";
            }
          }
        }
    </script>

@endsection
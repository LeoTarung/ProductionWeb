@extends('main')
@section('content')
<div class="main-content d-flex flex-column">
    {{-- <div class="flip-card">
        <div class="flip-card-inner ">
            <div class="shadow-lg border flip-card-front rounded">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ipsum debitis ipsa libero eligendi maiores voluptas alias aspernatur suscipit natus, deserunt voluptatem, rem atque corporis asperiores optio doloribus iste? Ex quam impedit dicta quasi error amet neque aliquam alias, est autem repellendus cumque ea eius dolore voluptatem quia soluta. Beatae?</p>
            </div>
            <div class="shadow-lg border flip-card-back rounded">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ipsum debitis ipsa libero eligendi maiores voluptas alias aspernatur suscipit natus, deserunt voluptatem, rem atque corporis asperiores optio doloribus iste? Ex quam impedit dicta quasi error amet neque aliquam alias, est autem repellendus cumque ea eius dolore voluptatem quia soluta. Beatae?</p>               
            </div>
        </div>
    </div> --}}
    <div class="container-fluid">

            
    {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <input type="hidden" onload="naik('line1')">
          <button class="px-5 mx-1 nav-link active"  data-bs-toggle="pill" type="button"   aria-selected="true" onclick="naik('line1')">LINE 1</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="px-5 mx-1 nav-link"  data-bs-toggle="pill"  type="button"   aria-selected="false" onclick="naik('line2')">LINE 2</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="px-5 mx-1 nav-link"data-bs-toggle="pill"  type="button"   aria-selected="false" onclick="naik('line3')">LINE 3</button>
        </li>
    </ul>

    <div id="munculah"></div>
    <script>
        function naik(isi){
            if(isi == null){
                document.getElementById("munculah").innerHTML = "KOSONG CUK";
            } else {
                document.getElementById("munculah").innerHTML = isi;
            }
            console.log(isi)
        }
    </script> --}}

      {{-- <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
      </div> --}}

      <div class="row">
        <div class="col-3 bg-primary">1</div>
        <div class="col-3 bg-secondary">2</div>
        <div class="col-3 bg-danger">3</div>
        <div class="col-3 bg-warning"><button class="btn btn-warning" onClick="editmesin('mesin')">EDIT MACHINE</button></div>
      </div>

        <div class="row">
            <div class="col-3">
                <div class="flip-card">
                    <div class="flip-card-inner ">
                        <div class=" flip-card-front ">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-success"></li>
                        <li class="list-group-item">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ipsum debitis ipsa libero eligendi maiores voluptas alias aspernatur suscipit natus, deserunt voluptatem, rem atque corporis asperiores optio doloribus iste? Ex quam impedit dicta quasi error amet neque aliquam alias, est autem repellendus cumque ea eius dolore voluptatem quia soluta. Beatae?</li>
                        </ul>
                    </div>
                        </div>
                        <div class=" flip-card-back ">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-success"></li>
                        <li class="list-group-item">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ipsum debitis ipsa libero eligendi maiores voluptas alias aspernatur suscipit natus, deserunt voluptatem, rem atque corporis asperiores optio doloribus iste? Ex quam impedit dicta quasi error amet neque aliquam alias, est autem repellendus cumque ea eius dolore voluptatem quia soluta. Beatae?</li>
                        </ul>
                    </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col">
                
            </div>
        </div>
       

        

        {{-- MODAL --}}
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h1>gatau males mau beli truck</h1>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Understood</button>
                </div>
              </div>
            </div>
          </div>
        {{-- MODAL --}}
    </div>
</div>
<script>
    function editmesin(mesin){
        $("#staticBackdropLabel").html('LHP Hourly'); //Untuk kasih judul di modal
        $("#staticBackdrop").modal('show'); //kalo ID pake "#" kalo class pake "." 
    }
</script>
@endsection
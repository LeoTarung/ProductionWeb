

{{-- row total  --}}
<div class="row w-100">
    <div class="col-4">
        <div class="card " style=" border-radius: 10px 5px 5px 10px; border-left: 5px solid blue;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2 ">
                        <div class="fs-2 fw-2 text-primary">Total Produksi</div>
                        <div class="fs-3 fw-1 text-dark">{{ $totalProduksi }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-chart-simple fa-2xl" style="color: #80abf4;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card " style=" border-radius:105px 5px 5px105px;border-left: 5px solid green;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2 ">
                        <div class="fs-2 fw-2 text-success">Total OK</div>
                        <div class="fs-3 fw-1 text-dark">{{ $totalOk }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-regular fa-circle-check fa-2xl" style="color: #198754;"></i>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card " style=" border-radius:105px 5px 5px105px;border-left: 5px solid red;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2 ">
                        <div class="fs-2 fw-2 text-danger">Total NG</div>
                        <div class="fs-3 fw-1 text-dark">{{ $totalReject }}
                            <span class="fs-3 fw-1 text-danger">({{ $totalReject/$totalProduksi * 100 }}%)</span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-sharp fa-regular fa-circle-xmark fa-2xl" style="color: red"></i>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
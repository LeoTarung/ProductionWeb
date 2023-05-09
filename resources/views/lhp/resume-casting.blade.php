<div class="container mx-3 mb-3"></div>
<div class="row mb-3 d-flex justify-content-between">
    <div class="col-3">
        <div class="card mt-3 ms-5 shadow-sm h-75 mb-3  ">
            <div class="row">
                <div class="col-auto "></div>
                <div class="col-11 text-center mt-2 fw-bold fs-5">{{ $date }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 ">
        <div class="row  d-flex justify-content-end h-100 ">
            <div class="col-5 ">
                <div class="card mt-3 ms-2 shadow-sm h-75 bg-success border-0">
                    <div class="row">
                        <div class="col-8 text-center mt-2 fw-bold font-white ">
                            TARGET /jam
                        </div>
                        <div class="col-4 text-center mt-2 fw-bold border-1 d-flex align-items-center text-center ">
                            <div class="card shadow-sm w-75"> {{ $targetHours }}</div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-2 ">
                    <div class="card  mt-3  shadow-sm h-75">
                        <div class="row">
                            <div class="col-auto"></div>

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<table class="table table-success table-striped mt-3">
    <thead class="table-dark text-center fw-bold">
        <tr>
            <td class="fs-5">
                JAM
            </td>
            <td class="fs-5">
                TOTAL PRODUKSI
            </td>
            <td class="fs-5">TOTAK OK</td>
            <td class="fs-5">TOTAL NG</td>
            <td class="fs-5">TOTAL DOWNTIME</td>

    </thead>
    <tbody class="fs-5">
        @foreach ($data as $a)
            <tr>
                <td class="text-center fs-5">
                    <div class="col-sm">
                        <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City"
                            value="{{ $a[0] }}" name="jam" readonly>
                    </div>
                </td>
                <td class="text-center fs-5">
                    <div class="col-sm">
                        <input type="number" class="form-control text-center fs-5 fw-bold" aria-label="City"
                            value="{{ $a[1] }}" name="total_produksi" readonly>
                    </div>
                </td>
                <td class="text-center fs-5">
                    <div class="col-sm">
                        <input type="number" class="form-control text-center fs-5 fw-bold" aria-label="City"
                            value="{{ $a[1] - $a[2] }}" name="total_ok" readonly>
                    </div>
                </td>
                <td class="text-center fs-5">
                    <div class="col-sm">
                        <input type="number" class="form-control text-center fs-5 fw-bold" aria-label="City"
                            value="{{ $a[2] }}" name="total_ng" readonly>
                    </div>
                </td>
                <td class="text-center fs-5">
                    <div class="col-sm">
                        <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City"
                            value="{{ $a[3] }} Menit" name="total_dt" readonly>
                    </div>
                </td>
            </tr>
        @endforeach
</table>

<div class="container m-3"></div>
<table class="table table-success table-striped">
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
        @foreach ($sql1 as $a)
            <tr>
                <td class="text-center fs-5">
                    <div class="col-sm">
                        <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City"
                            value="{{ $r->created_at->format('H:i') }}:00" name="jam" readonly>
                    </div>
                </td>
                <td class="text-center fs-5">
                    <div class="col-sm">
                        <input type="number" class="form-control text-center fs-5 fw-bold" aria-label="City"
                            value="" name="total_ok" readonly>
                    </div>
                </td>
                <td class="text-center fs-5">
                    <div class="col-sm">
                        <input type="number" class="form-control text-center fs-5 fw-bold" aria-label="City"
                            value="{{ $a->reject }}" name="total_ng" readonly>
                    </div>
                </td>
                <td class="text-center fs-5">
                    <div class="col-sm">
                        <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City"
                            value="{{ $a->downtime }}" name="total_dt" readonly>
                    </div>
                </td>
            </tr>
        @endforeach
</table>

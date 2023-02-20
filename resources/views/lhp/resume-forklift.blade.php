<table class="table table-success table-striped">
    <thead class="table-dark text-center fw-bold">
        <tr>
            <td class="fs-5">
                JAM
            </td>
            <td class="fs-5">
                FURNACE
            </td>
            <td class="fs-5">
                MESIN CASTING
            </td>
            <td class="fs-5">
                FREKUENSI SUPPLY
            </td>
            <td class="fs-5">
                TOTAL TAPPING
            </td>

    </thead>
    <tbody class="fs-5">
        @foreach ($sql1 as $a)
            <tr>
                <td class="text-center fs-5">
                    <div class="col-sm">
                        <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City"
                            value="{{ date('H', strtotime($a->jam)) }}:00" name="jam" readonly>
                    </div>
                </td>
                <td class="text-center fs-5">
                    <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City"
                        value="{{ $a->furnace }}" name="forklift" readonly>
                </td>
                <td class="text-center fs-5">
                    <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City"
                        value="{{ $a->Mesin_Casting }}" name="mc" readonly>
                </td>
                <td class="text-center fs-5">
                    <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City"
                        value="{{ $a->frekuensi }} kali" name="tapping" readonly>
                </td>
                <td class="text-center fs-5">
                    <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City"
                        value="{{ $a->total_tapping }}" name="total_return_rs" readonly>
                </td>

            </tr>
        @endforeach
</table>

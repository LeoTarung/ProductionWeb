<div class="container m-3"></div>
<table class="table table-success table-striped">
    <thead class="table-dark text-center fw-bold">
        <tr>
            <td class="fs-5">
                JAM
            </td>
            <td class="fs-5">
                TAPPING
            </td>
            <td class="fs-5">
                TOTAL TAPPING
            </td>
            <!-- <td class="fs-5">
                SCRAP
            </td> -->
            <td class="fs-5">SISA STOK MOLTEN</td>

    </thead>
    <tbody class="fs-5">
        @foreach ($sql1 as $a)
            <tr>
                <td class="text-center fs-5">
                    <div class="col-sm">
                        <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City"
                            value="" name="jam" readonly>
                    </div>
                </td>

                <td class="text-center fs-5">
                    <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City" value=""
                        name="total_return_rs">
                </td>
                {{-- <td class="text-center fs-5">
                    <input type="text" class="form-control text-center fs-5 fw-bold" aria-label="City"
                        value="{{ $a->stok_molten }}" name="total_return_rs">
                </td> --}}

            </tr>
        @endforeach
</table>
